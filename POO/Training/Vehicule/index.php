<?php

spl_autoload_register(function ($class) {
    include "class/{$class}.class.php";
});

// $v1 = new Vehicule("renault" , "megane" , 12345);
// echo $v1;
$v2 = new Citadine(359, "renault" , "twingo" , 12345);
echo $v2;