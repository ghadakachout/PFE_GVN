<?php

namespace App\Entity;

use App\Repository\DemandePaieRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=DemandePaieRepository::class)
 *   @ApiResource(
 *  normalizationContext={"groups"={"demandepaie:read"}},
 *  denormalizationContext={"groups"={"demandepaie:write"}}
 * )
 */
class DemandePaie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"demandepaie:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"demandepaie:read", "demandepaie:write"})
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"demandepaie:read", "demandepaie:write"})
     */
    private $type;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"demandepaie:read", "demandepaie:write"})
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"demandepaie:read", "demandepaie:write"})
     */
    private $dateFin;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"demandepaie:read", "demandepaie:write"})
     */
    private $observation;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"demandepaie:read", "demandepaie:write"})
     */
    private $modeReg;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"demandepaie:read", "demandepaie:write"})
     */
    private $numPiece;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"demandepaie:read", "demandepaie:write"})
     */
    private $datePiece;

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

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(string $observation): self
    {
        $this->observation = $observation;

        return $this;
    }

    public function getModeReg(): ?string
    {
        return $this->modeReg;
    }

    public function setModeReg(string $modeReg): self
    {
        $this->modeReg = $modeReg;

        return $this;
    }

    public function getNumPiece(): ?int
    {
        return $this->numPiece;
    }

    public function setNumPiece(int $numPiece): self
    {
        $this->numPiece = $numPiece;

        return $this;
    }

    public function getDatePiece(): ?\DateTimeInterface
    {
        return $this->datePiece;
    }

    public function setDatePiece(\DateTimeInterface $datePiece): self
    {
        $this->datePiece = $datePiece;

        return $this;
    }
}
