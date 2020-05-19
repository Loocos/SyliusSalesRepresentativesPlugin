<?php

declare(strict_types=1);

namespace Tavy315\SyliusSalesRepresentativesPlugin\Model\Customer;

use Sylius\Component\Core\Model\Customer as BaseCustomer;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_customer")
 */
final class Customer extends BaseCustomer implements SalesRepresentativeAwareInterface
{
    use SalesRepresentativeTrait;
}
