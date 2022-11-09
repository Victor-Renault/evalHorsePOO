<?php
namespace App\Controller;

abstract class Equide
{
    use checkRider;

    // Propriétés
    protected string $id;
    protected int $water;
    protected Rider $rider;
    protected Category $category;
    protected Color $color;
    protected Capability $capability;
    protected int $tabCheval;
    

    // Constructeur
    
    public function __construct(string $id, int $water, Rider $rider, Category $category, int $tabCheval, Capability $capability, Color $color)
    {
        $this->setId($id)
            ->setWater($water)
            ->setRider($rider)
            ->setCategory($category)
            ->setTabCheval($tabCheval)
            ->setCapability($capability)
            ->setColor($color)
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
        $this->id .= count($id); // on compte le nombre d'id enregsitré ce qui correspond au nombre de chevaux ajoutés au moment de l'ajout du cheval.


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


    public function setRider($rider): self
    {
        checkRider::checkRider($this->rider);
        $this->rider = $rider;
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
     * Get the value of capability
     */ 
    public function getCapability(): Capability
    {
        return $this->capability;
    }

    /**
     * Set the value of capability
     *
     * @return  self
     */ 

    public function setCapability($capability): self
    {
        $this->capability = $capability;
        return $this;
        
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}