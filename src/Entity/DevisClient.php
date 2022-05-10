<?php

namespace App\Entity;

use App\Repository\DevisClientRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=DevisClientRepository::class)
 * @ApiResource(
 *  normalizationContext={"groups"={"devisclient:read"}},
 *  denormalizationContext={"groups"={"devisclient:write"}}
 * )
 */
class DevisClient
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"devisclient:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"devisclient:read", "devisclient:write"})
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"devisclient:read", "devisclient:write"})
     */
    private $etat;

    /**
     * @ORM\OneToOne(targetEntity=Paiement::class, cascade={"persist", "remove"})
     * @Groups({"devisclient:read", "devisclient:write"})
     */
    private $paie;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"devisclient:read", "devisclient:write"})
     */
    private $fraixGen;

    /**
     * @ORM\Column(type="float")
     * @Groups({"devisclient:read", "devisclient:write"})
     */
    private $devise;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"devisclient:read", "devisclient:write"})
     */
    private $dateCrea;

    /**
     * @ORM\OneToOne(targetEntity=Client::class, cascade={"persist", "remove"})
     * @Groups({"devisclient:read", "devisclient:write"})
     */
    private $client;

    /**
     * @ORM\OneToOne(targetEntity=Livraison::class, cascade={"persist", "remove"})
     */
    private $liv;

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

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getLiv(): ?Paiement
    {
        return $this->liv;
    }

    public function setLiv(?Paiement $liv): self
    {
        $this->liv = $liv;

        return $this;
    }

    public function getPaie(): ?Paiement
    {
        return $this->paie;
    }

    public function setPaie(?Paiement $paie): self
    {
        $this->paie = $paie;

        return $this;
    }

    public function getFraixGen(): ?string
    {
        return $this->fraixGen;
    }

    public function setFraixGen(string $fraixGen): self
    {
        $this->fraixGen = $fraixGen;

        return $this;
    }

    public function getDevise(): ?float
    {
        return $this->devise;
    }

    public function setDevise(float $devise): self
    {
        $this->devise = $devise;

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

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }
}
