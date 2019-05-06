<?php

declare(strict_types=1);

namespace App\Controller;

use FOS\RestBundle\View\View;
use Sylius\Bundle\ResourceBundle\Controller\ResourceController;
use Sylius\Component\Resource\ResourceActions;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends ResourceController
{
    public function showAction(Request $request): Response
    {
        $configuration = $this->requestConfigurationFactory->create($this->metadata, $request);

        $this->isGrantedOr403($configuration, ResourceActions::SHOW);
        $product = $this->findOr404($configuration);

        $recommendationService = $this->get('app.provider.product');

        $recommendedProduct = $recommendationService->getRecommendedProduct($product);

        $this->eventDispatcher->dispatch(ResourceActions::SHOW, $configuration, $product);

        $view = View::create($product);

        if ($configuration->isHtmlRequest()) {
            $view
                ->setTemplate($configuration->getTemplate(ResourceActions::SHOW . '.html'))
                ->setTemplateVar($this->metadata->getName())
                ->setData([
                    'configuration' => $configuration,
                    'metadata' => $this->metadata,
                    'resource' => $product,
                    'recommendedProduct' => $recommendedProduct,
                    $this->metadata->getName() => $product,
                ])
            ;
        }

        return $this->viewHandler->handle($configuration, $view);
    }
}
