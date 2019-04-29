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

use Sylius\Bundle\AdminBundle\Event\CustomerShowMenuBuilderEvent;

final class AdminCustomerShowMenuListener
{
    public function addAdminCustomerShowMenuItems(CustomerShowMenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();
        $customer = $event->getCustomer();

        if (null !== $customer->getUser()) {
            $menu
                ->addChild('impersonate', [
                    'route' => 'sylius_admin_impersonate_user',
                    'routeParameters' => ['username' => $customer->getUser()->getEmailCanonical()]
                ])
                ->setAttribute('type', 'link')
                ->setLabel('Impersonate')
                ->setLabelAttribute('icon', 'unhide')
                ->setLabelAttribute('color', 'blue')
            ;
        }
    }
}
