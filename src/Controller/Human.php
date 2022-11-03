<?php
namespace App\Controller;


abstract class Human
{
    // Propriétés
    protected string $nom;
    protected string $adresse;
    protected string $street;
    protected string $postCode;
    protected string $city;
    //protected Categorie $Categorie;

    // Constructeur
    public function __construct(string $nom, string $adresse, string $street, string $postCode, string $city/*, Categorie $categorie*/)
    {
        $this->setNom($nom)
            ->setAdresse($adresse)
            ->setStreet($street)
            ->setPostCode($postCode)
            ->setCity($city)
            //->Categorie($categorie);
            ;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    private function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }



    /**
     * Get the value of adresse
     */ 
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of Street
     */ 
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * Set the value of Street
     *
     * @return  self
     */ 
    public function setStreet($street): self
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of PostCode
     */ 
    public function getpostCode(): string
    {
        return $this->postCode;
    }

    /**
     * Set the value of PostCode
     *
     * @return  self
     */ 
    public function setpostCode($postCode): self
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * Get the value of City
     */ 
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Set the value of City
     *
     * @return  self
     */ 
    public function setCity($city): self
    {
        $this->city = $city;

        return $this;
    }


    /**
     * Get the value of Categorie
     */ 
    public function getCategorie()//: Categorie
    {
        return $this->Categorie;
    }

    /**
     * Set the value of Categorie
     *
     * @return  self
     */ 
    public function setCategorie($Categorie): self
    {
        $this->Categorie = $Categorie;

        return $this;
    }

    public function __toString(): string
    {
        return "Détail de la personne :\n
        Nom : {$this->getNom()}\n
        Adresse : {$this->getAdresse()}\n
        Rue : {$this->getStreet()}\n
        PostCode : {$this->getpostCode()}\n
        City : {$this->getCity()}\n";
    }
}