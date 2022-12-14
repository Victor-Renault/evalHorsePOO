<?php

namespace App\Controller;



abstract class Category extends Equide
{
    use checkHorse;

    // Propriétés
    public string $nom;
    protected string $category;

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
    

    public function setNom(string $nom): self
    {
        checkHorse::checkHorse($this->nom);
        $this->nom = $nom;
        return $this;
    }

}