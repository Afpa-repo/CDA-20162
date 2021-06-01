<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
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
    private $refClient;

    /**
     * @ORM\Column(type="text")
     */
    private $nom;

    /**
     * @ORM\Column(type="text")
     */
    private $prenom;

    /**
     * @ORM\Column(type="integer")
     */
    private $coefReduc;

    /**
     * @ORM\Column(type="boolean")
     */
    private $typeClient;

    /**
     * @ORM\Column(type="text")
     */
    private $adresseMail;

    /**
     * @ORM\Column(type="text")
     */
    private $password;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombrePoints;

    /**
     * @ORM\Column(type="integer")
     */
    private $idCommercialAttribue;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRefClient(): ?string
    {
        return $this->refClient;
    }

    public function setRefClient(string $refClient): self
    {
        $this->refClient = $refClient;

        return $this;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getCoefReduc(): ?int
    {
        return $this->coefReduc;
    }

    public function setCoefReduc(int $coefReduc): self
    {
        $this->coefReduc = $coefReduc;

        return $this;
    }

    public function getTypeClient(): ?bool
    {
        return $this->typeClient;
    }

    public function setTypeClient(bool $typeClient): self
    {
        $this->typeClient = $typeClient;

        return $this;
    }

    public function getAdresseMail(): ?string
    {
        return $this->adresseMail;
    }

    public function setAdresseMail(string $adresseMail): self
    {
        $this->adresseMail = $adresseMail;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getNombrePoints(): ?int
    {
        return $this->nombrePoints;
    }

    public function setNombrePoints(int $nombrePoints): self
    {
        $this->nombrePoints = $nombrePoints;

        return $this;
    }

    public function getIdCommercialAttribue(): ?int
    {
        return $this->idCommercialAttribue;
    }

    public function setIdCommercialAttribue(int $idCommercialAttribue): self
    {
        $this->idCommercialAttribue = $idCommercialAttribue;

        return $this;
    }
}
