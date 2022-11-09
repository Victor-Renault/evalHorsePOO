<?php

namespace App\Controller;

abstract class Color extends Equide
{

    use checkColor;
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


    protected function setNom($nom): self
    {

        checkColor::checkColor($nom);
        $this->nom = $nom;
        return $this;
        

    }

    
}