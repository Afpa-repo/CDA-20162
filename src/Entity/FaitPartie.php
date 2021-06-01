<?php

namespace App\Entity;

use App\Repository\FaitPartieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FaitPartieRepository::class)
 */
class FaitPartie
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
     * @ORM\Column(type="integer")
     */
    private $idRubrique;

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

    public function getIdRubrique(): ?int
    {
        return $this->idRubrique;
    }

    public function setIdRubrique(int $idRubrique): self
    {
        $this->idRubrique = $idRubrique;

        return $this;
    }
}
