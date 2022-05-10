<?php

namespace App\Entity;

use App\Repository\CentreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CentreRepository::class) 
 * @ApiResource(
 *  normalizationContext={"groups"={"centre:read"}},
 *  denormalizationContext={"groups"={"centre:write"}}
 * )
 */
class Centre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"centre:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"centre:read", "centre:write"})
     */
    private $lib;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="centre")
     * @Groups({"centre:read", "centre:write"})
     */
    private $responsables;

    /**
     * @ORM\ManyToOne(targetEntity=Society::class, inversedBy="centres")
     * @Groups({"centre:read", "centre:write"})
     */
    private $soci;

    /**
     * @ORM\OneToMany(targetEntity=Depot::class, mappedBy="centre")
     * @Groups({"centre:read", "centre:write"})
     */
    private $depots;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"centre:read", "centre:write"})
     */
    private $adress;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"centre:read", "centre:write"})
     */
    private $numTel;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"centre:read", "centre:write"})
     */
    private $fax;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"centre:read", "centre:write"})
     */
    private $email;

    /**
     * @ORM\ManyToOne(targetEntity=Quotas::class, inversedBy="centre")
     */
    private $quotas;

    public function __construct()
    {
        $this->responsables = new ArrayCollection();
        $this->depots = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLib(): ?string
    {
        return $this->lib;
    }

    public function setLib(?string $lib): self
    {
        $this->lib = $lib;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getResponsables(): Collection
    {
        return $this->responsables;
    }

    public function addResponsable(User $responsable): self
    {
        if (!$this->responsables->contains($responsable)) {
            $this->responsables[] = $responsable;
            $responsable->setCentre($this);
        }

        return $this;
    }

    public function removeResponsable(User $responsable): self
    {
        if ($this->responsables->removeElement($responsable)) {
            // set the owning side to null (unless already changed)
            if ($responsable->getCentre() === $this) {
                $responsable->setCentre(null);
            }
        }

        return $this;
    }

    public function getSoci(): ?Society
    {
        return $this->soci;
    }

    public function setSoci(?Society $soci): self
    {
        $this->soci = $soci;

        return $this;
    }

    /**
     * @return Collection|Depot[]
     */
    public function getDepots(): Collection
    {
        return $this->depots;
    }

    public function addDepot(Depot $depot): self
    {
        if (!$this->depots->contains($depot)) {
            $this->depots[] = $depot;
            $depot->setCentre($this);
        }

        return $this;
    }

    public function removeDepot(Depot $depot): self
    {
        if ($this->depots->removeElement($depot)) {
            // set the owning side to null (unless already changed)
            if ($depot->getCentre() === $this) {
                $depot->setCentre(null);
            }
        }

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getNumTel(): ?int
    {
        return $this->numTel;
    }

    public function setNumTel(?int $numTel): self
    {
        $this->numTel = $numTel;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getQuotas(): ?Quotas
    {
        return $this->quotas;
    }

    public function setQuotas(?Quotas $quotas): self
    {
        $this->quotas = $quotas;

        return $this;
    }
}
