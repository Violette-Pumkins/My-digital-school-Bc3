<?php

class Utilitaire extends Vehicule{
    private int $charge;


    public function __construct(int $charge, string $marque, string $modele, int $distance, int $id) {
        $this->setCharge($charge);
        parent::__construct($marque, $modele, $distance, $id);
        parent::rouler($distance);
    }

    /**
     * Get the value of charge
     */ 
    public function getCharge(): int
    {
        return $this->charge;
    }

    /**
     * Set the value of charge
     *
     * @return  self
     */ 
    public function setCharge($charge): self
    {
        $this->charge = $charge;

        return $this;
    }

    public function __toString(): string
    {
        $msg = "Je suis une {$this->getMarque()} - {$this->getModele()} . Mon immatriculation est le {$this->getId()} et je peux porter {$this->getCharge()}Kg ";
        return $msg;

    }
}