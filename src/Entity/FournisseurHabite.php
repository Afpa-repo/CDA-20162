<?php

namespace App\Entity;

use App\Repository\FournisseurHabiteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FournisseurHabiteRepository::class)
 */
class FournisseurHabite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idFournisseur;

    /**
     * @ORM\Column(type="integer")
     */
    private $idAdresse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdFournisseur(): ?int
    {
        return $this->idFournisseur;
    }

    public function setIdFournisseur(int $idFournisseur): self
    {
        $this->idFournisseur = $idFournisseur;

        return $this;
    }

    public function getIdAdresse(): ?int
    {
        return $this->idAdresse;
    }

    public function setIdAdresse(int $idAdresse): self
    {
        $this->idAdresse = $idAdresse;

        return $this;
    }
}
