<?php

class Circle extends Forme
{
    // Propriétés

    public float $rayon;
    public float $hauteur;
    public const RAYON = 5;
    public const HAUTEUR = 5;


    /**
     * @param float $x
     * @param float $y
     * @param float $rayon
     */
    public function __construct(float $x, float $y, float $rayon = self::RAYON, float $hauteur = self::HAUTEUR)
    {
        parent::__construct($x,$y);
        $this->setRayon($rayon)
            ->setHauteur($hauteur);
    }

    /**
     * Get the value of rayon   
     *  @return float 
     */ 
    public function getRayon(): float
    {
        return $this->rayon;
    }

    /**
     * Set the value of rayon
     *
     * @return  self
     */ 
    public function setRayon($rayon): self
    {
        $this->rayon = $rayon;

        return $this;
    }

    /**
     * Get the value of hauteur
     * @return float
     */ 
    public function getHauteur(): float
    {
        return $this->hauteur;
    }

    /**
     * Set the value of hauteur
     *
     * @return  self
     */ 
    public function setHauteur($hauteur): self
    {
        $this->hauteur = $hauteur;

        return $this;
    }
    /**
     * @return string
     */
    public function __toString(): string
    {
        $msg = "coordonnées du cercle: {$this->getX()}, {$this->getY()},
         rayon de: {$this->getRayon()}m,
         diametre de: " . ($this->getRayon()) *2 . " m,
         périmetre: " . pi() * 2 * ($this->getRayon()) . " m,
         air de: " . ($this->getRayon()) * ($this->getRayon()) * pi() . " m2,
         volume de: ". pi() * ($this->getRayon()) * ($this->getRayon()) * ($this->getHauteur()) . " m3";

        return $msg;
        
    }
    

}