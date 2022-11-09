<?php

namespace App\Controller;

abstract class Color extends Equide
{

    use checkColor;
    // Propriétés

    protected string $nomColorColor;

    public function __construct(string $nomColor)
    {
        $this->setnomColor($nomColor);
        
    }

    /**
     * Get the value of nomColor
     */
    public function getnomColor(): string
    {
        return $this->nomColor;
    }

    /**
     * Set the value of nomColor
     *
     * @return  self
     */


    protected function setnomColor($nomColor): self
    {

        checkColor::Color($nomColor);
        $this->nomColor = $nomColor;
        return $this;
        

    }

    
}