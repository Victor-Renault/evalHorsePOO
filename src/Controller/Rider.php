<?php
namespace App\Controller;


class Rider extends Human
{
    // Propriétés




    /**
     * @param string $societe
     */
    public function __construct(string $nom, string $adresse, string $street, string $postCode, string $city)
    {
        parent::__construct($nom,$adresse,$street,$postCode,$city);
    }

    /*
    setGameType(): self

    Affect à un Cavalier le type de jeu qu'il peut pratiquer




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
        City : {$this->getCity()}\n";
    }

}