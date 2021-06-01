<?php

namespace App\Entity;

use App\Repository\ClientHabiteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientHabiteRepository::class)
 */
class ClientHabite
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
    private $idClient;

    /**
     * @ORM\Column(type="integer")
     */
    private $idAdresse;

    public function getId(): ?int
    {
        return $this->id;
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
