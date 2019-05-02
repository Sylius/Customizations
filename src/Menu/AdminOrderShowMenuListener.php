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

use Sylius\Bundle\AdminBundle\Event\OrderShowMenuBuilderEvent;

final class AdminOrderShowMenuListener
{
    public function addAdminOrderShowMenuItems(OrderShowMenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();
        $order = $event->getOrder();

        if (null !== $order->getId()) {
            $menu
                ->addChild('fulfill', [
                    'route' => 'sylius_admin_order_shipment_ship',
                    'routeParameters' => ['id' => $order->getId()]
                ])
                ->setAttribute('type', 'link')
                ->setLabel('ship')
                ->setLabelAttribute('icon', 'checkmark')
                ->setLabelAttribute('color', 'green')
            ;
        }
    }
}
