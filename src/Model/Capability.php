<?php

namespace App\Controller;

abstract class Capability extends Equide
{
    
    use checkCapa;
    // Propriétés
    protected string $nom;

    public function __construct(string $nom)
    {
        $this->setnom($nom);

    }

    /**
     * Get the value of nom
     */ 
    public function getnom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    protected function setnom($nom): self
    {
        checkCapa::checkCapa($nom);
        $this->nom = $nom;
        return $this;
    }
}