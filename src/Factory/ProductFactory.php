<?php

declare(strict_types=1);

namespace App\Factory;

use Sylius\Component\Product\Factory\ProductFactoryInterface;
use Sylius\Component\Product\Model\ProductInterface;

final class ProductFactory implements ProductFactoryInterface
{
    /** @var ProductFactoryInterface */
    private $decoratedFactory;

    public function __construct(ProductFactoryInterface $decoratedFactory)
    {
        $this->decoratedFactory = $decoratedFactory;
    }

    public function createNew(): ProductInterface
    {
        return $this->decoratedFactory->createNew();
    }

    public function createWithVariant(): ProductInterface
    {
        return $this->decoratedFactory->createWithVariant();
    }

    public function createDisabled(): ProductInterface
    {
        /** @var ProductInterface $product */
        $product = $this->decoratedFactory->createWithVariant();

        $product->setEnabled(false);

        return $product;
    }
}
