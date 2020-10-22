<?php

namespace App\Entity;

use App\Repository\ComptesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ComptesRepository::class)
 */
class Comptes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fraisouverture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $agency;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clerib;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numerocompte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clients;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFraisouverture(): ?string
    {
        return $this->fraisouverture;
    }

    public function setFraisouverture(string $fraisouverture): self
    {
        $this->fraisouverture = $fraisouverture;

        return $this;
    }

    public function getAgency(): ?string
    {
        return $this->agency;
    }

    public function setAgency(string $agency): self
    {
        $this->agency = $agency;

        return $this;
    }

    public function getClerib(): ?string
    {
        return $this->clerib;
    }

    public function setClerib(string $clerib): self
    {
        $this->clerib = $clerib;

        return $this;
    }

    public function getNumerocompte(): ?string
    {
        return $this->numerocompte;
    }

    public function setNumerocompte(string $numerocompte): self
    {
        $this->numerocompte = $numerocompte;

        return $this;
    }

    public function getClients(): ?string
    {
        return $this->clients;
    }

    public function setClients(string $clients): self
    {
        $this->clients = $clients;

        return $this;
    }
}
