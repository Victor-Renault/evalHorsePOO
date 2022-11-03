<?php

namespace App\Controller;

abstract class Color extends Equide
{
    // Propriétés
    protected array $nom;

    public function __construct(array $nom = ['Alzan', 'Bai', 'Pie', 'Grey', 'White'])
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
    if ($this->nom = "Alzan") {
        $this->nom = $nom;
        return $this->nom;
        } elseif ($this->nom = "Bai") {
            $this->nom = $nom;
            return $this->nom;
            } elseif ($this->nom = "Pie") {
                $this->nom = $nom;
                return $this->nom;
                } elseif ($this->nom = "Grey") {
                    $this->nom = $nom;
                    return $this->nom;
                    } elseif ($this->nom = "White") {
                        $this->nom = $nom;
                        return $this->nom;
    }

 else {
            echo "Merci de choisir entre Alzan, Bai, Pie, Grey, White";
        }
    }
}