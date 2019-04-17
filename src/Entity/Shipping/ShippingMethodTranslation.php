<?php

declare(strict_types=1);

namespace App\Entity\Shipping;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Shipping\Model\ShippingMethodTranslation as BaseShippingMethodTranslation;
use Sylius\Component\Shipping\Model\ShippingMethodTranslationInterface;

/**
 * @ORM\Entity()
 * @ORM\Table(name="sylius_shipping_method_translation")
 */
class ShippingMethodTranslation extends BaseShippingMethodTranslation implements ShippingMethodTranslationInterface
{
    /** @ORM\Column(type="string", nullable=true) */
    private $deliveryConditions;

    public function getDeliveryConditions(): ?string
    {
        return $this->deliveryConditions;
    }

    public function setDeliveryConditions(?string $deliveryConditions): void
    {
        $this->deliveryConditions = $deliveryConditions;
    }
}
