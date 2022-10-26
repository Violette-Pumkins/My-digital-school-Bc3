<?php

spl_autoload_register(function ($class){
    include "class/{$class}.class.php";
    });
 $theo = new Dresseur("Pierre", "15");
 echo $theo;

 $pikachu = new Pokemon("nicolas", 34, "picafeu");
 echo $pikachu;
 $pikachu2 = new Pikachu("Pilou", 35);
 echo $pikachu2;

 

?>