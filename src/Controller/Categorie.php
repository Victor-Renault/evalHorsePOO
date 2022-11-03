<?php

namespace App\Controller;

abstract class Categorie extends Human
{
    
    // Propriétés
    protected string $nom;

    public function __construct(string $nom)
    {
        $this->setNom($nom);
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
        $this->nom = $nom;

        return $this;
    }
}