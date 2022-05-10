<?php

namespace App\Entity;

use App\Repository\FactureFourRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=FactureFourRepository::class)
 * @ApiResource(
 *  normalizationContext={"groups"={"facturefour:read"}},
 *  denormalizationContext={"groups"={"facturefour:write"}}
 * )
 */
/*@Groups({"facturefour:read", "facturefour:write"})*/
class FactureFour
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"facturefour:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"facturefour:read", "facturefour:write"})
     */
    private $TVA;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"facturefour:read", "facturefour:write"})
     */
    private $Date;

    /**
     * @ORM\ManyToOne(targetEntity=fournisseur::class, inversedBy="factureFours")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"facturefour:read", "facturefour:write"})
     */
    private $nomfour;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"facturefour:read", "facturefour:write"})
     */
    private $Ref;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"facturefour:read", "facturefour:write"})
     */
    private $QTE;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"facturefour:read", "facturefour:write"})
     */
    private $Description;

    /**
     * @ORM\Column(type="float")
     * @Groups({"facturefour:read", "facturefour:write"})
     */
    private $PrixUnitaire;

    /**
     * @ORM\Column(type="float")
     * @Groups({"facturefour:read", "facturefour:write"})
     */
    private $Montant;

    /**
     * @ORM\Column(type="float")
     * @Groups({"facturefour:read", "facturefour:write"})
     */
    private $Total;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTVA(): ?string
    {
        return $this->TVA;
    }

    public function setTVA(string $TVA): self
    {
        $this->TVA = $TVA;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getNomfour(): ?fournisseur
    {
        return $this->nomfour;
    }

    public function setNomfour(?fournisseur $nomfour): self
    {
        $this->nomfour = $nomfour;

        return $this;
    }

    public function getRef(): ?string
    {
        return $this->Ref;
    }

    public function setRef(string $Ref): self
    {
        $this->Ref = $Ref;

        return $this;
    }

    public function getQTE(): ?string
    {
        return $this->QTE;
    }

    public function setQTE(string $QTE): self
    {
        $this->QTE = $QTE;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPrixUnitaire(): ?float
    {
        return $this->PrixUnitaire;
    }

    public function setPrixUnitaire(float $PrixUnitaire): self
    {
        $this->PrixUnitaire = $PrixUnitaire;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->Montant;
    }

    public function setMontant(float $Montant): self
    {
        $this->Montant = $Montant;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->Total;
    }

    public function setTotal(float $Total): self
    {
        $this->Total = $Total;

        return $this;
    }
}
