<?php

declare(strict_types=1);

namespace App\Form\Extension;

use Sylius\Bundle\ShippingBundle\Form\Type\ShippingMethodType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;


final class ShippingMethodTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('estimatedDeliveryTime',TextType::class,[
            'label' => 'app.form.extension.type.shipping_method.estimated_delivery_time',
            'required' => false
        ]);
    }

    public function getExtendedTypes(): iterable
    {
        return [ShippingMethodType::class];
    }
}
