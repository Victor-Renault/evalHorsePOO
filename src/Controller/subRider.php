<?php

namespace App\Controller;

class subRider extends Equide{

    public static function subRider($capabilitie, $rider, $gameType): string
    {

        // On récupere chaque capabilitie de chacun de ses cheavaux 


        foreach ($rider as $capabilitie) {
            $gameType .= $gameType + $capabilitie;
        }
        return $gameType;
    }
}