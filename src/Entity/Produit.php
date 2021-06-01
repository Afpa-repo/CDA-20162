<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
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
    private $nom;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="date")
     */
    private $garantie;

    /**
     * @ORM\Column(type="text")
     */
    private $photo;

    /**
     * @ORM\Column(type="integer")
     */
    private $qteStock;

    /**
     * @ORM\Column(type="boolean")
     */
    private $estEnVente;

    /**
     * @ORM\Column(type="integer")
     */
    private $idFournisseur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getGarantie(): ?\DateTimeInterface
    {
        return $this->garantie;
    }

    public function setGarantie(\DateTimeInterface $garantie): self
    {
        $this->garantie = $garantie;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getQteStock(): ?int
    {
        return $this->qteStock;
    }

    public function setQteStock(int $qteStock): self
    {
        $this->qteStock = $qteStock;

        return $this;
    }

    public function getEstEnVente(): ?bool
    {
        return $this->estEnVente;
    }

    public function setEstEnVente(bool $estEnVente): self
    {
        $this->estEnVente = $estEnVente;

        return $this;
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
}
