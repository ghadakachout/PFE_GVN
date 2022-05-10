<?php

namespace App\Entity;

use App\Repository\NGPRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NGPRepository::class)
 *  @ApiResource(
 *  normalizationContext={"groups"={"ngp:read"}},
 *  denormalizationContext={"groups"={"ngp:write"}}
 * )
 */
class NGP
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"ngp:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"ngp:read", "ngp:write"})
     */
    private $lib;

    /**
     * @ORM\OneToMany(targetEntity=ArticleGen::class, mappedBy="ngp", orphanRemoval=true)
     */
    private $articleGens;

    public function __construct()
    {
        $this->articleGens = new ArrayCollection();
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
     * @return Collection|ArticleGen[]
     */
    public function getArticleGens(): Collection
    {
        return $this->articleGens;
    }

    public function addArticleGen(ArticleGen $articleGen): self
    {
        if (!$this->articleGens->contains($articleGen)) {
            $this->articleGens[] = $articleGen;
            $articleGen->setNgp($this);
        }

        return $this;
    }

    public function removeArticleGen(ArticleGen $articleGen): self
    {
        if ($this->articleGens->removeElement($articleGen)) {
            // set the owning side to null (unless already changed)
            if ($articleGen->getNgp() === $this) {
                $articleGen->setNgp(null);
            }
        }

        return $this;
    }
}
