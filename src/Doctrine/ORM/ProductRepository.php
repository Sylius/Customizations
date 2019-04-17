<?php

declare(strict_types=1);

namespace App\Doctrine\ORM;

use App\Repository\ProductRepositoryInterface;
use Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductRepository as BaseProductRepository;

final class ProductRepository extends BaseProductRepository implements ProductRepositoryInterface
{
    public function findAllByOnHand(int $limit = 8): array
    {
        return $this->createQueryBuilder('o')
            ->addSelect('variant')
            ->addSelect('translation')
            ->leftJoin('o.variants', 'variant')
            ->leftJoin('o.translations', 'translation')
            ->addOrderBy('variant.onHand', 'ASC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult()
        ;
    }
}
