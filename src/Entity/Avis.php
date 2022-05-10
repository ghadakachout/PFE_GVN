<?php

namespace App\Entity;

use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AvisRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AvisRepository::class)
 * @ApiResource(
 *  normalizationContext={"groups"={"avis:read"}},
 *  denormalizationContext={"groups"={"avis:write"}}
 * )
 */
class Avis
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *  @Groups({"avis:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"avis:read", "avis:write"})
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"avis:read", "avis:write"})
     */
    private $etat;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"avis:read", "avis:write"})
     */
    private $Nnavire;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"avis:read", "avis:write"})
     */
    private $dateArrivee;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"avis:read", "avis:write"})
     */
    private $escale;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"avis:read", "avis:write"})
     */
    private $rubrique;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"avis:read", "avis:write"})
     */
    private $poids;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"avis:read", "avis:write"})
     */
    private $natureMarch;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"avis:read", "avis:write"})
     */
    private $nbColis;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"avis:read", "avis:write"})
     */
    private $volume;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"avis:read", "avis:write"})
     */
    private $dateDero;

    /**
     * @ORM\Column(type="float")
     * @Groups({"avis:read", "avis:write"})
     */
    private $montantHT;

    /**
     * @ORM\Column(type="float")
     * @Groups({"avis:read", "avis:write"})
     */
    private $montantTVA;

    /**
     * @ORM\Column(type="float")
     * @Groups({"avis:read", "avis:write"})
     */
    private $montantTTC;

    /**
     * @ORM\ManyToOne(targetEntity=Companie::class)
     * @Groups({"avis:read", "avis:write"})
     */
    private $compTr;

    /**
     * @ORM\ManyToOne(targetEntity=Companie::class)
     * @Groups({"avis:read", "avis:write"})
     */
    private $campanie;

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

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getNNavire(): ?string
    {
        return $this->Nnavire;
    }

    public function setNNavire(string $n_navire): self
    {
        $this->Nnavire = $Nnavire;

        return $this;
    }

    public function getDateArrivee(): ?\DateTimeInterface
    {
        return $this->dateArrivee;
    }

    public function setDateArrivee(\DateTimeInterface $dateArrivee): self
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }

    public function getEscale(): ?string
    {
        return $this->escale;
    }

    public function setEscale(string $escale): self
    {
        $this->escale = $escale;

        return $this;
    }

    public function getRubrique(): ?string
    {
        return $this->rubrique;
    }

    public function setRubrique(string $rubrique): self
    {
        $this->rubrique = $rubrique;

        return $this;
    }

    public function getPoids(): ?string
    {
        return $this->poids;
    }

    public function setPoids(string $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getNatureMarch(): ?string
    {
        return $this->natureMarch;
    }

    public function setNatureMarch(string $natureMarch): self
    {
        $this->natureMarch = $natureMarch;

        return $this;
    }

    public function getNbColis(): ?int
    {
        return $this->nbColis;
    }

    public function setNbColis(int $nbColis): self
    {
        $this->nbColis = $nbColis;

        return $this;
    }

    public function getVolume(): ?string
    {
        return $this->volume;
    }

    public function setVolume(string $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    public function getDateDero(): ?\DateTimeInterface
    {
        return $this->dateDero;
    }

    public function setDateDero(\DateTimeInterface $dateDero): self
    {
        $this->dateDero = $dateDero;

        return $this;
    }

    public function getMontantHT(): ?float
    {
        return $this->montantHT;
    }

    public function setMontantHT(float $montantHT): self
    {
        $this->montantHT = $montantHT;

        return $this;
    }

    public function getMontantTVA(): ?float
    {
        return $this->montantTVA;
    }

    public function setMontantTVA(float $montantTVA): self
    {
        $this->montantTVA = $montantTVA;

        return $this;
    }

    public function getMontantTTC(): ?float
    {
        return $this->montantTTC;
    }

    public function setMontantTTC(float $montantTTC): self
    {
        $this->montantTTC = $montantTTC;

        return $this;
    }

    public function getCompTr(): ?Companie
    {
        return $this->compTr;
    }

    public function setCompTr(?Companie $compTr): self
    {
        $this->compTr = $compTr;

        return $this;
    }

    public function getCampanie(): ?Companie
    {
        return $this->campanie;
    }

    public function setCampanie(?Companie $campanie): self
    {
        $this->campanie = $campanie;

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
