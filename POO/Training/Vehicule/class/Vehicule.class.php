<?php

abstract class Vehicule{
    private string $marque;
    private string $modele;
    private int $distance;
    private int $id;


    public function __construct(string $marque, string $modele, int $distance, int $id) {
        $this->setMarque($marque);
        $this->setModele($modele);
        $this->setDistance($distance);
        $this->setId($id);
    }

    /**
     * Get the value of marque
     */ 
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque($marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of modele
     */ 
    public function getModele(): string
    {
        return $this->modele;
    }

    /**
     * Set the value of modele
     *
     * @return  self
     */ 
    public function setModele($modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId(): int
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
     * Fonction rouler
     */
    public function rouler($dist)
    {
        for ($i = 1; $i <= 120000; $i+=5000) {
            echo $i;
        }
    }


    /**
     * Get the value of distance
     */ 
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set the value of distance
     *
     * @return  self
     */ 
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }
}