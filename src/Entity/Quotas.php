<?php

namespace App\Entity;

use App\Repository\QuotasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuotasRepository::class)
 * @ApiResource(
 *  normalizationContext={"groups"={"quotas:read"}},
 *  denormalizationContext={"groups"={"quotas:write"}}
 * )
 */
class Quotas
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"quotas:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"quotas:read", "quotas:write"})
     */
    private $design;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"quotas:read", "quotas:write"})
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"quotas:read", "quotas:write"})
     */
    private $dateFin;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"quotas:read", "quotas:write"})
     */
    private $etat;

    /**
     * @ORM\OneToMany(targetEntity=Centre::class, mappedBy="quotas")
     * @Groups({"quotas:read", "quotas:write"})
     */
    private $centre;

    public function __construct()
    {
        $this->centre = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesign(): ?string
    {
        return $this->design;
    }

    public function setDesign(string $design): self
    {
        $this->design = $design;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

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

    /**
     * @return Collection|Centre[]
     */
    public function getCentre(): Collection
    {
        return $this->centre;
    }

    public function addCentre(Centre $centre): self
    {
        if (!$this->centre->contains($centre)) {
            $this->centre[] = $centre;
            $centre->setQuotas($this);
        }

        return $this;
    }

    public function removeCentre(Centre $centre): self
    {
        if ($this->centre->removeElement($centre)) {
            // set the owning side to null (unless already changed)
            if ($centre->getQuotas() === $this) {
                $centre->setQuotas(null);
            }
        }

        return $this;
    }
}
