<?php

declare(strict_types=1);

namespace Tavy315\SyliusSalesRepresentativesPlugin\Model\Customer;

use Doctrine\ORM\Mapping as ORM;
use Tavy315\SyliusSalesRepresentativesPlugin\Model\SalesRepresentativeInterface;

trait SalesRepresentativeTrait
{
    /**
     * @var SalesRepresentativeInterface|null
     * @ORM\ManyToOne(targetEntity="Tavy315\SyliusSalesRepresentativesPlugin\Model\SalesRepresentative")
     * @ORM\JoinColumn(name="sales_representative", referencedColumnName="id", nullable=true)
     */
    protected $salesRepresentative;

    public function getSalesRepresentative(): ?SalesRepresentativeInterface
    {
        return $this->salesRepresentative;
    }

    public function setSalesRepresentative(?SalesRepresentativeInterface $salesRepresentative): void
    {
        $this->salesRepresentative = $salesRepresentative;
    }
}
