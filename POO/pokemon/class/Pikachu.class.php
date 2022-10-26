<?php

class Pikachu extends Pokemon
{
    use Capacitable;

    public function __construct(string $nom, int $niveau)
    {
        parent::__construct($nom, $niveau);
        $this->setType(new Electrique())
            ->setAttaque(new Balls());
    }
}