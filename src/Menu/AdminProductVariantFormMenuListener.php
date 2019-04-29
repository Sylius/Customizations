<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Menu;

use Sylius\Bundle\AdminBundle\Event\ProductVariantMenuBuilderEvent;

final class AdminProductVariantFormMenuListener
{
    public function addItems(ProductVariantMenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $menu
            ->addChild('customMedia')
            ->setAttribute('template', 'Admin/ProductVariant/Tab/_media.html.twig')
            ->setLabel('Custom Media')
        ;
    }
}
