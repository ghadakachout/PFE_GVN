<?php

namespace App\Entity;

use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 * @ApiResource(
 *  normalizationContext={"groups"={"client:read"}},
 *  denormalizationContext={"groups"={"client:write"}}
 * )
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"client:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"client:read", "client:write"})
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"client:read", "client:write"})
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"client:read", "client:write"})
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"client:read", "client:write"})
     */
    private $numTel;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"client:read", "client:write"})
     */
    private $RIB;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"client:read", "client:write"})
     */
    private $activite;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"client:read", "client:write"})
     */
    private $codePostal;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"client:read", "client:write"})
     */
    private $matrFisc;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"client:read", "client:write"})
     */
    private $lieuLivr;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"client:read", "client:write"})
     */
    private $NIdent;
    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"client:read", "client:write"})
     */
    private $banque;

    /**
     * @ORM\ManyToOne(targetEntity=CatTarifaire::class)
     * @Groups({"client:read", "client:write"})
     */
    private $catTarif;

    /**
     * @ORM\ManyToOne(targetEntity=Devis::class, inversedBy="devi_client")
     * @Groups({"client:read", "client:write"})
     */
    private $devisCli;

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

    public function getNumTel(): ?int
    {
        return $this->numTel;
    }

    public function setNumTel(int $numTel): self
    {
        $this->numTel = $numTel;

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

    public function getActivite(): ?string
    {
        return $this->activite;
    }

    public function setActivite(string $activite): self
    {
        $this->activite = $activite;

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

    public function getMatrFisc(): ?string
    {
        return $this->matrFisc;
    }

    public function setMatrFisc(string $matrFisc): self
    {
        $this->matrFisc = $matrFisc;

        return $this;
    }

    public function getLieuLivr(): ?string
    {
        return $this->lieuLivr;
    }

    public function setLieuLivr(string $lieuLivr): self
    {
        $this->lieuLivr = $lieuLivr;

        return $this;
    }

    public function getNIdent(): ?string
    {
        return $this->NIdent;
    }

    public function setNIdent(string $NIdent): self
    {
        $this->NIdent = $NIdent;

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

    public function getCatTarif(): ?CatTarifaire
    {
        return $this->catTarif;
    }

    public function setCatTarif(?CatTarifaire $catTarif): self
    {
        $this->catTarif = $catTarif;

        return $this;
    }

    public function getDevisCli(): ?Devis
    {
        return $this->devisCli;
    }

    public function setDevisCli(?Devis $devisCli): self
    {
        $this->devisCli = $devisCli;

        return $this;
    }
}
