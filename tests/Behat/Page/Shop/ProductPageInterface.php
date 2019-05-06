<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\Shop;

use Sylius\Behat\Page\Shop\HomePageInterface as BaseUpdatePageInterface;

interface ProductPageInterface extends BaseUpdatePageInterface
{
    public function isProductsNamesFromProductPage(string $product): bool;
}
