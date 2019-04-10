<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\ShippingMethod;

use Sylius\Behat\Page\Admin\ShippingMethod\UpdatePage as BaseUpdatePage;

final class UpdatePage extends BaseUpdatePage implements UpdatePageInterface
{
    public function addEstimatedDeliveryTime(string $message): void
    {
        $this->getDocument()->fillField('sylius_shipping_method[estimatedDeliveryTime]',$message);
    }

    public function getEstimatedDeliveryTime(): string
    {
        return $this->getDocument()->findById( 'estimated-delivery-time-message')->getText();
    }
}
