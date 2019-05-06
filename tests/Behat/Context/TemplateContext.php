<?php

declare(strict_types=1);

namespace App\Tests\Behat\Context;

use App\Tests\Behat\Page\CountryPageInterface;
use App\Tests\Behat\Page\HomePageInterface;
use App\Tests\Behat\Page\LoginPageInterface;
use Behat\Behat\Context\Context;
use Webmozart\Assert\Assert;

final class TemplateContext implements Context
{
    /** @var HomePageInterface */
    private $homePage;

    /** @var CountryPageInterface */
    private $countryPage;

    /** @var LoginPageInterface */
    private $loginPage;

    public function __construct(HomePageInterface $homePage, CountryPageInterface $countryPage, LoginPageInterface $loginPage)
    {
        $this->homePage = $homePage;
        $this->countryPage = $countryPage;
        $this->loginPage = $loginPage;
    }

    /**
     * @When I check homepage
     */
    public function iChecksHomepage(): void
    {
        $this->homePage->open();
    }

    /**
     * @Then I should see :title
     */
    public function iShouldSeeTitle(string $title): void
    {
        Assert::true($this->homePage->isCorrectTitle($title));
    }

    /**
     * @Then I should see my customization :customization
     */
    public function iSeeingMyCustomization(string $title): void
    {
        Assert::true($this->countryPage->isCorrectTitle($title));
    }

    /**
     * @Then I want to login
     */
    public function iWantToLogin(): void
    {
        $this->loginPage->open();
    }

    /**
     * @Then I should see my new title :title
     */
    public function iSeeingMyNewTitle(string $title): void
    {
        Assert::true($this->loginPage->isCorrectTitle($title));
    }
}
