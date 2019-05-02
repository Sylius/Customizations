<?php

declare(strict_types=1);

namespace App\Menu;

use Sylius\Bundle\AdminBundle\Event\ProductMenuBuilderEvent;

final class AdminProductFormMenuListener
{
    public function addItems(ProductMenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $menu
            ->addChild('manufacturer')
            ->setAttribute('template', 'Admin/Product/Tab/_manufacturer.html.twig')
            ->setLabel('Manufacturer')
        ;
    }
}
