<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\CatTarifaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CatTarifaireRepository::class)
 *  @ApiResource(
 *  normalizationContext={"groups"={"cattarifaire:read"}},
 *  denormalizationContext={"groups"={"cattarifaire:write"}}
 * )
 */
class CatTarifaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"cattarifiare:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"cattarifaire:read", "cattarifaire:write"})
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"cattarifaire:read", "cattarifaire:write"})
     */
    private $regle;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"cattarifaire:read", "cattarifaire:write"})
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"cattarifaire:read", "cattarifaire:write"})
     */
    private $dateFin;

    
  

    public function getId(): ?int
    {
        return $this->id;
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

    public function getRegle(): ?string
    {
        return $this->regle;
    }

    public function setRegle(string $regle): self
    {
        $this->regle = $regle;

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

}
