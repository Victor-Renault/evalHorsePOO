<?php
namespace App\Controller;


class Manager extends Human
{
    // Propriétés




    /**
     * @param string $societe
     */
    public function __construct(string $nom, string $adresse, string $street, string $postCode, string $city)
    {
        parent::__construct($nom,$adresse,$street,$postCode,$city);
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
        City : {$this->getCity()}\n";
    }

}