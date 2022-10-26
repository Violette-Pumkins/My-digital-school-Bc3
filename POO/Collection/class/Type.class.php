<?php
    abstract class Type extends Pokemon{
        protected string $nomtype;

        public function __construct($nomtype, $nom, $niveau, $attack) {

            parent::__construct($nom, $niveau, $attack);
            $this->nomtype = $nomtype;
        }
        

        /**
         * Get the value of nomtype
         */ 
        public function getNomType()
        {
                return $this->nomtype;
        }

        /**
         * Set the value of nomtype
         *
         * @return  self
         */ 
        protected function setNomType($nomtype)
        {
                $this->nomtype = $nomtype;

                return $this;
        }

        public function __toString()
        {
            $msg = "Bonjour! Je m'appelle {$this->getNom()} , je suis niveau {$this->getNiveau()}. \n" ;
            return $msg;
        }
    }



?>