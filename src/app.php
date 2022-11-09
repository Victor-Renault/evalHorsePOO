<?php

// Autoloading, pas besoin de require partout pour charger nos classes et chargement
// automatique de nos librairies
require_once __DIR__ . '/../vendor/autoload.php';

// Définitions de chemins utiles dans l'application

define('TEMPLATES_DIR', __DIR__ . '/../templates/');
define('SRC_DIR', __DIR__ . '/');
define('PUBLIC_DIR', __DIR__ . '/../public/');

use App\Controller\Ecurie;
use App\Controller\Manager;
use App\Controller\Categorie;

$categorie = new Categorie("Categ 1");
$manager = new Manager("Mana 1", "Madr 1", "1 rue du test M", 14001, "strasbourg", $categorie);
$ecurie = new Ecurie("Ecu 1", "Eadr 1", "1 rue du test E", 14000, "caen", $manager);

/*
$dresseur = new Dresseur("Nicolas", "Syndicaliste", 40);
$pikachu = new Pikachu("Pikachu", 2);
$evoli = new Evoli("Evoli", 0);
$collection = new Collection($dresseur);
$collection->addPokemon($pikachu)
    ->addPokemon($evoli);
// var_dump($dresseur);
var_dump($collection);

string $nom, string $adresse, string $street, string $postCode, string $city, Manager $manager

*/