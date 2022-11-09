<?php

namespace App\Controller;

class checkColor implements InterfaceColor
{

        // on vérifier que la couleur du cheval correspond bien a une des couleurs enregistrées, on renvoi un message d'erreur dans le cas contraire


    public function color(string $color): string
    {
        $method = match($color){
            'Grey' => $this->color($color),
            'White' => $this->color($color),
            'ALzan' => $this->color($color),
            'Bai' => $this->color($color),
            'Pie' => $this->color($color),
            default => throw new \Exception("Merci de choisir entre Alzan, Bai, Pie, Grey, White")

        };
        return $method;
    }

    }
