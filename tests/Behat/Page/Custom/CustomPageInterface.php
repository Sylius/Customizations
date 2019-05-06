<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\Custom;

use Sylius\Behat\Page\Shop\HomePageInterface as BaseUpdatePageInterface;

interface CustomPageInterface extends BaseUpdatePageInterface
{
    public function isContentPage(string $content): bool;
}
