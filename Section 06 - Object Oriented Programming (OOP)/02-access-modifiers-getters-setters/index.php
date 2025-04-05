<?php

class User
{
  public $name;
  public $email;
  private $status;
  protected $role;

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . " logged in <br>";
  }

  public function getStatus()
  {
    echo $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getRole()
  {
    return $this->role;
  }

  public function setRole($role)
  {
    $this->role = $role;
  }
}

$user11 = new User("Ving Rhames", "ving@rhames.io");
$user11->login();

$user11->setStatus("active");
$user11->getStatus();

$user11->setRole("actor");
$user11->getRole();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Access Modifiers, Getters & Setters</title>
</head>

<body class="bg-black text-white"></body>

</html>