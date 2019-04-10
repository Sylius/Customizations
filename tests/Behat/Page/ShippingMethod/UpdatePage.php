<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\ShippingMethod;

use Sylius\Behat\Page\Admin\ShippingMethod\UpdatePage as BaseUpdatePage;

final class UpdatePage extends BaseUpdatePage implements UpdatePageInterface
{
    public function setDeliveryConditions(string $deliveryCondition): void
    {
        $this->getDocument()->fillField('sylius_shipping_method[translations][en_US][deliveryConditions]',$deliveryCondition);
    }

    public function getDeliveryConditions(): ?string
    {
        return $this->getDocument()->findById( 'delivery-condition-message')->getText();
    }
}
