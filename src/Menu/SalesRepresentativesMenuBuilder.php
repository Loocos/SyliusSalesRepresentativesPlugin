<?php

declare(strict_types=1);

namespace Tavy315\SyliusSalesRepresentativesPlugin\Menu;

use Knp\Menu\ItemInterface;
use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class SalesRepresentativesMenuBuilder
{
    public function addSalesRepresentatives(MenuBuilderEvent $event): void
    {
        /** @var ItemInterface $marketingMenu */
        $marketingMenu = $event->getMenu()->getChild('customers');

        $marketingMenu->addChild('sales_representatives', ['route' => 'tavy315_sylius_sales_representatives_admin_sales_representative_index'])
                      ->setLabel('tavy315_sylius_sales_representatives.ui.sales_representatives')
                      ->setLabelAttribute('icon', 'user');
    }
}
