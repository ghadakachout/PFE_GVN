<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=CoursRepository::class)
 *  @ApiResource(
 *  normalizationContext={"groups"={"cours:read"}},
 *  denormalizationContext={"groups"={"cours:write"}}
 * )
 */
class Cours
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"cours:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"cours:read", "cours:write"})
     */
    private $nbrDecimale;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"cours:read", "cours:write"})
     */
    private $dateCrea;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"cours:read", "cours:write"})
     */
    private $dateModifi;

    /**
     * @ORM\ManyToOne(targetEntity=Devise::class, inversedBy="cours")
     * @Groups({"cours:read", "cours:write"})
     */
    private $devise;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbrDecimale(): ?int
    {
        return $this->nbrDecimale;
    }

    public function setNbrDecimale(int $nbrDecimale): self
    {
        $this->nbrDecimale = $nbrDecimale;

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

    public function getDateModifi(): ?\DateTimeInterface
    {
        return $this->dateModifi;
    }

    public function setDateModifi(\DateTimeInterface $dateModifi): self
    {
        $this->dateModifi = $dateModifi;

        return $this;
    }

    public function getDevise(): ?Devise
    {
        return $this->devise;
    }

    public function setDevise(?Devise $devise): self
    {
        $this->devise = $devise;

        return $this;
    }
}
