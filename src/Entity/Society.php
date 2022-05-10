<?php

namespace App\Entity;

use App\Repository\SocietyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SocietyRepository::class)
 * @ApiResource(
 *  normalizationContext={"groups"={"society:read"}},
 *  denormalizationContext={"groups"={"society:write"}}
 * )
 */
class Society
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"society:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"society:read", "society:write"})
     */
    private $lib;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"society:read", "society:write"})
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"society:read", "society:write"})
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"society:read", "society:write"})
     */
    private $fax;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"society:read", "society:write"})
     */
    private $numTel;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="soci")
     */
    private $users;

    /**
     * @ORM\OneToMany(targetEntity=Centre::class, mappedBy="soci")
     */
    private $centres;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->centres = new ArrayCollection();
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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

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

    public function getFax(): ?int
    {
        return $this->fax;
    }

    public function setFax(int $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getNumTel(): ?int
    {
        return $this->numTel;
    }

    public function setNumTel(?int $numTel): self
    {
        $this->numTel = $numTel;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setSociété($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getSociété() === $this) {
                $user->setSociété(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Centre[]
     */
    public function getCentres(): Collection
    {
        return $this->centres;
    }

    public function addCentre(Centre $centre): self
    {
        if (!$this->centres->contains($centre)) {
            $this->centres[] = $centre;
            $centre->setSociété($this);
        }

        return $this;
    }

    public function removeCentre(Centre $centre): self
    {
        if ($this->centres->removeElement($centre)) {
            // set the owning side to null (unless already changed)
            if ($centre->getSociété() === $this) {
                $centre->setSociété(null);
            }
        }

        return $this;
    }
}
