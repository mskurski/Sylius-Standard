<?php

declare(strict_types=1);

namespace App\Form\Extension;

use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('color', ChoiceType::class, [
            'required' => false,
            'label' => 'app.form.product.color',
            'choices' => [
                'app.colors.red' => 'red',
                'app.colors.green' => 'green',
                'app.colors.blue' => 'blue',
            ],
            'placeholder' => '---',
            'choice_translation_domain' => true,
        ]);
    }

    public function getExtendedType(): string
    {
        return ProductType::class;
    }
}
