<?php

abstract class Pokemon
{
    // Propriétés
    private string $nom;
    private int $niveau;

    // Constructeur
    public function __construct(string $nom, int $niveau)
    {
        $this->setNom($nom)
            ->setNiveau($niveau);
    }

    /**
     * Get the value of nom
     */ 
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    private function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of niveau
     */ 
    public function getNiveau(): int
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    private function setNiveau($niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }
}