<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

$router = new MVC\Router($_SERVER["REQUEST_URI"]);
$router->get('/', "HomeController@index");
$router->get('/auth/login/', "UserController@showLogin");
$router->get('/auth/register/', "UserController@showRegister");
$router->get('/auth/logout/', "UserController@logout");

$router->post('/auth/login/', "UserController@login");
$router->post('/auth/register/', "UserController@register");

$router->run();
