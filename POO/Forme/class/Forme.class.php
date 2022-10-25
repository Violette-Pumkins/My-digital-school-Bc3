<?php

abstract class Forme{

    // Propriétés

    public float $y;
    public float $x;


    public function __construct(float $x = 0, float $y = 0)
    {
        $this->setX($x)
            ->setY($y);
    }
    /**
     * Get the value of x
     * @return float
     */ 
    public function getX(): float
    {
        return $this->x;
    }

    /**
     * Set the value of x
     *
     * @return  self
     */ 
    public function setX($x): self
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get the value of y
     * @return float
     */ 
    public function getY(): float
    {
        return $this->y;
    }

    /**
     * Set the value of y
     *
     * @return  self
     */ 
    public function setY($y): self
    {
        $this->y = $y;

        return $this;
    }
}

?>