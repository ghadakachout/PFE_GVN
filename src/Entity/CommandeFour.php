<?php

namespace App\Entity;

use App\Repository\CommandeFourRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=CommandeFourRepository::class)
 *  @ApiResource(
 *  normalizationContext={"groups"={"commandefour:read"}},
 *  denormalizationContext={"groups"={"commandefour:write"}}
 * )
 */
class CommandeFour
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"commandefour:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"commandefour:read", "commandefour:write"})
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"commandefour:read", "commandefour:write"})
     */
    private $type;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"commandefour:read", "commandefour:write"})
     */
    private $num;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"commandefour:read", "commandefour:write"})
     */
    private $phase;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"commandefour:read", "commandefour:write"})
     */
    private $etat;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"commandefour:read", "commandefour:write"})
     */
    private $dateOuverture;

    /**
     * @ORM\OneToOne(targetEntity=Fournisseur::class, cascade={"persist", "remove"})
     * @Groups({"commandefour:read", "commandefour:write"})
     */
    private $codeFour;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"commandefour:read", "commandefour:write"})
     */
    private $dateModif;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"commandefour:read", "commandefour:write"})
     */
    private $dateCreat;

    /**
     * @ORM\OneToOne(targetEntity=Devis::class, cascade={"persist", "remove"})
     * @Groups({"commandefour:read", "commandefour:write"})
     */
    private $devisfour;

    /**
     * @ORM\OneToMany(targetEntity=ArticleGen::class, mappedBy="commandeFour")
     */
    private $article;

    /**
     * @ORM\ManyToOne(targetEntity=Fournisseur::class, inversedBy="commandeFours")
     */
    private $fournisseur;

    public function __construct()
    {
        $this->article = new ArrayCollection();
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

    public function getNum(): ?int
    {
        return $this->num;
    }

    public function setNum(int $num): self
    {
        $this->num = $num;

        return $this;
    }

    public function getPhase(): ?string
    {
        return $this->phase;
    }

    public function setPhase(string $phase): self
    {
        $this->phase = $phase;

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

    public function getDateOuverture(): ?\DateTimeInterface
    {
        return $this->dateOuverture;
    }

    public function setDateOuverture(\DateTimeInterface $dateOuverture): self
    {
        $this->dateOuverture = $dateOuverture;

        return $this;
    }

    public function getCodeFour(): ?Fournisseur
    {
        return $this->codeFour;
    }

    public function setCodeFour(?Fournisseur $codeFour): self
    {
        $this->codeFour = $codeFour;

        return $this;
    }

    public function getDateModif(): ?\DateTimeInterface
    {
        return $this->dateModif;
    }

    public function setDateModif(\DateTimeInterface $dateModif): self
    {
        $this->dateModif = $dateModif;

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

    public function getDevisfour(): ?Devis
    {
        return $this->devisfour;
    }

    public function setDevisfour(?Devis $devisfour): self
    {
        $this->devisfour = $devisfour;

        return $this;
    }

    /**
     * @return Collection|ArticleGen[]
     */
    public function getArticle(): Collection
    {
        return $this->article;
    }

    public function addArticle(ArticleGen $article): self
    {
        if (!$this->article->contains($article)) {
            $this->article[] = $article;
            $article->setCommandeFour($this);
        }

        return $this;
    }

    public function removeArticle(ArticleGen $article): self
    {
        if ($this->article->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getCommandeFour() === $this) {
                $article->setCommandeFour(null);
            }
        }

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }
}
