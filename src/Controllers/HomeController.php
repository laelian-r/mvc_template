<?php
namespace ProjetName\Controllers;

use ProjetName\Models\HomeManager;
use ProjetName\Validator;

class HomeController {
    private $manager;

    public function __construct() {
        $this->manager = new HomeManager();
    }

    public function index() {
        require VIEWS . 'ProjetName/homepage.php';
    }

    public function viewLink() {
        // $data = $this->manager->all();
        require VIEWS . 'ProjetName/link.php';
    }
}