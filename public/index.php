<?php


require_once __DIR__."/../app/utils/Database.php";
require_once __DIR__."/../vendor/autoload.php";

require_once __DIR__."/../app/Controller/CoreController.php";
require_once __DIR__."/../app/Controller/MainController.php";
require_once __DIR__."/../app/Controller/catalogController.php";

require_once __DIR__."/../app/models/CoreModel.php";
require_once __DIR__."/../app/models/Product.php";
require_once __DIR__."/../app/models/Category.php";
require_once __DIR__."/../app/models/Brand.php";
require_once __DIR__."/../app/models/Type.php";

$router = new AltoRouter();

//Url avant le /
define("BASE_URI", $_SERVER['BASE_URI']);


//1-Méthode HTTP
//2-URL
//3-Valeur a retourner quand la route correspond
//4-(optionnel) Nom de la route
$router->map( 'GET', '/',                                 [
                                                                "controller" => "MainController",
                                                                "method"     => "home"
                                                            ],
                                        "Page Accueil" );

$router->map( 'GET', '/catalog/category/[i:category_id]',  [
                                                                "controller" => "CatalogController",
                                                                "method"     => "vue",
                                                                "class"      => "category"
                                                            ], 
                                 "Page d'une Category" );

$router->map( 'GET', '/catalog/type/[i:type_id]',      [
                                                                "controller" => "CatalogController",
                                                                "method"     => "vue",
                                                                "class"      => "type"
                                                            ],    
                                      "Page d'un type" );

$router->map( 'GET', '/catalog/product/[i:product_id]',    [
                                                                "controller" => "CatalogController",
                                                                "method"     => "vue",
                                                                "class"      => "product"
                                                            ],
                                    "Page d'un produit" );

$router->map( 'GET', '/catalog/brand/[i:brand_id]',        [
                                                                "controller" => "CatalogController",
                                                                "method"     => "vue",
                                                                "class"      => "brand"
                                                            ],
                                    "Page d'une marque" );

$router->map( 'GET', '/legal-mentions',                    [
                                                                "controller" => "MainController",
                                                                "method"     => "legal"
                                                            ],
                                     "Mentions légales" );

$match = $router->match();

//dump($match);

if( $match === false):
    exit("404 Not found");
endif;


$controllerToUse = $match['target']['controller'];
$controller = new $controllerToUse();

$methodToCall = $match['target']['method'];
$className = $match['target']['class'];

$controller->$methodToCall($className, $match['params']);


