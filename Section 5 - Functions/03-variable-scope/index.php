<?php
// Global Scope
$name = "Theodore";

function sayHello()
{
    // Local Scope
    global $name;

    $name = "Franklin";

    echo "Hello " . $name;
}

echo $name . "<br>";
sayHello();
echo "<br>" . $name . "<br>";

function sayGoodbye()
{
    $names = ["Richard", "Bill", "Donald"];
    echo "Godbye " . $names[0] . "<br>";
}

echo $names[0]; // Undefined
sayGoodbye();
echo $names[0]; // Undefined
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