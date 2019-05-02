<?php

declare(strict_types=1);

namespace App\Menu;

use Sylius\Bundle\AdminBundle\Event\ProductVariantMenuBuilderEvent;

final class AdminProductVariantFormMenuListener
{
    public function addItems(ProductVariantMenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $menu
            ->addChild('Media')
            ->setAttribute('template', 'Admin/ProductVariant/Tab/_media.html.twig')
            ->setLabel('Media')
        ;
    }
}
