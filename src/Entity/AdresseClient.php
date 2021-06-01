<?php

namespace App\Entity;

use App\Repository\AdresseClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdresseClientRepository::class)
 */
class AdresseClient
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
    private $idCommande;

    /**
     * @ORM\Column(type="integer")
     */
    private $idAdresse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCommande(): ?int
    {
        return $this->idCommande;
    }

    public function setIdCommande(int $idCommande): self
    {
        $this->idCommande = $idCommande;

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
