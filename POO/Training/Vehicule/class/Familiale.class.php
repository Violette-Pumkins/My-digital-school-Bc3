<?php

class Familiale extends Vehicule{
    private int $nbPassMax;
    private string $marque;
    private string $modele;
    private int $id;

    public function __construct(int $nbPassMax, string $marque, string $modele, int $distance, int $id) {
        $this->setNbPassMax($nbPassMax);
        parent::__construct($marque, $modele, $distance, $id);
        parent::rouler($distance);
    }
    /**
     * Fonction rouler
     */
    public function rouler($dist)
    {
        for ($i = 1; $i <= 120000; $i+=30000) {
            echo $i;
        }
    }

    /**
     * Get the value of nbPassMax
     */ 
    public function getNbPassMax(): int
    {
    return $this->nbPassMax;
    }

    /**
     * Set the value of nbPassMax
     *
     * @return  self
     */ 
    public function setNbPassMax($nbPassMax): self
    {
    $this->nbPassMax = $nbPassMax;

    return $this;
    }

    public function __toString(): string
    {
        $msg = "Je suis une {$this->getMarque()} - {$this->getModele()} . Mon immatriculation est le {$this->getId()} te je peux prendre {$this->getNbPassMax()} passage";
        return $msg;

    }
}