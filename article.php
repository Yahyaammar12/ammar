<?php
class article
{
    private int $id;
    private ?string $nom = null;
    private ?string $prix = null;
    private ?string $descriptione = null;
    private ?string $photo = null;
    private ?string $categorie = null;

    public function __construct($nom, $prix, $descriptione, $photo, $categorie) {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->descriptione = $descriptione;
        $this->photo = $photo;
        $this->getCategorie = $categorie;

    }

    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($n)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getprix()
    {
        return $this->prix;
    }


    public function setprix($prix)
    {
        $this->prix = $prix;

        return $this;
    }


    public function getDescriptione()
    {
        return $this->descriptione;
    }


    public function setDescriptionr($descriptione)
    {
        $this->setDescriptionr = $descriptione;

        return $this;
    }


    public function getPhoto()
    {
        return $this->photo;
    }


    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }


    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }
}
