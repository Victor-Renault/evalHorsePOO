<?php
namespace App\Controller;


abstract class Event
{
    // Propriétés
    protected int $maxCommitments;
    protected int $maxWater;
    protected Equide $equide;
    private array $tabChevalDeCompeteWow;
    private int $actualWater;
    

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
        // On compare nos 2 tableaux, si la fonction ne retourne rien, le cheval n'est pas inscrit, sinon on renvoit un message d'erreur

        $e = array_diff($this->tabChevalDeCompeteWow[],$equide);
        if($e === $this->tabChevalDeCompeteWow){
            $this->tabChevalDeCompeteWow[] = $equide;
            return $this;
        }else{
            return false;
            echo "votre cheval est deja inscrit";
        }
        // On ajoute la consommation d'eau du cheval a la consommation total des chevaux deja inscrit
        // Si cette valeur est supérieur a la capacité maximum d'approvisionnement en eau du haras, on renvoit un messag d'erreur

        $this->actualWater = $this->actualWater + $this->water;
        if($this->actualWater > $this->maxWater){
            return false;
            echo " le haras est dans l'inscapacité d'approvisionner l'eau nécéssaire à votre cheval, merci de votre compréhension"; 
        }
        return $this;
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