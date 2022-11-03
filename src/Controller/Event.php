<?php
namespace App\Controller;


abstract class Event
{
    // Propriétés
    protected int $maxCommitments;
    protected int $maxWater;
    protected Equide $equide;
    private array $tabChevalDeCompeteWow;
    

    // Constructeur
    
    public function __construct(int $maxCommitments, int $maxWater, Equide $equide, array $tabChevalDeCompeteWow = [])
    {
        $this->setMaxCommitments($maxCommitments)
            ->setMaxWater($maxWater)
            ->setEquide($equide)
            ->setTabChevalDeCompeteWow($tabChevalDeCompeteWow)
            ;
    }

    public function subscribeHorse(Equide $equide): self
    {
        $e = array_diff($this->tabChevalDeCompeteWow[],$equide);
        if($e === $this->tabChevalDeCompeteWow){
            $this->tabChevalDeCompeteWow[] = $equide;
            return $this;
        }else{
            echo "votre cheval est deja inscrit";
        }
        $maxwater = $this->maxwater + $this->water;
        if($this->water){
//l'idee c'est de récuperer la somme de la conso, si elle est supp a la capacité max, en empeche l'inscription
        }
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