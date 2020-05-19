<?php

declare(strict_types=1);

namespace Tavy315\SyliusSalesRepresentativesPlugin\Model;

use Sylius\Component\Resource\Model\CodeAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;

interface SalesRepresentativeInterface extends CodeAwareInterface, ResourceInterface
{
    public function getEmail(): ?string;

    public function setEmail(?string $email): void;

    public function getName(): string;

    public function setName(string $name): void;

    public function getPhoneNumber(): ?string;

    public function setPhoneNumber(?string $phoneNumber): void;
}
