<?php

class User
{
  public $name;
  public $email;
  protected $status = "active";

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
    echo $this->status . "<br>";
  }
}

class Admin extends User
{
  public $level;

  public function __construct($name, $email, $level)
  {
    $this->level = $level;
    parent::__construct($name, $email);
  }

  public function login()
  {
    echo "Admin " . $this->name . " logged in <br>";
  }
}

$admin0 = new Admin("Agent Smith", "agent@smith.io", 5);

echo $admin0->name . "<br>";
echo $admin0->email . "<br>";
echo $admin0->level . "<br>";
$admin0->getStatus();
$admin0->login();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Inheritence</title>
</head>

<body class="bg-black text-white"></body>

</html>