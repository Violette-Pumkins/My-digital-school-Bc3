<?php


 class Carre extends Rectangle{

    use Imprimable;
    //propriétés
    //contructeur
    public function __construct(float$x = 0, float $y = 0, float $cote = 0){
        parent::__construct($x, $y, $cote, $cote);
    }

    public function __toString(): string
    {
        $msg = "coordonées (x,y) : {$this->getX()}, {$this->getY()} \n";
        $msg .= "Côté : {$this->longeur}";
        $msg .= "Superficie : {$this->surface}";
        return $msg;

    }

    public function getsurface(): float
    {
        return round($this->getLargeur()* $this->getLongeur(), 2);
    }

    public function impression()
    {
        echo "Réédition d'impression";
    }


 }

?>