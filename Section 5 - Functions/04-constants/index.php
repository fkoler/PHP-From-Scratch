<?php
define("APP_NAME", "My Lovely App");
define("APP_VERSION", "Alpha 2.0");

// echo APP_NAME . "<br>";
// echo APP_VERSION . "<br>";

const DB_NAME = "mydb";
const DB_HOST = "localhost";

// echo DB_NAME . "<br>";
// echo DB_HOST . "<br>";

function runBaby()
{
    echo APP_NAME . "<br>";
    echo APP_VERSION . "<br>";
    echo DB_NAME . "<br>";
    echo DB_HOST . "<br>";
}

runBaby();

// define("APP_NAME", "Your Lovely App"); // already defined
// const DB_NAME = "yourdb"; // already defined
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Functions and Return Values</title>
</head>

<body class="bg-black text-white"></body>

</html>