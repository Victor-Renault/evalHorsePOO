<?php

namespace App\Controller;

class subRider extends Equide{

    public function subRider($capabilitie, $rider, $gameType){

        // On récupere chaque capabilitie de chacun de ses cheavaux 


        foreach ($rider as $capabilitie) {
            $gameType .= $gameType + $capabilitie;
        }
        return $gameType;
    }
}