<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\Admin\ProductVariant;

use Sylius\Behat\Page\Admin\ProductVariant\CreatePageInterface as BaseCreatePageInterface;

interface CreatePageInterface extends BaseCreatePageInterface
{
    public function isNewLabel(string $label): bool;
}
