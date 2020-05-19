<?php

declare(strict_types=1);

namespace Tavy315\SyliusSalesRepresentativesPlugin\Form\Extension;

use Sylius\Bundle\AdminApiBundle\Form\Type\CustomerProfileType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Tavy315\SyliusSalesRepresentativesPlugin\Form\Type\SalesRepresentativeChoiceType;

final class CustomerProfileTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('salesRepresentative', SalesRepresentativeChoiceType::class, [
                'required' => false,
            ])
        ;
    }

    public static function getExtendedTypes(): iterable
    {
        return [CustomerProfileType::class];
    }
}
