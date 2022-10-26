<?php

    abstract class Collection{
        private string $nom_collection;
        /**
         * @var array<Pokemon>
         */
        private array $tabPoke;

        public function __construct( Dresseur $dresseur,string $nom_collection, array $tabPoke) {
            $this->setDresseur($dresseur);
            $this->setNom_collection($nom_collection);
            $this->setTabPoke($tabPoke);
        }
        

        /**
         * Get the value of nom_collection
         */ 
        public function getNom_collection()
        {
                return $this->nom_collection;
        }

        /**
         * Set the value of nom_collection
         *
         * @return  self
         */ 
        public function setNom_collection($nom_collection)
        {
                $this->nom_collection = $nom_collection;

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
        private function setTabPoke($tabPoke)
        {
                $this->tabPoke = $tabPoke;

                return $this;
        }

        public function addPokemon(Pokemon $pokemon): self
        {
            $this->tabPoke[] = $pokemon;
            // $this->setTabPoke($this->getTabPoke()[]= $pokemon);
            return $this;
        }

        public function RemovePokemon(Pokemon $pokemon): self
        {
            //TODO logique remove
        }

        /**
         * Get the value of dresseur
         */ 
        public function getDresseur()
        {
                return $this->dresseur;
        }

        /**
         * Set the value of dresseur
         *
         * @return  self
         */ 
        public function setDresseur($dresseur)
        {
                $this->dresseur = $dresseur;

                return $this;
        }
    }

?>