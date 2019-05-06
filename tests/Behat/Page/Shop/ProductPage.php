<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\Shop;

use Sylius\Behat\Page\Shop\HomePage as BaseHomePage;

final class ProductPage extends BaseHomePage implements ProductPageInterface
{
    public function isProductsNamesFromProductPage(string $product): bool
    {
        $element = $this->getDocument()->find('css', sprintf('a:contains("%s")', $product));

        return null !== $element;
    }

    public function getRouteName(): string
    {
        return 'app_shop_custom_product';
    }
}
