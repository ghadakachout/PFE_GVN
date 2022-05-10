<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\CouleurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CouleurRepository::class)
 * @ApiResource(
 *  normalizationContext={"groups"={"couleur:read"}},
 *  denormalizationContext={"groups"={"couleur:write"}}
 * )
 */
class Couleur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *  @Groups({"couleur:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"couleur:read", "couleur:write"})
     */
    private $lib;

    /**
     * @ORM\OneToMany(targetEntity=ArticleGen::class, mappedBy="color")
     * @Groups({"couleur:read", "couleur:write"})
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
            $articleGen->setColor($this);
        }

        return $this;
    }

    public function removeArticleGen(ArticleGen $articleGen): self
    {
        if ($this->articleGens->removeElement($articleGen)) {
            // set the owning side to null (unless already changed)
            if ($articleGen->getColor() === $this) {
                $articleGen->setColor(null);
            }
        }

        return $this;
    }
}
