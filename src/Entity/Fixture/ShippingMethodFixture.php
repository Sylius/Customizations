<?php

declare(strict_types=1);

namespace App\Entity\Fixture;

use Sylius\Bundle\CoreBundle\Fixture\ShippingMethodFixture as BaseShippingMethodFixture;
use Sylius\Bundle\FixturesBundle\Fixture\FixtureInterface;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;

final class ShippingMethodFixture extends BaseShippingMethodFixture implements FixtureInterface
{
    public function getName(): string
    {
        return 'shipping_method';
    }

    protected function configureResourceNode(ArrayNodeDefinition $resourceNode): void
    {
        parent::configureResourceNode($resourceNode);

        $resourceNode
            ->children()
                ->scalarNode('deliveryConditions')
            ->end()
        ;
    }
}
