<?php

namespace App\Entity;

use App\Repository\FamilleRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FamilleRepository::class)
 *  @ApiResource(
 *  normalizationContext={"groups"={"famille:read"}},
 *  denormalizationContext={"groups"={"famille:write"}}
 * )
 */
class Famille
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"famille:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"famille:read", "famille:write"})
     */
    private $lib;

    /**
     * @ORM\OneToMany(targetEntity=SouFamille::class, mappedBy="Fam")
     * @Groups({"famille:read", "famille:write"})
     */
    private $souFamilles;

    public function __construct()
    {
        $this->souFamilles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLib(): ?string
    {
        return $this->lib;
    }

    public function setLib(string $lib): self
    {
        $this->lib = $lib;

        return $this;
    }

    /**
     * @return Collection|SouFamille[]
     */
    public function getSouFamilles(): Collection
    {
        return $this->souFamilles;
    }

    public function addSouFamille(SouFamille $souFamille): self
    {
        if (!$this->souFamilles->contains($souFamille)) {
            $this->souFamilles[] = $souFamille;
            $souFamille->setFam($this);
        }

        return $this;
    }

    public function removeSouFamille(SouFamille $souFamille): self
    {
        if ($this->souFamilles->removeElement($souFamille)) {
            // set the owning side to null (unless already changed)
            if ($souFamille->getFam() === $this) {
                $souFamille->setFam(null);
            }
        }

        return $this;
    }
}
