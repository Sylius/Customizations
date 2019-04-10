<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\Admin\Country;

use Sylius\Behat\Page\Admin\Country\CreatePageInterface as BaseCreatePageInterface;

interface CreatePageInterface extends BaseCreatePageInterface
{
    public function addFlag(string $flagPath): void;

    public function isFlag(string $flagPath): bool;
}
