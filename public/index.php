<?php

require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/../app/Controller/MainController.php";


$router = new AltoRouter();
$controller = new MainController();

//Url avant le /
define("BASE_URI", $_SERVER['BASE_URI']);

//1-Méthode HTTP
//2-URL
//3-Valeur a retourner quand la route correspond
//4-(optionnel) Nom de la route
$router->map( 'GET', '/', 'home', 'home' );
$router->map( 'GET', '/category', 'category' );

$match = $router->match();

dump($match);


$methodToCall = $match['target'];

$controller->$methodToCall();


