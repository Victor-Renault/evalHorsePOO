<?php
namespace App\Controller;


class Capabilitie
{
    // Propriétés

protected array $capacite;


    /**
     * @param string $societe
     */
    public function __construct(array $capacite = ["Saut","Dressage","Cross","PoneyGames"])
    {
        $this->setCapacite($capacite);
    }


/**
 * Get the value of capcite
 */ 
public function getCapacite(): array
{
return $this->capacite;
}

/**
 * Set the value of capcite
 *
 * @return  self
 */ 
public function setCapacite($capacite): self
{
$this->capacite = $capacite;

// Attention les chevaux ne peuvent pas participer aux PoneyGames

return $this;
}



    /**
     * @return string
     */
    public function __toString(): string
    {
        return "Détail de la(les) capacité(s) :\n
        Nom : {$this->getCapacite()}\n
        ";
    }
}