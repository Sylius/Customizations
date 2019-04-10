<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\Admin\Country;

use Sylius\Behat\Page\Admin\Country\CreatePage as BaseCreatePage;

final class CreatePage extends BaseCreatePage implements CreatePageInterface
{
    public function addFlag(string $flagPath): void
    {
        $this->getDocument()->fillField('sylius_country_flag', $flagPath);
    }

    public function isFlag(string $flagPath): bool
    {
        return $flagPath === $this->getDocument()->find('css', 'img')->getAttribute('src');
    }
}
