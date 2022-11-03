<?php

class Dresseur 
{
    // Propriétés
    private string $nom;
    private string $profession;
    private int $age;

    // Constructeur
    public function __construct(string $nom, string $profession, int $age)
    {
        $this->setAge($age)
            ->setNom($nom)
            ->setProfession($profession);
    }

    

    /**
     * Get the value of profession
     */ 
    public function getProfession(): string
    {
        return $this->profession;
    }

    /**
     * Set the value of profession
     *
     * @return  self
     */ 
    private function setProfession($profession): self
    {
        $this->profession = $profession;

        return $this;
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
     * Get the value of age
     */ 
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    private function setAge($age): self
    {
        $this->age = $age;

        return $this;
    }

    public function __toString(): string
    {
        return "Détail du dresseur :\n
        Nom : {$this->getNom()}\n
        Age : {$this->getAge()}\n
        Profession : {$this->getProfession()}\n";
    }
}