<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prix;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_reserv;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_retour;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu_achat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reference;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_achat;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fin_garantie;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $conseil_entretien;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo_ticket;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $manuel_utilisation;

    /**
     * @ORM\OneToOne(targetEntity=Categorie::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDateReserv(): ?\DateTimeInterface
    {
        return $this->date_reserv;
    }

    public function setDateReserv(\DateTimeInterface $date_reserv): self
    {
        $this->date_reserv = $date_reserv;

        return $this;
    }

    public function getDateRetour(): ?\DateTimeInterface
    {
        return $this->date_retour;
    }

    public function setDateRetour(\DateTimeInterface $date_retour): self
    {
        $this->date_retour = $date_retour;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getLieuAchat(): ?string
    {
        return $this->lieu_achat;
    }

    public function setLieuAchat(string $lieu_achat): self
    {
        $this->lieu_achat = $lieu_achat;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->date_achat;
    }

    public function setDateAchat(\DateTimeInterface $date_achat): self
    {
        $this->date_achat = $date_achat;

        return $this;
    }

    public function getFinGarantie(): ?\DateTimeInterface
    {
        return $this->fin_garantie;
    }

    public function setFinGarantie(?\DateTimeInterface $fin_garantie): self
    {
        $this->fin_garantie = $fin_garantie;

        return $this;
    }

    public function getConseilEntretien(): ?string
    {
        return $this->conseil_entretien;
    }

    public function setConseilEntretien(?string $conseil_entretien): self
    {
        $this->conseil_entretien = $conseil_entretien;

        return $this;
    }

    public function getPhotoTicket(): ?string
    {
        return $this->photo_ticket;
    }

    public function setPhotoTicket(?string $photo_ticket): self
    {
        $this->photo_ticket = $photo_ticket;

        return $this;
    }

    public function getManuelUtilisation(): ?string
    {
        return $this->manuel_utilisation;
    }

    public function setManuelUtilisation(?string $manuel_utilisation): self
    {
        $this->manuel_utilisation = $manuel_utilisation;

        return $this;
    }

    public function getCategorieId(): ?Categorie
    {
        return $this->categorie_id;
    }

    public function setCategorieId(Categorie $categorie_id): self
    {
        $this->categorie_id = $categorie_id;

        return $this;
    }

    // public function __toString() {
    //   return $this->name;
    // }
}
