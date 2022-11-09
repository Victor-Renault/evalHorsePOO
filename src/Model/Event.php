<?php
namespace App\Controller;


abstract class Event
{
    // Propriétés
    protected int $maxCommitments;
    protected int $maxWater;
    protected Equide $equide;
    protected array $tabChevalDeCompeteWow;
    protected int $actualWater;
    

    // Constructeur
    
    public function __construct(int $maxCommitments, int $maxWater, Equide $equide, array $tabChevalDeCompeteWow = [])
    {
        $this->setMaxCommitments($maxCommitments)
            ->setMaxWater($maxWater)
            ->setEquide($equide)
            ->setTabChevalDeCompeteWow($tabChevalDeCompeteWow)
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


    public function __toString(): string
    {
        return "Détail de l'évenement :\n
        Nombre max de participant : {$this->getMaxCommitments()}\n
        Quantié d'eau max : {$this->getMaxWater()}\n"
        ;
    }

    /**
     * Get the value of equide
     */ 
    public function getEquide()
    {
        return $this->equide;
    }

    /**
     * Set the value of equide
     *
     * @return  self
     */ 
    public function setEquide($equide)
    {
        $this->equide = $equide;

        return $this;
    }

    /**
     * Get the value of tabChevalDeCompeteWow
     */ 
    public function getTabChevalDeCompeteWow()
    {
        return $this->tabChevalDeCompeteWow;
    }

    /**
     * Set the value of tabChevalDeCompeteWow
     *
     * @return  self
     */ 
    public function setTabChevalDeCompeteWow($tabChevalDeCompeteWow)
    {
        $this->tabChevalDeCompeteWow = $tabChevalDeCompeteWow;

        return $this;
    }
}