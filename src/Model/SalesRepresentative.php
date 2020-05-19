<?php

declare(strict_types=1);

namespace Tavy315\SyliusSalesRepresentativesPlugin\Model;

class SalesRepresentative implements SalesRepresentativeInterface
{
    /** @var mixed */
    protected $id;

    /** @var string|null */
    protected $code;

    /** @var string */
    protected $name = '';

    /** @var string|null */
    protected $email;

    /** @var string|null */
    protected $phoneNumber;

    public function getId()
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }
}
