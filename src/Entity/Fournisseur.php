<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\FournisseurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FournisseurRepository::class)
 *  @ApiResource(
 *  normalizationContext={"groups"={"fournisseur:read"}},
 *  denormalizationContext={"groups"={"fournisseur:write"}}
 * )
 */
class Fournisseur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"fournisseur:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"fournisseur:read", "fournisseur:write"})
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"fournisseur:read", "fournisseur:write"})
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"fournisseur:read", "fournisseur:write"})
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"fournisseur:read", "fournisseur:write"})
     */
    private $fax;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"fournisseur:read", "fournisseur:write"})
     */
    private $numTel;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"fournisseur:read", "fournisseur:write"})
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"fournisseur:read", "fournisseur:write"})
     */
    private $RIB;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"fournisseur:read", "fournisseur:write"})
     */
    private $banque;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"fournisseur:read", "fournisseur:write"})
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"fournisseur:read", "fournisseur:write"})
     */
    private $codeISO;

    /**
     * @ORM\ManyToOne(targetEntity=Devis::class, inversedBy="Four")
     *  @Groups({"fournisseur:read", "fournisseur:write"})
     */
    private $devisFour;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"fournisseur:read", "fournisseur:write"})
     */
    private $dateCreat;

    /**
     * @ORM\OneToMany(targetEntity=CommandeFour::class, mappedBy="fournisseur")
     * @Groups({"fournisseur:read", "fournisseur:write"})
     */
    private $commandeFours;

    /**
     * @ORM\OneToMany(targetEntity=FactureFour::class, mappedBy="nomfour")
     */
    private $factureFours;

    public function __construct()
    {
        $this->commandeFours = new ArrayCollection();
        $this->factureFours = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getFax(): ?int
    {
        return $this->fax;
    }

    public function setFax(int $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getNumTel(): ?int
    {
        return $this->numTel;
    }

    public function setNumTel(int $numTel): self
    {
        $this->numTel = $numTel;

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

    public function getRIB(): ?string
    {
        return $this->RIB;
    }

    public function setRIB(string $RIB): self
    {
        $this->RIB = $RIB;

        return $this;
    }

    public function getBanque(): ?string
    {
        return $this->banque;
    }

    public function setBanque(string $banque): self
    {
        $this->banque = $banque;

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

    public function getCodeISO(): ?string
    {
        return $this->codeISO;
    }

    public function setCodeISO(string $codeISO): self
    {
        $this->codeISO = $codeISO;

        return $this;
    }

    public function getDevisFour(): ?Devis
    {
        return $this->devisFour;
    }

    public function setDevisFour(?Devis $devisFour): self
    {
        $this->devisFour = $devisFour;

        return $this;
    }

    public function getDateCreat(): ?\DateTimeInterface
    {
        return $this->dateCreat;
    }

    public function setDateCreat(\DateTimeInterface $dateCreat): self
    {
        $this->dateCreat = $dateCreat;

        return $this;
    }

    /**
     * @return Collection|CommandeFour[]
     */
    public function getCommandeFours(): Collection
    {
        return $this->commandeFours;
    }

    public function addCommandeFour(CommandeFour $commandeFour): self
    {
        if (!$this->commandeFours->contains($commandeFour)) {
            $this->commandeFours[] = $commandeFour;
            $commandeFour->setFournisseur($this);
        }

        return $this;
    }

    public function removeCommandeFour(CommandeFour $commandeFour): self
    {
        if ($this->commandeFours->removeElement($commandeFour)) {
            // set the owning side to null (unless already changed)
            if ($commandeFour->getFournisseur() === $this) {
                $commandeFour->setFournisseur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|FactureFour[]
     */
    public function getFactureFours(): Collection
    {
        return $this->factureFours;
    }

    public function addFactureFour(FactureFour $factureFour): self
    {
        if (!$this->factureFours->contains($factureFour)) {
            $this->factureFours[] = $factureFour;
            $factureFour->setNomfour($this);
        }

        return $this;
    }

    public function removeFactureFour(FactureFour $factureFour): self
    {
        if ($this->factureFours->removeElement($factureFour)) {
            // set the owning side to null (unless already changed)
            if ($factureFour->getNomfour() === $this) {
                $factureFour->setNomfour(null);
            }
        }

        return $this;
    }
}
