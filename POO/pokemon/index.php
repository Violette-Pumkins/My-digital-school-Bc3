<?php

spl_autoload_register(function ($class) {
    include "class/{$class}.class.php";
});

$dresseur = new Dresseur("Nicolas", "Syndicaliste", 40);
$pikachu = new Pikachu("Pikachu", 2);
$evoli = new Evoli("Evoli", 0);
$collection = new Collection($dresseur);
$collection->addPokemon($pikachu)
    ->addPokemon($evoli);
// var_dump($dresseur);
var_dump($collection);