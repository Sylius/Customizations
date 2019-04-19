<?php

declare(strict_types=1);

namespace spec\App\Factory;

use App\Factory\ProductFactory;
use PhpSpec\ObjectBehavior;
use Sylius\Component\Core\Model\ProductInterface;
use Sylius\Component\Product\Factory\ProductFactoryInterface;

final class ProductFactorySpec extends ObjectBehavior
{
    function let(ProductFactoryInterface $productFactory): void
    {
        $this->beConstructedWith($productFactory);
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(ProductFactory::class);
    }

    function it_is_product_factory_instance(): void
    {
        $this->shouldImplement(ProductFactoryInterface::class);
    }

    function it_creates_a_product(ProductFactoryInterface $productFactory, ProductInterface $product): void
    {
        $productFactory->createNew()->willReturn($product);

        $this->createNew()->shouldReturn($product);
    }

    function it_creates_a_product_with_variant(ProductFactoryInterface $productFactory, ProductInterface $product): void
    {
        $productFactory->createWithVariant()->willReturn($product);

        $this->createWithVariant()->shouldReturn($product);
    }

    function it_creates_a_disabled_product_with_variant(ProductFactoryInterface $productFactory, ProductInterface $product): void
    {
        $productFactory->createWithVariant()->willReturn($product);

        $product->setEnabled(false)->shouldBeCalled();

        $this->createDisabled()->shouldReturn($product);
    }
}
