<?php

class Rectangle extends Forme implements Peinturlurable
{
    // Propriétés

    public float $largeur;
    public float $longeur;
    public float $profondeur;
    public string $couleur;


    /**
     * @param float $x
     * @param float $y
     * @param float $longeur
     * @param float $largeur
     * @param float $profondeur
     */
    public function __construct(float $x = 0, float $y = 0, float $longeur = 0, float $largeur = 0, float $profondeur = 0)
    {
        parent::__construct($x,$y);
        $this->setlargeur($longeur)
        ->setProfondeur($profondeur)
            ->setlongeur($largeur);
    }

    /**
     * Get the value of largeur   
     *  @return float 
     */ 
    public function getLargeur(): float
    {
        return $this->largeur;
    }

    /**
     * Set the value of largeur
     *
     * @return  self
     */ 
    public function setlargeur($largeur): self
    {
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get the value of longeur
     * @return float
     */ 
    public function getlongeur(): float
    {
        return $this->longeur;
    }

    /**
     * Set the value of longeur
     *
     * @return  self
     */ 
    public function setlongeur($longeur): self
    {
        $this->longeur = $longeur;

        return $this;
    }
    /**
     * @return string
     */
    public function __toString(): string
    {
        $msg = "coordonnées du rectangle: {$this->getX()}, {$this->getY()},
         largeur de: {$this->getlargeur()}m,
         longeur de: {$this->getlongeur()}m,
         diagonal de: " . sqrt(($this->getlargeur())**2 + ($this->getlongeur())**2) . "m,
         périmetre: " .  ($this->getlongeur()) * 2 + ($this->getlargeur()) *2 . "m,
         air de: " . ($this->getlargeur()) * ($this->getlongeur()). "m2,
         volume de: ". ($this->getlongeur()) * ($this->getlargeur()) * ($this->getProfondeur()) . "m3"
         ;
        if ($this->getlargeur() === $this->getlongeur()) {
            if ($this->getlargeur() === $this->getprofondeur()) {
                $msg .= "\n\nps: c'est un cube :)";
            }else{
                $msg .= "\n\nps: c'est un carre";
            }
        }else{
            $msg.= "\n\n c'est un joli rectangle \n";
        }
        return $msg;
        
    }
    


    /**
     * Get the value of profondeur
     * @return float
     */ 
    public function getProfondeur(): float
    {
        return $this->profondeur;
    }

    /**
     * Set the value of profondeur
     *
     * @return  self
     */ 
    public function setProfondeur($profondeur): self
    {
        $this->profondeur = $profondeur;

        return $this;
    }

    public function colorier(string $souleur): void
    {
        $this->setCouleur($souleur);
    }

    /**
     * Get the value of couleur
     */ 
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */ 
    public function setCouleur($couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }
}