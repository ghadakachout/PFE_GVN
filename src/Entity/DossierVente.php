<?php

namespace App\Entity;

use App\Repository\DossierVenteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=DossierVenteRepository::class)
 *  @ApiResource(
 *  normalizationContext={"groups"={"dossiervente:read"}},
 *  denormalizationContext={"groups"={"dossiervente:write"}}
 * )
 */

/*@Groups({"dossiervente:read", "dossiervente:write"})*/
class DossierVente
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"dossiervente:read"})
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
