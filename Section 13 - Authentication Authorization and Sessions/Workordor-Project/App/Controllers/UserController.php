<?php

namespace App\Controllers;

use Framework\Database;
use Framework\Validation;
use Framework\Session;

class UserController
{
    protected $db;

    public function __construct()
    {
        $config = require basePath("config/db.php");
        $this->db = new Database($config);
    }

    /**
     * Show the login page
     * 
     * @return void
     */
    public function login()
    {
        loadView("users/login");
    }

    /**
     * Show the register page
     * 
     * @return void
     */
    public function create()
    {
        loadView("users/create");
    }

    /**
     * Store user in database
     * 
     * @return void
     */
    public function store()
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $password = $_POST["password"];
        $passwordConfirmation = $_POST["password_confirmation"];

        $errors = [];

        // Validation
        if (!Validation::string($name, $min = 2, $max = 50)) {
            $errors["name"] = "Name must be between {$min} and {$max} characters";
        }

        if (!Validation::email($email)) {
            $errors["email"] = "Please enter a valid email address";
        }

        if (!Validation::string($password, $min = 6, $max = 30)) {
            $errors["password"] = "Password must be between {$min} and {$max} characters";
        }

        if (!Validation::match($password, $passwordConfirmation)) {
            $errors["password_confirmation"] = "Passwords do not match";
        }

        if (!empty($errors)) {
            loadView("users/create", [
                "errors" => $errors,
                "user" => [
                    "name" => $name,
                    "email" => $email,
                    "city" => $city,
                    "state" => $state,
                ],
            ]);

            exit;
        }

        // Check if email exists
        $params = [
            "email" => $email,
        ];

        $userEmailQuery = $this->db->query("SELECT * FROM users WHERE email = :email;", $params)->fetch();

        if ($userEmailQuery) {
            $errors["email"] = "That email already exists";

            loadView("users/create", [
                "errors" => $errors,
            ]);

            exit;
        }

        // Create user account
        $params = [
            "name" => $name,
            "email" => $email,
            "city" => $city,
            "state" => $state,
            "password" => password_hash($password, PASSWORD_DEFAULT),
        ];

        $this->db->query("INSERT INTO users (name, email, city, state, password) VALUES (:name, :email, :city, :state, :password);", $params);

        // Get new user id
        $userId = $this->db->conn->lastInsertId();

        // Save it to the session
        Session::setSession("user", [
            "id" => $userId,
            "name" => $name,
            "email" => $email,
            "city" => $city,
            "state" => $state,
        ]);

        // inspectAndDie(Session::getSession("user"));

        redirect("/");
    }

    /**
     * Logout a user and destroy session
     * 
     * @return void
     */
    public function logout()
    {
        Session::clearSessionData();

        $params = session_get_cookie_params();
        setcookie(
            "PHPSESSID",
            "",
            time() - 86400,
            $params["path"],
            $params["domain"]
        );

        redirect("/");
    }
}
