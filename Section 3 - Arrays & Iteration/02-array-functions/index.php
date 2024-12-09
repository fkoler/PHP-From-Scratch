<?php
$output = null;

$ids = [11, 55, 33, 66, 22, 44];
$users = ["User2", "User3", "User1"];

// count()
// $output = count($ids);

// sort()
// sort($ids);
// sort($users);

// rsort()
// rsort($ids);
// rsort($users);

// array_push()
array_push($ids, 77);
array_push($users, "User4");

// array_pop()
array_pop($ids);
array_pop($users);

// array_shift()
array_shift($ids);
array_shift($users);

// array_unshift()
array_unshift($ids, 88);
array_unshift($users, "User5");

// array_slice()
// $output = array_slice($ids, 3, 3);
// var_dump($output); // 66, 22, 44

// array_splice()
// array_splice($ids, 1, 1, "New ID");
// array_splice($users, 0, 1, "New User");

// array_sum();
$output = "Sum of IDs: " . array_sum($ids); // 308
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
    <header class="bg-blue-500 p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl text-center font-semibold">PHP From Scratch</h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <div class="bg-gray-100 text-black rounded-lg shadow-md p-6 mt-6">
            <p class="text-xl"><?= $output ?></p>

            <h2 class="text-xl font-semibold my-4">IDs Array:</h2>
            <pre><?= print_r($ids, true) ?></pre>

            <h2 class="text-xl font-semibold my-4">Users Array:</h2>
            <pre><?= print_r($users, true) ?></pre>
        </div>
    </div>
</body>

</html>