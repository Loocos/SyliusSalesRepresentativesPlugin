<?php

declare(strict_types=1);

namespace Tavy315\SyliusSalesRepresentativesPlugin\Model\Customer;

use Tavy315\SyliusSalesRepresentativesPlugin\Model\SalesRepresentativeInterface;

interface SalesRepresentativeAwareInterface
{
    public function getSalesRepresentative(): ?SalesRepresentativeInterface;

    public function setSalesRepresentative(?SalesRepresentativeInterface $salesRepresentative): void;
}
