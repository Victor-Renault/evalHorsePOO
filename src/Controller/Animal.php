<?php
namespace App\Controller;


abstract class Animal
{
    // Propriétés




    /**
     * @param string $societe
     */
    public function __construct()
    {
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return "Détail de l'animal :\n";
        /*
        Nom : {$this->getNom()}\n
        */
    }

}