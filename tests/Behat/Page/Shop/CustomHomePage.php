<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\Shop;

use Sylius\Behat\Page\Shop\HomePage as BaseHomePage;

final class CustomHomePage extends BaseHomePage
{
    public function getRouteName(): string
    {
        return 'app_shop_custom_index';
    }
}
