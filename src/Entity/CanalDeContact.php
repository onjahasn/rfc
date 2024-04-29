<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CanalDeContactRepository;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: CanalDeContactRepository::class)]
class CanalDeContact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['personnes.index', 'personnes.create'])]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'canaldeContact')]
    #[Groups(['personnes.create'])]
    private ?PersonnePhysique $personnePhysique = null;

    #[ORM\Column(length: 255)]
    #[Groups(['personnes.index','personnes.create'])]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    #[Groups(['personnes.index','personnes.create'])]
    private ?string $valeur = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['personnes.index','personnes.create'])]
    private ?string $ligne1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['personnes.index','personnes.create'])]
    private ?string $ligne2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['personnes.index','personnes.create'])]
    private ?string $ligne3 = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['personnes.index','personnes.create'])]
    private ?string $ligne4 = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['personnes.index','personnes.create'])]
    private ?string $ligne5 = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['personnes.index','personnes.create'])]
    private ?string $ligne6 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPersonnePhysique(): ?PersonnePhysique
    {
        return $this->personnePhysique;
    }

    public function setPersonnePhysique(?PersonnePhysique $personnePhysique): static
    {
        $this->personnePhysique = $personnePhysique;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getValeur(): ?string
    {
        return $this->valeur;
    }

    public function setValeur(string $valeur): static
    {
        $this->valeur = $valeur;

        return $this;
    }

    public function getLigne1(): ?string
    {
        return $this->ligne1;
    }

    public function setLigne1(?string $ligne1): static
    {
        $this->ligne1 = $ligne1;

        return $this;
    }

    public function getLigne2(): ?string
    {
        return $this->ligne2;
    }

    public function setLigne2(?string $ligne2): static
    {
        $this->ligne2 = $ligne2;

        return $this;
    }

    public function getLigne3(): ?string
    {
        return $this->ligne3;
    }

    public function setLigne3(?string $ligne3): static
    {
        $this->ligne3 = $ligne3;

        return $this;
    }

    public function getLigne4(): ?string
    {
        return $this->ligne4;
    }

    public function setLigne4(?string $ligne4): static
    {
        $this->ligne4 = $ligne4;

        return $this;
    }

    public function getLigne5(): ?string
    {
        return $this->ligne5;
    }

    public function setLigne5(?string $ligne5): static
    {
        $this->ligne5 = $ligne5;

        return $this;
    }

    public function getLigne6(): ?string
    {
        return $this->ligne6;
    }

    public function setLigne6(?string $ligne6): static
    {
        $this->ligne6 = $ligne6;

        return $this;
    }
}
