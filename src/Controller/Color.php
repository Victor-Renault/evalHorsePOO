<?php

namespace App\Controller;

abstract class Color extends Equide
{
    // Propriétés
    protected string $nom;
    protected string $color;

    public function __construct(string $nom,string $color = 'Alzan Bai Pie Grey White')
    {
        $this->setNom($nom);
        $this->setNom($color);
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

    // on vérifier que la couleur du cheval correspond bien a une des couleurs enregistrées, on renvoi un message d'erreur dans le cas contraire

    protected function setNom($nom): self
    {

        $this->checkColor($nom);
        return $this;
        

    }

    private function checkColor(string $nom): string
    {
        if ($this->nom = strpos($nom,$this->color)) {
            $this->nom = $nom;
        }
    
     else {
        return false;
                echo "Merci de choisir entre Alzan, Bai, Pie, Grey, White";
            }
            return $this->nom;
    }
}