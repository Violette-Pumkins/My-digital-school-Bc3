<?php

spl_autoload_register(function ($class) {
    include "class/{$class}.class.php";
});

// echo "Création de Maxime, 22 ans\n";
// $maxime = new Personne("Maxime", 22);
// echo $maxime;
// echo "Création de Violette, 1 an\n";
// $violette = new Personne("Violette", 1);
// echo $violette;

// $theo = new Salarie("Mydigital", "théo", 25 );
// echo $theo;

