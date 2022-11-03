<?php

class Citadine extends Vehicule{
    private int $autonomie;


    public function __construct(int $autonomie, string $marque, string $modele, int $distance, $id) {
        parent::__construct($marque, $distance, $modele, $id);
        $this->setAutonomie($autonomie);
        parent::rouler($distance);
    }   
    
    /**
     * Get the value of autonomie
     */ 
    public function getAutonomie(): int
    {
        return $this->autonomie;
    }

    /**
     * Set the value of autonomie
     *
     * @return  self
     */ 
    public function setAutonomie($autonomie): self
    {
        $this->autonomie = $autonomie;

        return $this;
    }

    public function __toString(): string
    {
        $msg = "Je suis une {$this->getMarque()} - {$this->getModele()} . Mon immatriculation est le {$this->getId()} et j'ai {$this->getAutonomie()} km d'autonomie";
        return $msg;

    }
}