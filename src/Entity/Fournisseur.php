<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FournisseurRepository::class)
 */
class Fournisseur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $refFournisseur;

    /**
     * @ORM\Column(type="text")
     */
    private $nomFournisseur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRefFournisseur(): ?string
    {
        return $this->refFournisseur;
    }

    public function setRefFournisseur(string $refFournisseur): self
    {
        $this->refFournisseur = $refFournisseur;

        return $this;
    }

    public function getNomFournisseur(): ?string
    {
        return $this->nomFournisseur;
    }

    public function setNomFournisseur(string $nomFournisseur): self
    {
        $this->nomFournisseur = $nomFournisseur;

        return $this;
    }
}
