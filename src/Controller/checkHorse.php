<?php

namespace App\Controller;

class checkHorse implements InterfaceRace
{

        // on vérifier que la couleur du cheval correspond bien a une des couleurs enregistrées, on renvoi un message d'erreur dans le cas contraire


    public function checkHorse(string $nom): string
    {
        $method = match($nom){
            'Sheitland' => $this->checkHorse($nom),
            'Poney' => $this->checkHorse($nom),
            'Horse' => $this->checkHorse($nom),
            default => throw new \Exception("Merci de choisir entre Sheitland, Poney, Horse")

        };
        return $method;
    }

    }
