<?php

namespace App\Entity;

use App\Repository\RubriquesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RubriquesRepository::class)
 */
class Rubriques
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
    private $nomRubrique;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idRubriqueParente;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomRubrique(): ?string
    {
        return $this->nomRubrique;
    }

    public function setNomRubrique(string $nomRubrique): self
    {
        $this->nomRubrique = $nomRubrique;

        return $this;
    }

    public function getIdRubriqueParente(): ?int
    {
        return $this->idRubriqueParente;
    }

    public function setIdRubriqueParente(?int $idRubriqueParente): self
    {
        $this->idRubriqueParente = $idRubriqueParente;

        return $this;
    }
}
