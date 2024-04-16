<?php

namespace Stringkey\HostManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

#[ORM\Entity(repositoryClass: HostRepository::class)]
class Host
{
    private ?Uuid $id = null;

//    #[ORM\Column(length: 255)]
    private ?string $name = null;

//    #[ORM\ManyToOne]
    private ?Domain $domain = null;

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

    public function getDomain(): ?Domain
    {
        return $this->domain;
    }

    public function setDomain(?Domain $domain): static
    {
        $this->domain = $domain;

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }
}
