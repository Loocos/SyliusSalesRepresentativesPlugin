<?php

declare(strict_types=1);

namespace Tavy315\SyliusSalesRepresentativesPlugin\Repository;

use Doctrine\ORM\EntityManagerInterface;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;
use Tavy315\SyliusSalesRepresentativesPlugin\Model\SalesRepresentative;

class SalesRepresentativeRepository extends EntityRepository implements SalesRepresentativeRepositoryInterface
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, $entityManager->getClassMetadata(SalesRepresentative::class));
    }
}
