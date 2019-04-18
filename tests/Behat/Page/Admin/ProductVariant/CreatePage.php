<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\Admin\ProductVariant;

use Sylius\Behat\Page\Admin\ProductVariant\CreatePage as BaseCreatePage;

final class CreatePage extends BaseCreatePage implements CreatePageInterface
{
    public function isNewLabel(string $label): bool
    {
        return null !== $this->getDocument()->find('css',sprintf('label:contains("%s")',$label));
    }
}
