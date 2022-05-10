<?php


namespace App\Entity;

use App\Repository\VehiculeRepository;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VehiculeRepository::class)
 *  @ApiResource(
 *  normalizationContext={"groups"={"vehicule:read"}},
 *  denormalizationContext={"groups"={"vehicule:write"}}
 * )
 */
class Vehicule
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *  @Groups({"vehicule:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"vehicule:read", "vehicule:write"})
     */
    private $numSerie;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"vehicule:read", "vehicule:write"})
     */
    private $nMoteur;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"vehicule:read", "vehicule:write"})
     */
    private $nDef;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"vehicule:read", "vehicule:write"})
     */
    private $immat;

    /**
     * @ORM\Column(type="float")
     * @Groups({"vehicule:read", "vehicule:write"})
     */
    private $prixAchatDt;

    /**
     * @ORM\Column(type="float")
     * @Groups({"vehicule:read", "vehicule:write"})
     */
    private $prixAchatDevise;

    /**
     * @ORM\Column(type="float")
     * @Groups({"vehicule:read", "vehicule:write"})
     */
    private $prixRevientDt;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"vehicule:read", "vehicule:write"})
     */
    private $nCim;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"vehicule:read", "vehicule:write"})
     */
    private $datePMC;

    /**
     * @ORM\Column(type="float")
     * @Groups({"vehicule:read", "vehicule:write"})
     */
    private $coursAchat;

    /**
     * @ORM\Column(type="float")
     * @Groups({"vehicule:read", "vehicule:write"})
     */
    private $coursVente;

    /**
     * @ORM\ManyToOne(targetEntity=Cours::class)
     * @Groups({"vehicule:read", "vehicule:write"})
     */
    private $cours;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumSerie(): ?string
    {
        return $this->numSerie;
    }

    public function setNumSerie(string $numSerie): self
    {
        $this->numSerie = $numSerie;

        return $this;
    }

    public function getNMoteur(): ?string
    {
        return $this->nMoteur;
    }

    public function setNMoteur(string $nMoteur): self
    {
        $this->nMoteur = $nMoteur;

        return $this;
    }

    public function getNDef(): ?string
    {
        return $this->nDef;
    }

    public function setNDef(string $nDef): self
    {
        $this->nDef = $nDef;

        return $this;
    }

    public function getImmat(): ?string
    {
        return $this->immat;
    }

    public function setImmat(string $immat): self
    {
        $this->immat = $immat;

        return $this;
    }

    public function getPrixAchatDt(): ?float
    {
        return $this->prixAchatDt;
    }

    public function setPrixAchatDt(float $prixAchatDt): self
    {
        $this->prixAchatDt = $prixAchatDt;

        return $this;
    }

    public function getPrixAchatDevise(): ?float
    {
        return $this->prixAchatDevise;
    }

    public function setPrixAchatDevise(float $prixAchatDevise): self
    {
        $this->prixAchatDevise = $prixAchatDevise;

        return $this;
    }

    public function getPrixRevientDt(): ?float
    {
        return $this->prixRevientDt;
    }

    public function setPrixRevientDt(float $prixRevientDt): self
    {
        $this->prixRevientDt = $prixRevientDt;

        return $this;
    }

    public function getNCim(): ?string
    {
        return $this->nCim;
    }

    public function setNCim(string $nCim): self
    {
        $this->nCim = $nCim;

        return $this;
    }

    public function getDatePMC(): ?\DateTimeInterface
    {
        return $this->datePMC;
    }

    public function setDatePMC(\DateTimeInterface $datePMC): self
    {
        $this->datePMC = $datePMC;

        return $this;
    }

    public function getCoursAchat(): ?float
    {
        return $this->coursAchat;
    }

    public function setCoursAchat(float $coursAchat): self
    {
        $this->coursAchat = $coursAchat;

        return $this;
    }

    public function getCoursVente(): ?float
    {
        return $this->coursVente;
    }

    public function setCoursVente(float $coursVente): self
    {
        $this->coursVente = $coursVente;

        return $this;
    }

    public function getCours(): ?Cours
    {
        return $this->cours;
    }

    public function setCours(?Cours $cours): self
    {
        $this->cours = $cours;

        return $this;
    }
}
