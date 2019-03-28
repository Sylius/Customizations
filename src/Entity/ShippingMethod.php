<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\ShippingMethod as BaseShippingMethod;
use Sylius\Component\Shipping\Model\ShippingMethodTranslation;
use Sylius\Component\Shipping\Model\ShippingMethodTranslationInterface;

/**
 * @ORM\MappedSuperclass()
 * @ORM\Table(name="sylius_shipping_method")
 */
final class ShippingMethod extends BaseShippingMethod
{
    /** @ORM\Column(type="string",nullable=true) */
    private $estimatedDeliveryTime;

    public function getEstimatedDeliveryTime(): string
    {
        return $this->estimatedDeliveryTime;
    }

    public function setEstimatedDeliveryTime(string $estimatedDeliveryTime): void
    {
        $this->estimatedDeliveryTime = $estimatedDeliveryTime;
    }

    protected function createTranslation(): ShippingMethodTranslationInterface
    {
        return new ShippingMethodTranslation();
    }
}
