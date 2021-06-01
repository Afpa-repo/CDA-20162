<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $reduction;

    /**
     * @ORM\Column(type="integer")
     */
    private $df;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $datePaiement;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateExpedition;

    /**
     * @ORM\Column(type="boolean")
     */
    private $commandeAnnule;

    /**
     * @ORM\Column(type="float")
     */
    private $fraisDePort;

    /**
     * @ORM\Column(type="float")
     */
    private $prixTotal;

    /**
     * @ORM\Column(type="integer")
     */
    private $idClient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReduction(): ?string
    {
        return $this->reduction;
    }

    public function setReduction(?string $reduction): self
    {
        $this->reduction = $reduction;

        return $this;
    }

    public function getDf(): ?int
    {
        return $this->df;
    }

    public function setDf(int $df): self
    {
        $this->df = $df;

        return $this;
    }

    public function getDatePaiement(): ?\DateTimeInterface
    {
        return $this->datePaiement;
    }

    public function setDatePaiement(?\DateTimeInterface $datePaiement): self
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }

    public function getDateExpedition(): ?\DateTimeInterface
    {
        return $this->dateExpedition;
    }

    public function setDateExpedition(?\DateTimeInterface $dateExpedition): self
    {
        $this->dateExpedition = $dateExpedition;

        return $this;
    }

    public function getCommandeAnnule(): ?bool
    {
        return $this->commandeAnnule;
    }

    public function setCommandeAnnule(bool $commandeAnnule): self
    {
        $this->commandeAnnule = $commandeAnnule;

        return $this;
    }

    public function getFraisDePort(): ?float
    {
        return $this->fraisDePort;
    }

    public function setFraisDePort(float $fraisDePort): self
    {
        $this->fraisDePort = $fraisDePort;

        return $this;
    }

    public function getPrixTotal(): ?float
    {
        return $this->prixTotal;
    }

    public function setPrixTotal(float $prixTotal): self
    {
        $this->prixTotal = $prixTotal;

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
