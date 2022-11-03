<?php

namespace App\Controller;

abstract class Category extends Equide
{
    // Propriétés
    protected array $nom;

    public function __construct(array $nom = ['Sheitland', 'Poney', 'Horse'])
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
        if ($this->nom = "Sheitland") {
            $this->nom = $nom;
            return $this->nom;
            if ($this->nom = "Poney") {
                $this->nom = $nom;
                return $this->nom;
                if ($this->nom = "Horse") {
                    $this->nom = $nom;
                    return $this->nom;
                }
            }
        } else {
            echo "Merci de choisir entre Sheitland, Poney, Horse";
        }
    }
}