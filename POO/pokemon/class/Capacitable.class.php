<?php

trait Capacitable
{
    // propriété
    private Type $type;
    private Attaque $attaque;

    /**
     * Get the value of type
     */ 
    public function getType(): Type
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    private function setType($type): self
    {
        $this->type = $type;

        return $this;
    }
    
    /**
     * Get the value of attaque
     */ 
    public function getAttaque(): Attaque
    {
        return $this->attaque;
    }

    /**
     * Set the value of attaque
     *
     * @return  self
     */ 
    private function setAttaque($attaque): self
    {
        $this->attaque = $attaque;

        return $this;
    }
}