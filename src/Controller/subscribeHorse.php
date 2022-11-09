<?php

namespace App\Controller;

class subscribeHorse extends Event{


    public function subscribeHorse(Equide $equide): string
    {
        // On compare nos 2 tableaux, si la fonction ne retourne rien, le cheval n'est pas inscrit, sinon on renvoit un message d'erreur

        $e = array_diff($this->tabChevalDeCompeteWow[],$equide);
        if($e === $this->tabChevalDeCompeteWow){
            $this->tabChevalDeCompeteWow[] = $equide;
            return $this;
        }else{
            throw new \Exception("votre cheval est deja inscrit");

        }
        // On ajoute la consommation d'eau du cheval a la consommation total des chevaux deja inscrit
        // Si cette valeur est supérieur a la capacité maximum d'approvisionnement en eau du haras, on renvoit un messag d'erreur

        $this->actualWater = $this->actualWater + $this->water;
        if($this->actualWater > $this->maxWater){
            throw new \Exception(" le haras est dans l'inscapacité d'approvisionner l'eau nécéssaire à votre cheval, merci de votre compréhension");
        }

        $this->tabChevalDeCompeteWow .= $equide;

        return $this;
    }
}