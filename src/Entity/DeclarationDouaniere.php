<?php

namespace App\Entity;

use App\Repository\DeclarationDouaniereRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DeclarationDouaniereRepository::class)
 */
class DeclarationDouaniere
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\OneToOne(targetEntity=FactureFour::class, cascade={"persist", "remove"})
     */
    private $facture;

    /**
     * @ORM\OneToOne(targetEntity=Vehicule::class, cascade={"persist", "remove"})
     */
    private $vehicule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bureau;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeOperation;

    /**
     * @ORM\OneToOne(targetEntity=CatTarifaire::class, cascade={"persist", "remove"})
     */
    private $categorieTar;

    /**
     * @ORM\ManyToOne(targetEntity=DemandePaie::class)
     */
    private $demande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

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

    public function getFacture(): ?FactureFour
    {
        return $this->facture;
    }

    public function setFacture(?FactureFour $facture): self
    {
        $this->facture = $facture;

        return $this;
    }

    public function getVehicule(): ?Vehicule
    {
        return $this->vehicule;
    }

    public function setVehicule(?Vehicule $vehicule): self
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    public function getBureau(): ?string
    {
        return $this->bureau;
    }

    public function setBureau(string $bureau): self
    {
        $this->bureau = $bureau;

        return $this;
    }

    public function getTypeOperation(): ?string
    {
        return $this->typeOperation;
    }

    public function setTypeOperation(string $typeOperation): self
    {
        $this->typeOperation = $typeOperation;

        return $this;
    }

    public function getCategorieTar(): ?CatTarifaire
    {
        return $this->categorieTar;
    }

    public function setCategorieTar(?CatTarifaire $categorieTar): self
    {
        $this->categorieTar = $categorieTar;

        return $this;
    }

    public function getDemande(): ?DemandePaie
    {
        return $this->demande;
    }

    public function setDemande(?DemandePaie $demande): self
    {
        $this->demande = $demande;

        return $this;
    }
}
