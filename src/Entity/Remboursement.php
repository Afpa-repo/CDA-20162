<?php

namespace App\Entity;

use App\Repository\RemboursementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RemboursementRepository::class)
 */
class Remboursement
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
    private $idProduit;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateRemboursement;

    /**
     * @ORM\Column(type="integer")
     */
    private $idFacture;

    /**
     * @ORM\Column(type="integer")
     */
    private $idClient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProduit(): ?int
    {
        return $this->idProduit;
    }

    public function setIdProduit(int $idProduit): self
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    public function getDateRemboursement(): ?\DateTimeInterface
    {
        return $this->dateRemboursement;
    }

    public function setDateRemboursement(?\DateTimeInterface $dateRemboursement): self
    {
        $this->dateRemboursement = $dateRemboursement;

        return $this;
    }

    public function getIdFacture(): ?int
    {
        return $this->idFacture;
    }

    public function setIdFacture(int $idFacture): self
    {
        $this->idFacture = $idFacture;

        return $this;
    }

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function setIdClient(int $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }
}
