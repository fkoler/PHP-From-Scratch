<?php

function sayHelloButthead()
{
    echo "Hello Butthead" . "<br>";
};

sayHelloButthead();

function sayGoodbyeButthead()
{
    return "Goodbye Butthead" . "<br>";
};

$goodbyeButthead = sayGoodbyeButthead();

echo $goodbyeButthead;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Functions & Return Values</title>
</head>

<body class="bg-black text-white"></body>

</html>