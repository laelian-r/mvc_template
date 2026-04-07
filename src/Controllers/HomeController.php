<?php

namespace MVC\Controllers;

class HomeController
{
    public function __construct()
    {

    }

    public function index()
    {
        require VIEWS . 'App/homepage.php';
    }

}