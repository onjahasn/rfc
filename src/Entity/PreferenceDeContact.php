<?php

namespace App\Entity;

use App\Repository\PreferenceDeContactRepository;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: PreferenceDeContactRepository::class)]
class PreferenceDeContact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Prm $prm = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrm(): ?Prm
    {
        return $this->prm;
    }

    public function setPrm(?Prm $prm): static
    {
        $this->prm = $prm;

        return $this;
    }
}
