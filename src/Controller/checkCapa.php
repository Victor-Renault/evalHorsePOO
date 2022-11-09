<?php

namespace App\Controller;

class checkCapa implements InterfaceCapabilitie
{

    //on vérifie si la category est un cheval et si celui si est inscrit au poneyGames, si c'est le cas, on renvoi un message d'erreur
    //sinon on set la nom

    public function checkCapa(string $nom)
    {        
        if($this->category = 'Horse'){
            if($nom = 'PoneyGames'){
                throw new \Exception("Un cheval ne peut pas s'inscrir au Poneygames");
            }
            else{

                $this->nom = $nom;
                return $this;
            }
        }
    }
}