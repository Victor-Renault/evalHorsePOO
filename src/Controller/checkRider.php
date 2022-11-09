<?php

namespace App\Controller;

class checkRider
{
    public function checkRider(string $rider)
    {

        // si le nombre de cheval est supérieur ou égale à 5, on rempeche l'ajout et on renvoi un message 
    //sinon on affecte le rider au cheval et tabCheval prend +1
        
        if ($this->tabCheval>=5) {
            throw new \Exception("impossible d'ajouter un cheval en plus, vous en avez deja 5");

        } else {
            $this->tabCheval++;
            $this->rider = $rider;
            return $this;
        }
    }
}