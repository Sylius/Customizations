<?php

declare(strict_types=1);

namespace App\Grid;

use Sylius\Component\Grid\Event\GridDefinitionConverterEvent;

final class AdminProductsGridListener
{
    public function removeImageField(GridDefinitionConverterEvent $event): void 
    {
        $grid = $event->getGrid();

        $grid->removeField('image');
    }
}
