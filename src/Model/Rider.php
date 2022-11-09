<?php
namespace App\Controller;


class Rider extends Human
{
    // Propriétés
    protected Equide $equide;
    protected array $gameType;


    public function __construct(string $nom, string $adresse, string $street, string $postCode, string $city, Categorie $categorie, Equide $equide, array $gameType)
    {
        parent::__construct($nom,$adresse,$street,$postCode,$city,$categorie,$equide);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "Détail du Rider :\n
        Nom : {$this->getNom()}\n
        Adresse : {$this->getAdresse()}\n
        Rue : {$this->getStreet()}\n
        PostCode : {$this->getpostCode()}\n
        City : {$this->getCity()}\n
        Jeu du Rider : {$this->getGameType()}\n
        Categorie du Rider : {$this->getCategorie()}\n";
    }

    /**
     * Set the value of gameType
     *
     * @return  self
     */ 

    private function setGameType(Equide $capabilitie, Equide $rider, $gameType)
    {
        subRider::subRider($capabilitie, $rider, $gameType);
        $this->gameType = $gameType;
        return $this;   

        
    }
    private function getGameType()
    {
        return $this->gameType;         
    }

    
}