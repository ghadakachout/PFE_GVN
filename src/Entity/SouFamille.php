<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\SouFamilleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SouFamilleRepository::class)
 * @ApiResource(
 *  normalizationContext={"groups"={"soufamille:read"}},
 *  denormalizationContext={"groups"={"soufamille:write"}}
 * )
 */
class SouFamille
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"soufamille:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"soufamille:read", "soufamille:write"})
     */
    private $lib;

    /**
     * @ORM\ManyToOne(targetEntity=Famille::class, inversedBy="souFamilles")
     * @Groups({"soufamille:read", "soufamille:write"})
     */
    private $Fam;

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

    public function getFam(): ?Famille
    {
        return $this->Fam;
    }

    public function setFam(?Famille $Fam): self
    {
        $this->Fam = $Fam;

        return $this;
    }
}
