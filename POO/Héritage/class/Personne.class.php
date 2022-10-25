<?php

    class Personne {
    
        // Propriétés
        protected const ANONYME = "nom inconnu";
        protected const AGE_INCONNU = 0;
        private string $nom;
        private int $age;
    
        /**
         * @param string $nom
         * @param int $age
         */
        public function __construct(string $nom = self::ANONYME, int $age = self::AGE_INCONNU){
            $this->setNom(strtoupper($nom))
                ->setAge($age);
        }
    
        /**
         * Get the value of nom
         * @return string
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
         * @return integer
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
            if ($age < 0) $this->age = 0;
            else if ($age > 120) $this->age = 120;
            else $this->age = $age;
    
            return $this;
        }
    
        /**
         * @return string
         */
        public function __toString(): string
        {
            $msg = "Je m'appelle {$this->getNom()}";
            ($this->getAge() !== 0) ? $msg .= " et j'ai {$this->getAge()} an" . ($this->getAge() > 1 ? 's' : "") . "\n" : "";
            return $msg;
        }
    }

?>