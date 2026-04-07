<?php

namespace MVC\Controllers;

use MVC\Models\UserManager;
use MVC\Validator;

/** Class UserController **/
class UserController {
    private $manager;
    private $validator;

    public function __construct() {
        $this->manager = new UserManager();
        $this->validator = new Validator();
    }

    public function showLogin() {
        require VIEWS . 'Auth/login.php';
    }

    public function showRegister() {
        require VIEWS . 'Auth/register.php';
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /auth/login/');
    }

    public function register() {
        $this->validator->validate([
            "username"=>["required", "min:3", "alphaNum"],
            "password"=>["required", "min:6", "alphaNum", "confirm"],
            "passwordConfirm"=>["required", "min:6", "alphaNum"]
        ]);
        $_SESSION['old'] = $_POST;

        if (!$this->validator->errors()) {
            $res = $this->manager->find($_POST["username"]);

            if (empty($res)) {
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $this->manager->store($password);

                $_SESSION["user"] = [
                    "id" => $this->manager->getBdd()->lastInsertId(),
                    "username" => $_POST["username"],
                    "admin" => 0
                ];
                header("Location: /");
            } else {
                $_SESSION["error"]['username'] = "Le username choisi est déjà utilisé !";
                header("Location: /auth/register");
            }
        } else {
            header("Location: /auth/register");
        }
    }

    public function login() {
        $this->validator->validate([
            "username"=>["required", "min:3", "max:9", "alphaNum"],
            "password"=>["required", "min:6", "alphaNum"]
        ]);

        $_SESSION['old'] = $_POST;

        if (!$this->validator->errors()) {
            $res = $this->manager->find($_POST["username"]);

            if ($res && password_verify($_POST['password'], $res->getPassword())) {
                $_SESSION["user"] = [
                    "id" => $res->getId(),
                    "username" => $res->getUsername(),
                    "admin" => $res->getAdmin()
                ];
                header("Location: /");
            } else {
                $_SESSION["error"]['message'] = "Une erreur sur les identifiants";
                header("Location: /auth/login");
            }
        } else {
            header("Location: /auth/login");
        }
    }
}
