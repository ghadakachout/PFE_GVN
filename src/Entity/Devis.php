<?php

namespace App\Entity;

use App\Repository\DevisRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DevisRepository::class)
 * @ApiResource(
 *  normalizationContext={"groups"={"devis:read"}},
 *  denormalizationContext={"groups"={"devis:write"}}
 * )
 */
class Devis
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"devis:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"devis:read", "devis:write"})
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"devis:read", "devis:write"})
     */
    private $etat;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"devis:read", "devis:write"})
     */
    private $ETA;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"devis:read", "devis:write"})
     */
    private $ETD;

    /**
     * @ORM\Column(type="float")
     * @Groups({"devis:read", "devis:write"})
     */
    private $fraixGen;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"devis:read", "devis:write"})
     */
    private $paysOrig;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"devis:read", "devis:write"})
     */
    private $paysGouv;

    /**
     * @ORM\Column(type="float")
     * @Groups({"devis:read", "devis:write"})
     */
    private $devise;

    /**
     * @ORM\ManyToOne(targetEntity=Paiement::class)
     * @Groups({"devis:read", "devis:write"})
     */
    private $paie;

    /**
     * @ORM\ManyToOne(targetEntity=Livraison::class)
     * @Groups({"devis:read", "devis:write"})
     */
    private $liv;

    /**
     * @ORM\OneToMany(targetEntity=Fournisseur::class, mappedBy="devis_four")
     * @Groups({"devis:read", "devis:write"})
     */
    private $Four;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateCrea;

    public function __construct()
    {
        $this->devi_client = new ArrayCollection();
        $this->Four = new ArrayCollection();
    }

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

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getETA(): ?\DateTimeInterface
    {
        return $this->ETA;
    }

    public function setETA(\DateTimeInterface $ETA): self
    {
        $this->ETA = $ETA;

        return $this;
    }

    public function getETD(): ?\DateTimeInterface
    {
        return $this->ETD;
    }

    public function setETD(\DateTimeInterface $ETD): self
    {
        $this->ETD = $ETD;

        return $this;
    }

    public function getFraixGen(): ?float
    {
        return $this->fraixGen;
    }

    public function setFraixGen(float $fraixGen): self
    {
        $this->fraixGen = $fraixGen;

        return $this;
    }

    public function getPaysOrig(): ?string
    {
        return $this->paysOrig;
    }

    public function setPaysOrig(string $paysOrig): self
    {
        $this->paysOrig = $paysOrig;

        return $this;
    }

    public function getPaysGouv(): ?string
    {
        return $this->paysGouv;
    }

    public function setPaysGouv(string $paysGouv): self
    {
        $this->paysGouv = $paysGouv;

        return $this;
    }

    public function getDevise(): ?float
    {
        return $this->devise;
    }

    public function setDevise(float $devise): self
    {
        $this->devise = $devise;

        return $this;
    }

    public function getPaie(): ?Paiement
    {
        return $this->paie;
    }

    public function setPaie(?Paiement $paie): self
    {
        $this->paie = $paie;

        return $this;
    }

    public function getLiv(): ?Livraison
    {
        return $this->liv;
    }

    public function setLiv(?Livraison $liv): self
    {
        $this->liv = $liv;

        return $this;
    }

    /**
     * @return Collection|Client[]
     */
    public function getDeviClient(): Collection
    {
        return $this->devi_client;
    }

    public function addDeviClient(Client $deviClient): self
    {
        if (!$this->devi_client->contains($deviClient)) {
            $this->devi_client[] = $deviClient;
            $deviClient->setDevisCli($this);
        }

        return $this;
    }

    public function removeDeviClient(Client $deviClient): self
    {
        if ($this->devi_client->removeElement($deviClient)) {
            // set the owning side to null (unless already changed)
            if ($deviClient->getDevisCli() === $this) {
                $deviClient->setDevisCli(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Fournisseur[]
     */
    public function getFour(): Collection
    {
        return $this->Four;
    }

    public function addFour(Fournisseur $four): self
    {
        if (!$this->Four->contains($four)) {
            $this->Four[] = $four;
            $four->setDevisFour($this);
        }

        return $this;
    }

    public function removeFour(Fournisseur $four): self
    {
        if ($this->Four->removeElement($four)) {
            // set the owning side to null (unless already changed)
            if ($four->getDevisFour() === $this) {
                $four->setDevisFour(null);
            }
        }

        return $this;
    }

    public function getDateCrea(): ?\DateTimeInterface
    {
        return $this->dateCrea;
    }

    public function setDateCrea(\DateTimeInterface $dateCrea): self
    {
        $this->dateCrea = $dateCrea;

        return $this;
    }
}
