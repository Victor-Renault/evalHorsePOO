<?php

namespace App\Controller;



abstract class Category extends Equide
{
    use checkHorse;

    // Propriétés
    public string $nom;
    protected string $category;

    public function __construct(string $nom,string $category = 'Sheitland/Poney/Horse')
    {
        $this->setNom($nom);
        $this->setCategory($category);
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
    
    

    /**
     * Get the value of category
     */ 
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category): self
    {
        $this->category = $category;

        return $this;
    }
}