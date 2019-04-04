<?php

declare(strict_types=1);

namespace App\Tests\contexts\shop;

use App\Tests\Behat\Page\Shop\Homepage;
use Behat\Behat\Context\Context;
use Webmozart\Assert\Assert;

final class HomepageContext implements Context
{
    /** @var Homepage */
    private $homePage;

    public function __construct(Homepage $homePage)
    {
        $this->homePage = $homePage;
    }

    /**
    * @When I am on the homepage
    **/
    public function showHomePage(): void
    {
        $this->homePage->open();
    }
    /**
     * @Then I should see product :productName
     */
    public function iShouldSeeProduct(string $productName): void
    {
        Assert::true(in_array($productName, $this->homePage->getProductsNameFromHomepage()));
    }

    /**
     * @Given I should not see product :productName
     */
    public function iShouldNotSeeProduct(string $productName): void
    {
        Assert::false(in_array($productName, $this->homePage->getProductsNameFromHomepage()));
    }
}
