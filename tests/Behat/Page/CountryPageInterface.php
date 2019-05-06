<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page;

use Sylius\Behat\Page\Admin\Country\CreatePageInterface as BaseCreatePageInterface;

interface CountryPageInterface extends BaseCreatePageInterface
{
    public function isCorrectTitle(string $customization): bool;
}
