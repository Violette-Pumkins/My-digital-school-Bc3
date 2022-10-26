<?php
        class pokemon{

        private string $nom;
        private int $niveau;

        public function  __construct(string $nom, int $niveau) {
            $this->setNom($nom);
            $this->setNiveau($niveau);

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

        public function __toString()
        {
            $msg = "Bonjour! Je m'appelle {$this->getNom()} , je suis niveau {$this->getNiveau()}. \n" ;
            return $msg;
        }

    }



?>