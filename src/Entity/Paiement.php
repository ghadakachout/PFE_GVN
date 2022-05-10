<?php

namespace App\Entity;

use App\Repository\PaiementRepository;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PaiementRepository::class)
 * @ApiResource(
 *  normalizationContext={"groups"={"ngp:read"}},
 *  denormalizationContext={"groups"={"ngp:write"}}
 * )
 */
class Paiement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"paiement:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"paiement:read", "paiement:write"})
     */
    private $mode;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"paiement:read", "paiement:write"})
     */
    private $delai;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(string $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    public function getDelai(): ?string
    {
        return $this->delai;
    }

    public function setDelai(string $delai): self
    {
        $this->delai = $delai;

        return $this;
    }
}
