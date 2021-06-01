<?php

namespace App\Entity;

use App\Repository\AddressRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AddressRepository::class)
 */
class Address
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
    private $numRue;

    /**
     * @ORM\Column(type="text")
     */
    private $rue;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $complAdresse;

    /**
     * @ORM\Column(type="integer")
     */
    private $codePostal;

    /**
     * @ORM\Column(type="text")
     */
    private $ville;

    /**
     * @ORM\Column(type="text")
     */
    private $pays;

    /**
     * @ORM\Column(type="text")
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumRue(): ?int
    {
        return $this->numRue;
    }

    public function setNumRue(int $numRue): self
    {
        $this->numRue = $numRue;

        return $this;
    }

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(string $rue): self
    {
        $this->rue = $rue;

        return $this;
    }

    public function getComplAdresse(): ?string
    {
        return $this->complAdresse;
    }

    public function setComplAdresse(?string $complAdresse): self
    {
        $this->complAdresse = $complAdresse;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(int $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
