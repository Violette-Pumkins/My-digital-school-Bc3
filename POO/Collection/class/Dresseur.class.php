<?php

    class Dresseur{
        private string $nom;
        private int $age;

        public function __construct(string $nom, int $age) {
            $this->setNom($nom);
            $this->setAge($age);
        }


        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of age
         */ 
        public function getAge()
        {
                return $this->age;
        }

        /**
         * Set the value of age
         *
         * @return  self
         */ 
        public function setAge($age)
        {
                $this->age = $age;

                return $this;
        }

        public function __toString()
        {
            $msg = "Bonjour! Je m'appelle {$this->getNom()} et j'ai {$this->getAge()} ans! \n" ;
            return $msg;
        }
        
    }


?>