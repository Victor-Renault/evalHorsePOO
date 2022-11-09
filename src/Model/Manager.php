<?php
namespace App\Controller;


class Manager extends Human
{
    // Propriétés

    /**
     * @param string $societe
     */
    public function __construct(string $nom, string $adresse, string $street, string $postCode, string $city, Categorie $categorie)
    {
        parent::__construct($nom,$adresse,$street,$postCode,$city,$categorie);
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return "Détail du Manager :\n
        Nom : {$this->getNom()}\n
        Adresse : {$this->getAdresse()}\n
        Rue : {$this->getStreet()}\n
        PostCode : {$this->getpostCode()}\n
        City : {$this->getCity()}\n
        Categorie du Manager : {$this->getCategorie()}\n";
    }

}
