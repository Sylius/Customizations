<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page;

use Sylius\Behat\Page\Shop\HomePageInterface as BaseHomePageInterface;

interface HomePageInterface extends BaseHomePageInterface
{
    public function isCorrectTitle(string $title): bool;
}
