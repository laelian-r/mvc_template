<?php
namespace ProjetName\Models;

/** Class Home **/
class Home {
    private $name;

    public function getName() {
        return $this->name;
    }


    public function setName(String $name) {
        $this->name = $name;
    }
}