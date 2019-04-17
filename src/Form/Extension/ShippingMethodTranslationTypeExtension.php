<?php

declare(strict_types=1);

namespace App\Form\Extension;

use Sylius\Bundle\ShippingBundle\Form\Type\ShippingMethodTranslationType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

final class ShippingMethodTranslationTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('deliveryConditions', TextType::class, [
            'label' => 'app.form.extension.type.shipping_method_translation.delivery_conditions',
            'required' => false,
            ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [ShippingMethodTranslationType::class];
    }
}
