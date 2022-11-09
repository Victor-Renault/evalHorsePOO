<?php
namespace App\Controller;

use Capabilitie;

abstract class Equide
{

    // Propriétés
    protected string $id;
    protected int $water;
    protected Rider $rider;
    protected Category $category;
    protected Color $color;
    protected Capabilitie $capabilitie;
    private int $tabCheval;
    

    // Constructeur
    
    public function __construct(string $id, int $water, Rider $rider, Category $category, Color $color, int $tabCheval, Capabilitie $capabilitie)
    {
        $this->setId($id)
            ->setWater($water)
            ->setRider($rider)
            ->setCategory($category)
            ->setColor($color)
            ->setTabCheval($tabCheval)
            ->setCapabilitie($capabilitie)
            ;
    }


    /**
     * Get the value of id
     */ 
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id): self
    {        

        $this->id = $id;
        $this->id .= $this->category[0] . '-'; // on prend la premiere lettre du nom
        $this->id .= $this->color[0] . '-'; // la premiere lettre de la couleur
        $this->id .= count($id); // on compte le nombre d'id enregsitré ce qui correspond au nombre de chevaux ajoutés.


        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor(): Color
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of water
     */ 
    public function getWater(): int
    {
        return $this->water;
    }

    /**
     * Set the value of water
     *
     * @return  self
     */ 
    public function setWater($water): self
    {
        $this->water = $water;

        return $this;
    }

    /**
     * Get the value of rider
     */ 
    public function getRider(): Rider
    {
        return $this->rider;
    }

    /**
     * Set the value of rider
     *
     * @return  self
     */ 

     // si le nombre de cheval est supérieur ou égale à 5, on rempeche l'ajout et on renvoi un message 
    //sinon on affecte le rider au cheval et tabCheval prend +1


    public function setRider($rider): self
    {
        if($this->tabCheval>=5){ 
            return false;
            echo"impossible d'ajouter un cheval en plus, vous en avez deja 5";
        }else{
            $this->tabCheval++;
            $this->rider = $rider;
        }
        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    public function __toString(): string
    {
        return "Détail de l'équidé :\n
        Id : {$this->getId()}\n
        Couleur : {$this->getColor()}\n
        Consomation d'eau : {$this->getWater()}\n"
        ;
    }

    /**
     * Get the value of tabCheval
     */ 
    public function getTabCheval(): int
    {
        return $this->tabCheval;
    }

    /**
     * Set the value of tabCheval
     *
     * @return  self
     */ 
    public function setTabCheval($tabCheval): self
    {
        $this->tabCheval = $tabCheval;

        return $this;
    }

    /**
     * Get the value of capabilitie
     */ 
    public function getCapabilitie(): Capabilitie
    {
        return $this->capabilitie;
    }

    /**
     * Set the value of capabilitie
     *
     * @return  self
     */ 

    //on vérifie si la category est un cheval et si celui si est inscrit au poneyGames, si c'est le cas, on renvoi un message d'erreur
    //sinon on set la capability

    public function setCapabilitie($capabilitie): self
    {
        if($this->category = 'Horse'){
            if($capabilitie = 'PoneyGames'){
                return false;
                echo "ta deja vu un cheval au PoneyGames :) ?\n 
                Merci d'inscrire ce cheval à un autre type de compétition";
            }
            else{

                $this->capabilitie = $capabilitie;
            }
        }

        return $this;
    }
}