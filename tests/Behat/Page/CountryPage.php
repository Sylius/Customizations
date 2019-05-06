<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page;

use Sylius\Behat\Page\Admin\Country\CreatePage as BaseCreatePage;

final class CountryPage extends BaseCreatePage implements CountryPageInterface
{
    public function isCorrectTitle(string $customization): bool
    {
        return $this->getDocument()->hasContent($customization);
    }
}
