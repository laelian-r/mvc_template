<?php
namespace App\Controllers;

use App\Models\HomeManager;
use App\Validator;

class HomeController {
    private $manager;

    public function __construct() {
        $this->manager = new HomeManager();
    }

    public function index() {
        require VIEWS . 'App/homepage.php';
    }

    public function viewLink() {
        // $data = $this->manager->all();
        require VIEWS . 'App/link.php';
    }
}