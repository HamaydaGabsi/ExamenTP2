<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntrepriseRepository::class)]
class Entreprise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 60, nullable: true)]
    private $designation;

    #[ORM\OneToOne(mappedBy: 'entreprise', targetEntity: PFE::class, cascade: ['persist', 'remove'])]
    private $pFE;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(?string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getPFE(): ?PFE
    {
        return $this->pFE;
    }

    public function setPFE(?PFE $pFE): self
    {
        // unset the owning side of the relation if necessary
        if ($pFE === null && $this->pFE !== null) {
            $this->pFE->setEntreprise(null);
        }

        // set the owning side of the relation if necessary
        if ($pFE !== null && $pFE->getEntreprise() !== $this) {
            $pFE->setEntreprise($this);
        }

        $this->pFE = $pFE;

        return $this;
    }
}
