<?php

/*
class User
{
    public $name;
    public $email;

    public function login()
    {
        echo "The User logged in";
    }
}

// Instantiate a new object
$user66 = new User();

$user66->name = "John Travolta";
$user66->email = "john@travolta.io";

// var_dump($user66);

// $user66->login();

$user99 = new User();

$user99->name = "Samuel L. Jackson";
$user99->email = "samuel@jackson.io";

// var_dump($user99);
*/

class User
{
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function login()
    {
        echo $this->name . " logged in <br>";
    }
}

$user44 = new User("Harvey Keitel", "harvey@keitel.io");
$user44->login();

$user11 = new User("Ving Rhames", "ving@rhames.io");
var_dump($user11);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>More Function Challenges</title>
</head>

<body class="bg-black text-white"></body>

</html>