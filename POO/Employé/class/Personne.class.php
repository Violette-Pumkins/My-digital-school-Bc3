<?php

class Personne
{
    private const PAS_DE_SOCIETE = "?";
    private $nom;
    private ?string $societe=null;
    private static $effectif = 0;

        public function __construct(string $nom, string $societe = self::PAS_DE_SOCIETE){
            $this->setNom($nom);
            $this->setSociete($societe);
            self::$effectif++;
        }
        /**
         *
         *
         * @return $str
         */
        public function afficher(){
            return $this->__toString();
        }
        /**
         * set societe's value
         * @param string $societe
         * @return self
         */
        public function setSociete($societe)
        {
            if($this->isEmployed)
            {
                echo "ERREUR - Vous devez d'abord quitter votre société ou vous faire virer. \n";
            }
            if ($this->isSocieteValidee($societe)) {
                $this->societe=$societe;
                echo "OK";
            }
            else{
                $this->societe = $societe;
                echo "Erreur - Nom de société refusée car le nom est de plus de 30 caractères \n";
            }
            return $this;
        }
        /**
         * set name's value
         *
         * @param string $nom
         * @return self
         */
        public function setNom ($nom)
        {
            $this->nom = $nom;
            return $this;
        }
        /**
         * @return integer
         */
        public static function getEffectif(): int
        {
            return self::$effectif;
        }
        public function getSociete(): string
        {
            return $this->societe;

        }
        public function isEmployed(): bool
        {
            return $this->getSociete !== self::PAS_DE_SOCIETE; 
        }
        private function isSocieteValidee(string $societe): bool
        {
            if(strlen($societe)> 30 || $societe !== strtoupper($societe)){
                return false;
            }
            else{
                return true;
            }
        }

        /**
         * convertit en string
         *
         * @return string
         */
        public function __toString(): string
        {
            echo "Je m'appelle {$this->nom} \n";
            if($this->getSociete === self::PAS_DE_SOCIETE){
                $str = "Je galère. Cheh! \n";
            }
            else{
                $str = "et je travaille chez {$this->societe} \n";
            }
            $str = "L'effectif est de {$this->getEffectif()} \n";

            return $str;
        }
        public function quitterSociete(){
            if ($this->isEmployed()) {
                $this->setSociete(self::PAS_DE_SOCIETE);
                echo "OK vous êtes employé \n";
            } 
            else{
                echo "Erreur - Vous n'êtes pas salarié \n";
            }
            return $this;
        }

    }
?>