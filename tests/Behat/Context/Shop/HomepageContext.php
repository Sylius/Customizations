<?php

declare(strict_types=1);

namespace App\Tests\Behat\Context\Shop;

use App\Tests\Behat\Page\Shop\HomePage;
use Behat\Behat\Context\Context;
use Webmozart\Assert\Assert;

final class HomepageContext implements Context
{
    /** @var HomePage */
    private $homePage;

    public function __construct(HomePage $homePage)
    {
        $this->homePage = $homePage;
    }

    /**
    * @Given I am on the homepage
    **/
    public function iAmOnTheHomepage(): void
    {
        $this->homePage->open();
    }

    /**
     * @Then I should see product :productName as the first one in the list
     */
    public function iShouldSeeProductAtTheFirstPlace(string $productName): void
    {
        Assert::same($productName, $this->homePage->getProductsNamesFromHomepage()[0]);
    }

    /**
     * @Then I should see products :firstProductName, :secondProductName, :thirdProductName
     */
    public function iShouldSeeProduct(string $firstProductName, string $secondProductName, string $thirdProductName): void
    {
        Assert::true(in_array($firstProductName, $this->homePage->getProductsNamesFromHomepage()));
        Assert::true(in_array($secondProductName, $this->homePage->getProductsNamesFromHomepage()));
        Assert::true(in_array($thirdProductName, $this->homePage->getProductsNamesFromHomepage()));
    }

    /**
     * @Then I should not see product :productName
     */
    public function iShouldNotSeeProduct(string $productName): void
    {
        Assert::false(in_array($productName, $this->homePage->getProductsNamesFromHomepage()));
    }
}
