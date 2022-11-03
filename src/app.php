<?php

// Autoloading, pas besoin de require partout pour charger nos classes et chargement
// automatique de nos librairies
require_once('../vendor/autoload.php');

// Définitions de chemins utiles dans l'application
define('TEMPLATES_DIR', __DIR__ . '/../templates/');
define('SRC_DIR', __DIR__ . '/');
define('PUBLIC_DIR', __DIR__ . '/../public/');


$categorie = new ("Manager");
$categorie = new ("Saut");
/*
$collection = new Collection($dresseur);
$collection->addPokemon($pikachu)
    ->addPokemon($evoli);
// var_dump($dresseur);
var_dump($collection);

*/