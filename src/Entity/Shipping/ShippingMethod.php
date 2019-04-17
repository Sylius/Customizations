<?php

declare(strict_types=1);

namespace App\Entity\Shipping;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\ShippingMethod as BaseShippingMethod;
use Sylius\Component\Core\Model\ShippingMethodInterface;
use Sylius\Component\Shipping\Model\ShippingMethodTranslationInterface;

/**
 * @ORM\Entity()
 * @ORM\Table(name="sylius_shipping_method")
 */
class ShippingMethod extends BaseShippingMethod implements ShippingMethodInterface
{
    public function getDeliveryConditions(): ?string
    {
        return $this->getTranslation()->getDeliveryConditions();
    }

    public function setDeliveryConditions(?string $deliveryConditions): void
    {
        $this->getTranslation()->setDeliveryConditions($deliveryConditions);
    }

    protected function createTranslation(): ShippingMethodTranslationInterface
    {
        return new ShippingMethodTranslation();
    }
}
