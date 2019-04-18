<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\Shop;

use Sylius\Behat\Page\Shop\Account\ProfileUpdatePage as BaseProfileUpdatePage;

final class ProfileUpdatePage extends BaseProfileUpdatePage implements ProfileUpdatePageInterface
{
    public function getSecondaryPhoneNumber(): ?string
    {
        return $this->getDocument()->findById( 'sylius_customer_profile_secondaryPhoneNumber')->getValue();
    }

    public function getSurname(): ?string
    {
        return $this->getDocument()->findById( 'sylius_customer_profile_lastName')->getValue();
    }

    public function specifySecondaryPhoneNumber(string $contactHours): void
    {
        $this->getDocument()->fillField('sylius_customer_profile[secondaryPhoneNumber]',$contactHours);
    }

    public function specifySurname(string $surname): void
    {
        $this->getDocument()->fillField('sylius_customer_profile[lastName]', $surname);
    }
}
