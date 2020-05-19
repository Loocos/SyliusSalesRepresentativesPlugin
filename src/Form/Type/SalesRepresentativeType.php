<?php

declare(strict_types=1);

namespace Tavy315\SyliusSalesRepresentativesPlugin\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\EventSubscriber\AddCodeFormSubscriber;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

final class SalesRepresentativeType extends AbstractResourceType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'tavy315_sylius_sales_representatives.ui.name',
            ])
            ->add('email', EmailType::class, [
                'required' => false,
                'label' => 'tavy315_sylius_sales_representatives.ui.email',
            ])
            ->add('phoneNumber', TextType::class, [
                'required' => false,
                'label' => 'tavy315_sylius_sales_representatives.ui.phone_number',
            ])
            ->addEventSubscriber(new AddCodeFormSubscriber())
        ;
    }

    public function getBlockPrefix(): string
    {
        return 'tavy315_sylius_sales_representatives_plugin_sales_representative';
    }
}
