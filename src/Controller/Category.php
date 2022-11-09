<?php

namespace App\Controller;

abstract class Category extends Equide
{
    // Propriétés
    protected string $nom;
    protected string $category;

    public function __construct(string $nom,string $category = 'Sheitland Poney Horse')
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

    // on vérifier que la catégory du cheval correspond bien a une des catégory enregistrées, on renvoi un message d'erreur dans le cas contraire

    protected function setNom($nom): self
    {
        if ($this->nom = strpos($nom,$this->category)) {
                    $this->nom = $nom;
                }else {
            return false;
            echo "Merci de choisir entre Sheitland, Poney, Horse";
        }
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