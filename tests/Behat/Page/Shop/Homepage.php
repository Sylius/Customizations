<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\Shop;

use Behat\Mink\Element\NodeElement;
use Sylius\Behat\Page\Shop\HomePage as BaseHomePage;

class Homepage extends BaseHomePage
{
    public function getProductsNameFromHomepage(): array
    {
        return array_map(
            function (NodeElement $element) {
                return $element->getText();
            },
            $this->getDocument()->findAll('css', '.sylius-product-name')
        );
    }
}
