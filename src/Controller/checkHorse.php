<?php

namespace App\Controller;


class checkHorse{

    // on vérifier que la catégory du cheval correspond bien a une des catégory enregistrées, on renvoi un message d'erreur dans le cas contraire

    public function checkHorse(string $nom): string
    {
        if ($this->nom = strpos($nom,$this->category)) {
            $this->nom = $nom;
            return $this->nom;
        }else {
            return false;
            echo "Merci de choisir entre Sheitland, Poney, Horse";

        }
    }
}