<?php

class Collection
{
    // Propriétés
    /**
     * @var array<Pokemon>
     */
    private array $tabPoke;
    private Dresseur $dresseur;

    // Constructeur
    public function __construct(Dresseur $dresseur, array $tabPoke = []){
        $this->setTabPoke($tabPoke)
            ->setDresseur($dresseur);
    }

    public function addPokemon(Pokemon $pokemon): self
    {
        $this->tabPoke[] = $pokemon;
        // $this->setTabPoke($this->getTabPoke()[] = $pokemon);

        return $this;
    }

    public function removePokemon(Pokemon $pokemon): self
    {
        // TODO logique remove
        return $this;
    }

    /**
     * Get the value of tabPoke
     */ 
    public function getTabPoke(): array
    {
        return $this->tabPoke;
    }

    /**
     * Set the value of tabPoke
     *
     * @return  self
     */ 
    private function setTabPoke($tabPoke): self
    {
        $this->tabPoke = $tabPoke;

        return $this;
    }

    /**
     * Get the value of dresseur
     */ 
    public function getDresseur(): Dresseur
    {
        return $this->dresseur;
    }

    /**
     * Set the value of dresseur
     *
     * @return  self
     */ 
    private function setDresseur($dresseur): self
    {
        $this->dresseur = $dresseur;

        return $this;
    }
}