<?php

namespace App\Controller;

class checkColor{

        // on vérifier que la couleur du cheval correspond bien a une des couleurs enregistrées, on renvoi un message d'erreur dans le cas contraire


    public function checkColor(string $nom): string
    {
        if ($this->nom = strpos($nom,$this->color)) {
            $this->nom = $nom;
            return $this->nom;
        }
    
     else {
        return false;
                echo "Merci de choisir entre Alzan, Bai, Pie, Grey, White";
            }
    }
}