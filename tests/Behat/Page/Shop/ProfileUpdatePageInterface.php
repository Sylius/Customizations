<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\Shop;

use Sylius\Behat\Page\Shop\Account\ProfileUpdatePageInterface as BaseProfileUpdatePageInterface;

interface ProfileUpdatePageInterface extends BaseProfileUpdatePageInterface
{
    public function getSecondaryPhoneNumber(): ?string;

    public function getSurname(): ?string;

    public function specifySecondaryPhoneNumber(string $contactHours): void;

    public function specifySurname(string $surname): void;
}
