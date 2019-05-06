<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\Custom;

use Sylius\Behat\Page\Shop\HomePage as BaseHomePage;

final class CustomPage extends BaseHomePage implements CustomPageInterface
{
    public function isContentPage(string $content): bool
    {
        return $this->getDocument()->hasContent($content);
    }

    public function getRouteName(): string
    {
        return 'app_shop_custom_custom_page';
    }
}
