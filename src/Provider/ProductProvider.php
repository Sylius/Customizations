<?php

declare(strict_types=1);

namespace App\Provider;

use Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductRepository;
use Sylius\Component\Resource\Model\ResourceInterface;

final class ProductProvider
{
    /** @var ProductRepository */
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getRecommendedProduct(ResourceInterface $id): object
    {
        return $this->productRepository->find($id);
    }
}
