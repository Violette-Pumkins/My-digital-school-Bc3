<?php
    class Salarie extends Personne{


        private string $societe;


        /**
         * 
         * @param string $societe
         */
        public function __construct(string $societe, string $nom = parent::ANONYME, int $age = parent::AGE_INCONNU){
            parent::__construct($nom, $age);
            $this->setSocieteSalarie($societe);
        }
        public function setSocieteSalarie($societe)
        {
            $this->societe = $societe;
        }

        public function getsocieteSalarie():string
        {
            return $this->societe;
        }

        public function __toString(): string
        {
            // return "je travaille chez {$this->getsocieteSalarie()} \n";
            return parent::__toString() . ", je travaille chez {$this->getsocieteSalarie()} \n";
        }
        

    }


?>