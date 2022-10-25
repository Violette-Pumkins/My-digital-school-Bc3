<?php // cercle définis par origine et rayon, coordonées. x et y, rayons get/set pour tout
// class cercle diametre et surface get diam et get surf.
// 
spl_autoload_register(function ($class) {
    include "class/{$class}.class.php";
});

$cercle = new Cercle(10, 12, 15);
echo $cercle;
?>