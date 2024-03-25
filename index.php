<?php  // charge l'autoload de composer 
require "vendor/autoload.php";  
require 'config/Router.php';

$router = new Router();
$router->handleRequest($_GET);

// charge le contenu du .env dans $_ENV 
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); 
$dotenv->load(); 
