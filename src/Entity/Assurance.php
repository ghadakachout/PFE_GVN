<?php

namespace App\Entity;


use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AssuranceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AssuranceRepository::class)
 * @ApiResource(
 *  normalizationContext={"groups"={"assurance:read"}},
 *  denormalizationContext={"groups"={"assurance:write"}}
 * )
 */
class Assurance
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *  @Groups({"assurance:read"})
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
