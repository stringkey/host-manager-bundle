<?php

namespace Stringkey\HostManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Stringkey\HostManagerBundle\Repository\DomainRepository;
use Symfony\Component\Uid\Uuid;

#[ORM\Entity(repositoryClass: DomainRepository::class)]
class Domain
{
    private ?Uuid $id = null;

    private ?string $name = null;

    public function getId(): ?Uuid
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }
}
