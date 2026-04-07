<?php
namespace MVC\Models;

/** Class User **/
class User {

    private $username;
    private $password;
    private $id;
    private $admin;

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getId() {
        return $this->id;
    }

    public function getAdmin()
    {
        return $this->admin;
    }
    public function setUsername(String $username) {
        $this->username = $username;
    }

    public function setPassword(String $password) {
        $this->password = $password;
    }

    public function setId() {
        $this->id = uniqid();
    }

    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }
}
