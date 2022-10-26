<?php

    trait Capacitable
    {
        private Attaque $attaque;
        private Type $type;

        /**
         * Get the value of type
         */ 
        public function getType()
        {
                return $this->type;
        }

        /**
         * Set the value of type
         *
         * @return  self
         */ 
        public function setType($type)
        {
                $this->type = $type;

                return $this;
        }



        /**
         * Get the value of attaque
         */ 
        public function getAttaque()
        {
                return $this->attaque;
        }

        /**
         * Set the value of attaque
         *
         * @return  self
         */ 
        public function setAttaque($attaque)
        {
                $this->attaque = $attaque;

                return $this;
        }
    }
