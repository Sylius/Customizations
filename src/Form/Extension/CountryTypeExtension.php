<?php

declare(strict_types=1);

namespace App\Form\Extension;

use Sylius\Bundle\AddressingBundle\Form\Type\CountryType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

final class CountryTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('flag', TextType::class, [
            'label' => 'app.form.extension.type.country.flag',
            'required' => false,
        ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [CountryType::class];
    }
}
