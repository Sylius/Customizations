<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\ShippingMethod;

use Sylius\Behat\Page\Admin\ShippingMethod\UpdatePageInterface as BaseUpdatePageInterface;

interface UpdatePageInterface extends BaseUpdatePageInterface
{
    public function addEstimatedDeliveryTime(string $message): void;

    public function getEstimatedDeliveryTime(): string;
}
