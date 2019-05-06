<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page;

use Sylius\Behat\Page\Shop\Account\LoginPageInterface as BaseLoginPageInterface;

interface LoginPageInterface extends BaseLoginPageInterface
{
    public function isCorrectTitle(string $title): bool;
}
