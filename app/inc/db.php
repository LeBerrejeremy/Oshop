<?php

$dsn="mysql:host=localhost;dbname=oshopdb";
$login = "explorateur";
$password= "sephirot";

$pdo = new PDO($dsn, $login, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);