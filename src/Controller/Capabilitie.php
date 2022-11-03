<?php

abstract class Capabilitie 
{
    
    // Propriétés
    protected array $nom;

    public function __construct(array $nom = ["Saut","Dressage","Crosse","PoneyGame"])
    {
        $this->setNom($nom);

    }

    /**
     * Get the value of nom
     */ 
    public function getNom(): array
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