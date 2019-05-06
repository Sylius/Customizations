<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page;

use Sylius\Behat\Page\Shop\HomePage as BaseHomePage;

final class HomePage extends BaseHomePage implements HomePageInterface
{
    public function isCorrectTitle(string $title): bool
    {
        return $this->getDocument()->hasContent($title);
    }
}
