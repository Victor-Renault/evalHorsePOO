<?php
namespace App\Controller;


abstract class event
{
    // Propriétés
    protected int $maxCommitments;
    protected int $maxWater;
    

    // Constructeur
    
    public function __construct(int $maxCommitments, int $maxWater)
    {
        $this->setMaxCommitments($maxCommitments)
            ->setMaxWater($maxWater)

            ;
    }


    /**
     * Get the value of maxCommitments
     */ 
    public function getMaxCommitments(): int
    {
        return $this->maxCommitments;
    }

    /**
     * Set the value of maxCommitments
     *
     * @return  self
     */ 
    public function setMaxCommitments($maxCommitments): self
    {
        $this->maxCommitments = $maxCommitments;

        return $this;
    }

    /**
     * Get the value of maxWater
     */ 
    public function getMaxWater(): int
    {
        return $this->maxWater;
    }

    /**
     * Set the value of maxWater
     *
     * @return  self
     */ 
    public function setMaxWater($maxWater): self
    {
        $this->maxWater = $maxWater;

        return $this;
    }

    public function subscribeHorse()
    {
        //Il n'est pas possible d'inscrire deux fois un même cheval pour un événement donné.
        //Suite aux restrictions écologiques l'évènement est limité dans sa capacité d'eau. Pensez bien à vérifier ce que chaque équidé consomme.
    }

    public function __toString(): string
    {
        return "Détail de l'évenement :\n
        Nombre max de participant : {$this->getMaxCommitments()}\n
        Quantié d'eau max : {$this->getMaxWater()}\n"
        ;
    }
}