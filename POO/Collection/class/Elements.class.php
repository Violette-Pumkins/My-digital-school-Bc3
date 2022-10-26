<?php
    class Elements extends Race{

        private string $element;

        public function __construct($element,$nomtype, $nom, $niveau, $attack) {
            parent::__construct($nomtype, $nom, $niveau, $attack);
            $this->setElement($element);
        }

        /**
         * Get the value of element
         */ 
        public function getElement()
        {
                return $this->element;
        }

        /**
         * Set the value of element
         *
         * @return  self
         */ 
        public function setElement($element)
        {
                $this->element = $element;

                return $this;
        }
    }

?>