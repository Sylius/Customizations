<?php

declare(strict_types=1);

namespace App\Tests\Behat\Contexts\Ui\Shop;

use App\Tests\Behat\Page\Shop\ProfileUpdatePageInterface;
use Behat\Behat\Context\Context;
use Webmozart\Assert\Assert;

final class ManagingCustomersContext implements Context
{
    /** @var ProfileUpdatePageInterface */
    private $updatePage;

    public function __construct(ProfileUpdatePageInterface $updatePage)
    {
        $this->updatePage = $updatePage;
    }

    /**
     * @When I specify my surname as :surname
     */
    public function iSpecifyMySurnameAs(string $surname): void
    {
        $this->updatePage->specifySurname($surname);
    }

    /**
     * @When I specify my secondary phone number as :secondaryPhoneNumber
     */
    public function iSpecifyMySecondaryPhoneNumber(string $secondaryPhoneNumber): void
    {
        $this->updatePage->specifySecondaryPhoneNumber($secondaryPhoneNumber);
    }

    /**
     * @Then I should see that my surname is :surname
     */
    public function iShouldSeeThatMySurnameIs(string $surname): void
    {
        Assert::same($this->updatePage->getSurname(),$surname);
    }

    /**
     * @Then I should see that my secondary phone number is :secondaryPhoneNumber
     */
    public function iShouldSeeThatMySecondaryPhoneNumberIs(string $secondaryPhoneNumber): void
    {
        Assert::same($this->updatePage->getSecondaryPhoneNumber(),$secondaryPhoneNumber);
    }
}
