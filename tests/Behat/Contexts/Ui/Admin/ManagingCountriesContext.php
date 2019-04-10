<?php

declare(strict_types=1);

namespace App\Tests\Behat\Contexts\Ui\Admin;

use App\Tests\Behat\Page\Admin\Country\CreatePageInterface;
use Behat\Behat\Context\Context;
use Webmozart\Assert\Assert;

final class ManagingCountriesContext implements Context
{
    /** @var CreatePageInterface */
    private $createPage;

    public function __construct(CreatePageInterface $createPage)
    {
        $this->createPage = $createPage;
    }

    /**
     * @Given I am adding the :name country
     */
    public function iAmAddingTheCountry(string $name): void
    {
        $this->createPage->open();

        $this->createPage->chooseName($name);
    }

    /**
     * @When I specify the image URL of this country's flag
     */
    public function iSpecifyTheImageURLOfThisCountrySFlag(): void
    {
        $this->createPage->addFlag("USA");

        $this->createPage->create();
    }

    /**
     * @Then I should see that this country has a flag
     */
    public function iShouldSeeThatThisCountryHasAFlag(): void
    {
        Assert::true($this->createPage->isFlag("USA"));
    }
}
