<?php

namespace App\Entity;


use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ArticleGenRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleGenRepository::class)
 * @ApiResource(
 *  normalizationContext={"groups"={"article:read"}},
 *  denormalizationContext={"groups"={"article:write"}}
 * )
 */
class ArticleGen
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *  @Groups({"article:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"article:read", "article:write"})
     */
    private $designation;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"article:read", "article:write"})
     */
    private $date_entree;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"article:read", "article:write"})
     */
    private $date_sortie;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"article:read", "article:write"})
     */
    private $garantie_annee;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"article:read", "article:write"})
     */
    private $garantie_KM;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"article:read", "article:write"})
     */
    private $type_moteur;

    /**
     * @ORM\Column(type="string", length=255)
     * v
     */
    private $puiss_fiscale;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"article:read", "article:write"})
     */
    private $nb_place;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"article:read", "article:write"})
     */
    private $type_vitesse;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"article:read", "article:write"})
     */
    private $fiche_tech;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"article:read", "article:write"})
     */
    private $etat;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"article:read", "article:write"})
     */
    private $date_etat;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"article:read", "article:write"})
     */
    private $date_creation;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"article:read", "article:write"})
     */
    private $date_modif;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"article:read", "article:write"})
     */
    private $date_debut_prod;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"article:read", "article:write"})
     */
    private $date_fin_prod;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"article:read", "article:write"})
     */
    private $val_carburant;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"article:read", "article:write"})
     */
    private $quantity;

    /**
     * @ORM\Column(type="float")
     * @Groups({"article:read", "article:write"})
     */
    private $prix_trans;

    /**
     * @ORM\Column(type="float")
     * @Groups({"article:read", "article:write"})
     */
    private $prix_immat;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"article:read", "article:write"})
     */
    private $dispo;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"article:read", "article:write"})
     */
    private $nb_porte;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"article:read", "article:write"})
     */
    private $energie;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"article:read", "article:write"})
     */
    private $volume_moteur;

    /**
     * @ORM\ManyToOne(targetEntity=Couleur::class, inversedBy="articleGens")
     * @Groups({"article:read", "article:write"})
     */
    private $color;

    /**
     * @ORM\ManyToOne(targetEntity=Marque::class)
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"article:read", "article:write"})
     */
    private $marqu;

    /**
     * @ORM\ManyToOne(targetEntity=Famille::class)
     * @ORM\JoinColumn(nullable=false)
     * v
     */
    private $famil;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class)
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"article:read", "article:write"})
     */
    private $categ;

    /**
     * @ORM\ManyToOne(targetEntity=NGP::class, inversedBy="articleGens")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"article:read", "article:write"})
     */
    private $ngp;

    /**
     * @ORM\ManyToOne(targetEntity=CommandeFour::class, inversedBy="article")
     * @Groups({"article:read", "article:write"})
     */
    private $commandeFour;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getDateEntree(): ?\DateTimeInterface
    {
        return $this->date_entree;
    }

    public function setDateEntree(\DateTimeInterface $date_entree): self
    {
        $this->date_entree = $date_entree;

        return $this;
    }

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->date_sortie;
    }

    public function setDateSortie(\DateTimeInterface $date_sortie): self
    {
        $this->date_sortie = $date_sortie;

        return $this;
    }

    public function getGarantieAnnée(): ?int
    {
        return $this->garantie_année;
    }

    public function setGarantieAnnée(int $garantie_année): self
    {
        $this->garantie_année = $garantie_année;

        return $this;
    }

    public function getGarantieKM(): ?int
    {
        return $this->garantie_KM;
    }

    public function setGarantieKM(int $garantie_KM): self
    {
        $this->garantie_KM = $garantie_KM;

        return $this;
    }

    public function getTypeMoteur(): ?string
    {
        return $this->type_moteur;
    }

    public function setTypeMoteur(string $type_moteur): self
    {
        $this->type_moteur = $type_moteur;

        return $this;
    }

    public function getPuissFiscale(): ?string
    {
        return $this->puiss_fiscale;
    }

    public function setPuissFiscale(string $puiss_fiscale): self
    {
        $this->puiss_fiscale = $puiss_fiscale;

        return $this;
    }

    public function getNbPlace(): ?int
    {
        return $this->nb_place;
    }

    public function setNbPlace(int $nb_place): self
    {
        $this->nb_place = $nb_place;

        return $this;
    }

    public function getTypeVitesse(): ?string
    {
        return $this->type_vitesse;
    }

    public function setTypeVitesse(string $type_vitesse): self
    {
        $this->type_vitesse = $type_vitesse;

        return $this;
    }

    public function getFicheTech(): ?string
    {
        return $this->fiche_tech;
    }

    public function setFicheTech(string $fiche_tech): self
    {
        $this->fiche_tech = $fiche_tech;

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

    public function getDateEtat(): ?\DateTimeInterface
    {
        return $this->date_etat;
    }

    public function setDateEtat(\DateTimeInterface $date_etat): self
    {
        $this->date_etat = $date_etat;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeInterface $date_creation): self
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function getDateModif(): ?\DateTimeInterface
    {
        return $this->date_modif;
    }

    public function setDateModif(\DateTimeInterface $date_modif): self
    {
        $this->date_modif = $date_modif;

        return $this;
    }

    public function getDateDebutProd(): ?\DateTimeInterface
    {
        return $this->date_debut_prod;
    }

    public function setDateDebutProd(\DateTimeInterface $date_debut_prod): self
    {
        $this->date_debut_prod = $date_debut_prod;

        return $this;
    }

    public function getDateFinProd(): ?\DateTimeInterface
    {
        return $this->date_fin_prod;
    }

    public function setDateFinProd(\DateTimeInterface $date_fin_prod): self
    {
        $this->date_fin_prod = $date_fin_prod;

        return $this;
    }

    public function getValCarburant(): ?int
    {
        return $this->val_carburant;
    }

    public function setValCarburant(int $val_carburant): self
    {
        $this->val_carburant = $val_carburant;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getPrixTrans(): ?float
    {
        return $this->prix_trans;
    }

    public function setPrixTrans(float $prix_trans): self
    {
        $this->prix_trans = $prix_trans;

        return $this;
    }

    public function getPrixImmat(): ?float
    {
        return $this->prix_immat;
    }

    public function setPrixImmat(float $prix_immat): self
    {
        $this->prix_immat = $prix_immat;

        return $this;
    }

    public function getDispo(): ?bool
    {
        return $this->dispo;
    }

    public function setDispo(bool $dispo): self
    {
        $this->dispo = $dispo;

        return $this;
    }

    public function getNbPorte(): ?int
    {
        return $this->nb_porte;
    }

    public function setNbPorte(int $nb_porte): self
    {
        $this->nb_porte = $nb_porte;

        return $this;
    }

    public function getEnergie(): ?string
    {
        return $this->energie;
    }

    public function setEnergie(string $energie): self
    {
        $this->energie = $energie;

        return $this;
    }

    public function getVolumeMoteur(): ?string
    {
        return $this->volume_moteur;
    }

    public function setVolumeMoteur(string $volume_moteur): self
    {
        $this->volume_moteur = $volume_moteur;

        return $this;
    }

    public function getColor(): ?Couleur
    {
        return $this->color;
    }

    public function setColor(?Couleur $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getMarqu(): ?Marque
    {
        return $this->marqu;
    }

    public function setMarqu(?Marque $marqu): self
    {
        $this->marqu = $marqu;

        return $this;
    }

    public function getFamil(): ?Famille
    {
        return $this->famil;
    }

    public function setFamil(?Famille $famil): self
    {
        $this->famil = $famil;

        return $this;
    }

    public function getCateg(): ?Categorie
    {
        return $this->categ;
    }

    public function setCateg(?Categorie $categ): self
    {
        $this->categ = $categ;

        return $this;
    }

    public function getNgp(): ?NGP
    {
        return $this->ngp;
    }

    public function setNgp(?NGP $ngp): self
    {
        $this->ngp = $ngp;

        return $this;
    }

    public function getCommandeFour(): ?CommandeFour
    {
        return $this->commandeFour;
    }

    public function setCommandeFour(?CommandeFour $commandeFour): self
    {
        $this->commandeFour = $commandeFour;

        return $this;
    }
}
