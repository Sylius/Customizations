<?php

declare(strict_types=1);

namespace App\Tests\Behat\Context\Ui\Shop;

use App\Tests\Behat\Page\Custom\CustomPage;
use App\Tests\Behat\Page\Shop\ProductPage;
use Behat\Behat\Context\Context;
use App\Tests\Behat\Page\Shop\CustomHomePage;
use Webmozart\Assert\Assert;

final class HomePageContext implements Context
{
    /** @var CustomPage */
    private $customPage;

    /** @var CustomHomePage */
    private $customHomePage;

    /** @var ProductPage */
    private $productPage;

    public function __construct(CustomPage $customPage, CustomHomePage $customHomePage, ProductPage $productPage)
    {
        $this->customPage = $customPage;
        $this->customHomePage = $customHomePage;
        $this->productPage = $productPage;
    }

    /**
     * @When I am on the custom page
     */
    public function iAmOnTheCustompage(): void
    {
        $this->customPage->open();
    }

    /**
     * @When I am on the custom homepage
     */
    public function iAmOnTheCustomHomepage(): void
    {
        $this->customHomePage->open();
    }

    /**
     * @When I am on the custom recommended product page
     **/
    public function iAmOnTheCustomRecommendedProductPage(): void
    {
        $this->productPage->open();
    }

    /**
     * @Then I should see product :product in the site
     */
    public function iShouldSeeProductInTheSite(string $product): void
    {
        Assert::true($this->productPage->isProductsNamesFromProductPage($product));
    }

    /**
     * @Then I should see :numberOfProducts products in the homepage
     */
    public function iShouldSeeProductsInTheHomepage(int $numberOfProducts): void
    {
        Assert::same(count($this->customHomePage->getLatestProductsNames()), $numberOfProducts);
    }

    /**
     * @Then I should see :content in page
     */
    public function iShouldSeeInPage(string $content): void
    {
        Assert::true($this->customPage->isContentPage($content));
    }
}
