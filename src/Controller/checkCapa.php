<?php

namespace App\Controller;

class checkCapa{

    //on vérifie si la category est un cheval et si celui si est inscrit au poneyGames, si c'est le cas, on renvoi un message d'erreur
    //sinon on set la capability

    public function checkCapa($capabilitie){
        if($this->category = 'Horse'){
            if($capabilitie = 'PoneyGames'){
                return false;
                echo "ta deja vu un cheval au PoneyGames :) ?\n 
                Merci d'inscrire ce cheval à un autre type de compétition";
            }
            else{

                $this->capabilitie = $capabilitie;
                return $this;
            }
        }
    }
}