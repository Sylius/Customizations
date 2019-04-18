<?php

declare(strict_types=1);

namespace App\Tests\Behat\Context\Ui\Admin;

use App\Tests\Behat\Page\Admin\ProductVariant\CreatePageInterface;
use Behat\Behat\Context\Context;
use Webmozart\Assert\Assert;

final class ManagingProductsContext implements Context
{
    /** @var CreatePageInterface */
    private $createPage;

    public function __construct($createPage)
    {
        $this->createPage = $createPage;
    }

    /**
     * @Then I see new channel pricing label :label
     */
    public function iSeeNewLabel(string $label): void
    {
        Assert::true($this->createPage->isNewLabel($label));
    }
}
