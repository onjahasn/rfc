<?php

namespace App\Entity;

use App\Repository\PersonnePhysiqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: PersonnePhysiqueRepository::class)]
class PersonnePhysique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['personnes.index','personnes.create'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['personnes.index','personnes.create'])]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Groups(['personnes.index','personnes.create'])]
    private ?string $prenom = null;

    #[ORM\OneToMany(targetEntity: CanalDeContact::class, mappedBy: 'personnePhysique',cascade:["persist"])]
    #[Groups(['personnes.index','personnes.create'])]
    private Collection $canaldeContact;


    public function __construct()
    {
        $this->canaldeContact = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * @return Collection<int, CanalDeContact>
     */
    public function getCanaldeContact(): Collection
    {
        return $this->canaldeContact;
    }

    public function addCanaldeContact(CanalDeContact $canaldeContact): static
    {
        if (!$this->canaldeContact->contains($canaldeContact)) {
            $this->canaldeContact->add($canaldeContact);
            $canaldeContact->setPersonnePhysique($this);
        }

        return $this;
    }

    public function removeCanaldeContact(CanalDeContact $canaldeContact): static
    {
        if ($this->canaldeContact->removeElement($canaldeContact)) {
            // set the owning side to null (unless already changed)
            if ($canaldeContact->getPersonnePhysique() === $this) {
                $canaldeContact->setPersonnePhysique(null);
            }
        }

        return $this;
    }
}
