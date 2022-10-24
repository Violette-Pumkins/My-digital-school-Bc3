<?php
    spl_autoload_register(function ($class){
    include "class/{$class}.class.php";
    });

    echo "index.php chargé \n";

    $romain = new Personne("Romain");
    echo $romain->afficher();
    $romain->setSociete("MDS");
    $romain->afficher();

?>