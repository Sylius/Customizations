<?php

declare(strict_types=1);

namespace App\Form\Extension;

use Sylius\Bundle\CustomerBundle\Form\Type\CustomerProfileType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;

final class CustomerProfileTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('secondaryPhoneNumber', TextType::class, [
                'required' => false,
                'label' => 'app.form.customer.secondary_phone_number',
                'constraints' => [
                    new Length([
                        'min' => 6,
                        'max' => 10,
                        'groups' => ['sylius'],
                    ]),
                ],
            ])
            ->remove('gender')
            ->add('lastName', TextType::class, [
                'label' => 'app.form.customer.surname',
            ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [CustomerProfileType::class];
    }
}
