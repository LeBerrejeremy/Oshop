<?php

require_once __DIR__."./../vendor/autoload.php";
require_once __DIR__."./../app/Controller/MainController.php";

$controller = new MainController();

define("BASE_URI", $_SERVER['BASE_URI']);

if(isset($_GET['_url'])){

//Url après le /
$currentUrl = $_GET['_url'];

}else{

    $currentUrl = '/';
}

$pages = [
    '/'         => 'home',
    '/category' => 'category'
];

dump($pages);

$methodToCall = $pages[$currentUrl];

$controller->$methodToCall();

