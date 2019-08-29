<?php

declare(strict_types=1);

namespace App\Fixture\Factory;

use App\Entity\Shipping\ShippingMethod;
use Sylius\Bundle\CoreBundle\Fixture\Factory\ShippingMethodExampleFactory as BaseShippingMethodExampleFactory;
use Sylius\Component\Channel\Repository\ChannelRepositoryInterface;
use Sylius\Component\Core\Model\ShippingMethodInterface;
use Sylius\Component\Locale\Model\LocaleInterface;
use Sylius\Component\Resource\Factory\FactoryInterface;
use Sylius\Component\Resource\Repository\RepositoryInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class ShippingMethodExampleFactory extends BaseShippingMethodExampleFactory
{
    /** @var RepositoryInterface */
    private $localeRepository;

    public function __construct(
        FactoryInterface $shippingMethodFactory,
        RepositoryInterface $zoneRepository,
        RepositoryInterface $shippingCategoryRepository,
        RepositoryInterface $localeRepository,
        ChannelRepositoryInterface $channelRepository,
        ?RepositoryInterface $taxCategoryRepository = null
    ) {
        parent::__construct(
            $shippingMethodFactory,
            $zoneRepository,
            $shippingCategoryRepository,
            $localeRepository,
            $channelRepository,
            $taxCategoryRepository
        );

        $this->localeRepository = $localeRepository;
    }

    public function create(array $options = []): ShippingMethodInterface
    {
        /** @var ShippingMethod $shippingMethod */
        $shippingMethod = parent::create($options);

        if (!isset($options['deliveryConditions'])) {
            return $shippingMethod;
        }

        foreach ($this->getLocales() as $localeCode) {
            $shippingMethod->setCurrentLocale($localeCode);
            $shippingMethod->setFallbackLocale($localeCode);

            $shippingMethod->setDeliveryConditions($options['deliveryConditions']);
        }

        return $shippingMethod;
    }

    protected function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);

        $resolver
            ->setDefault('deliveryConditions', 'some_default_value')
            ->setAllowedTypes('deliveryConditions', ['null', 'string'])
        ;
    }

    private function getLocales(): iterable
    {
        /** @var LocaleInterface[] $locales */
        $locales = $this->localeRepository->findAll();
        foreach ($locales as $locale) {
            yield $locale->getCode();
        }
    }
}
