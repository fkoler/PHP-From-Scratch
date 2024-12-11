<?php
$output = null;

$user = [
    "name" => "Till",
    "email" => "till@lindemann.io",
    "password" => "123456",
    "projects" => [
        "First Arsch",
        "Rammstein",
        "Lindemann",
        "Na Chui",
    ],
];

$output = $user["name"];
$output = $user["email"];

$output = $user["projects"][1];

$user["address"] = "Hauptstraße 123";
unset($user["address"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-black text-white">
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl text-center font-semibold">PHP From Scratch</h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <div class="bg-blue-400 text-black rounded-lg shadow-md p-6 mt-6">
            <p class="text-xl font-bold"><?= $output ?></p>
            <h2 class="text-xl font-semibold my-4">User Array:</h2>
            <p>
            <pre><?= print_r($user) ?></pre>
            </p>
        </div>
    </div>
</body>

</html>