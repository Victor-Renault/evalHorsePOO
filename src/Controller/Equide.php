<?php
namespace App\Controller;


abstract class Equide extends Animal
{
    // Propriétés
    protected string $id;
    protected array $color;
    protected int $water;
    protected Rider $rider;
    

    // Constructeur
    
    public function __construct(string $id, array $color = ["Alzan","Bai", "Pie", "Grey", "White"], int $water, Rider $rider)
    {
        $this->setId($id)
            ->setColor($color)
            ->setWater($water)
            ->setRider($rider)
            ;
    }

    /*L'identifiant doit être généré suivant le pattern : 000-n-C-N
Où n est la première lettre du nom
C est la première lettre de la couleur
Et Nest le nombre d'équidés créés au moment de la création de celui-ci.

*/
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

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor(): array
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
    public function setRider($rider): self
    {
        $this->rider = $rider;

        //Affecte un Cavalier au cheval, nous limiterons la possibilités pour un Cavalier d'avoir uniquement 5 Equidés

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
}