<?php

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
                ->addChild('ship', [
                    'route' => 'sylius_admin_order_shipment_ship',
                    'routeParameters' => ['id' => $order->getId()],
                ])
                ->setAttribute('type', 'link')
                ->setLabel('Ship')
                ->setLabelAttribute('icon', 'shipping fast')
                ->setLabelAttribute('color', 'green')
            ;
        }
    }
}
