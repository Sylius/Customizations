<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Tests\Behat\Context\Admin\Product;

use Behat\Behat\Context\Context;
use Sylius\Behat\Page\Admin\Product\CreateSimpleProductPageInterface;
use Webmozart\Assert\Assert;

class CreatePageContext implements Context
{
    /** @var CreateSimpleProductPageInterface */
    private $createSimpleProductPage;

    public function __construct(CreateSimpleProductPageInterface $createSimpleProductPage)
    {
        $this->createSimpleProductPage = $createSimpleProductPage;
    }

    /**
     * @Then I should be notified that product :element must be at least :value character(s) long
     */
    public function iShouldBeNotifiedThatAddingProductWasFailed(string $element, int $value): void
    {
        Assert::same($this->createSimpleProductPage->getValidationMessage($element), sprintf( "Product name must be at least %d characters long.", $value));
    }
}
