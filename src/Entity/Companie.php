<?php

namespace App\Entity;

use App\Repository\CompanieRepository;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompanieRepository::class)
 * @ApiResource(
 *  normalizationContext={"groups"={"companie:read"}},
 *  denormalizationContext={"groups"={"companie:write"}}
 * )
 */
class Companie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"companie:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"companie:read", "companie:write"})
     */
    private $lib;

    /**
     * @ORM\Column(type="string", length=255)
     * Groups({"companie:read", "companie:write"})
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer")
     * Groups({"companie:read", "companie:write"})
     */
    private $numTel;

    /**
     * @ORM\Column(type="string", length=255)
     * Groups({"companie:read", "companie:write"})
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * Groups({"companie:read", "companie:write"})
     */
    private $fax;

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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getNumTel(): ?int
    {
        return $this->numTel;
    }

    public function setNumTel(int $numTel): self
    {
        $this->numTel = $numTel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }
}
