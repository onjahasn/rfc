<?php

namespace App\Entity;

use App\Repository\PrmRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrmRepository::class)]
class Prm
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prm_adresse_ligne_deux = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prm_adresse_ligne_trois = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prm_adresse_ligne_quatre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prm_adresse_ligne_cinq = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prm_adresse_ligne_six = null;

    #[ORM\Column(length: 255)]
    private ?string $prm_adresse_code_insee = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrmAdresseLigneDeux(): ?string
    {
        return $this->prm_adresse_ligne_deux;
    }

    public function setPrmAdresseLigneDeux(?string $prm_adresse_ligne_deux): static
    {
        $this->prm_adresse_ligne_deux = $prm_adresse_ligne_deux;

        return $this;
    }

    public function getPrmAdresseLigneTrois(): ?string
    {
        return $this->prm_adresse_ligne_trois;
    }

    public function setPrmAdresseLigneTrois(?string $prm_adresse_ligne_trois): static
    {
        $this->prm_adresse_ligne_trois = $prm_adresse_ligne_trois;

        return $this;
    }

    public function getPrmAdresseLigneQuatre(): ?string
    {
        return $this->prm_adresse_ligne_quatre;
    }

    public function setPrmAdresseLigneQuatre(?string $prm_adresse_ligne_quatre): static
    {
        $this->prm_adresse_ligne_quatre = $prm_adresse_ligne_quatre;

        return $this;
    }

    public function getPrmAdresseLigneCinq(): ?string
    {
        return $this->prm_adresse_ligne_cinq;
    }

    public function setPrmAdresseLigneCinq(?string $prm_adresse_ligne_cinq): static
    {
        $this->prm_adresse_ligne_cinq = $prm_adresse_ligne_cinq;

        return $this;
    }

    public function getPrmAdresseLigneSix(): ?string
    {
        return $this->prm_adresse_ligne_six;
    }

    public function setPrmAdresseLigneSix(?string $prm_adresse_ligne_six): static
    {
        $this->prm_adresse_ligne_six = $prm_adresse_ligne_six;

        return $this;
    }

    public function getPrmAdresseCodeInsee(): ?string
    {
        return $this->prm_adresse_code_insee;
    }

    public function setPrmAdresseCodeInsee(string $prm_adresse_code_insee): static
    {
        $this->prm_adresse_code_insee = $prm_adresse_code_insee;

        return $this;
    }
}
