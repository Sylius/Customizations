<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page;

use Sylius\Behat\Page\Shop\Account\LoginPage as BaseLoginPage;

final class LoginPage extends BaseLoginPage implements LoginPageInterface
{
    public function isCorrectTitle(string $title): bool
    {
        return $this->getDocument()->findById('head-line')->getText() == $title;
    }
}
