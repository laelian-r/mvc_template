<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

$router = new ProjetName\Router($_SERVER["REQUEST_URI"]);
$router->get('/', "HomeController@index");
$router->get('/lien/', "HomeController@viewLink");

$router->run();