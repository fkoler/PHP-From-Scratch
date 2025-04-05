<?php
$names = ["Max Cavalera", "Dave Mustaine", "Tom Araya", "Zack de la Rocha"];

$users = [
  [
    "name" => "Max",
    "email" => "max@cavalera.io",
  ],
  [
    "name" => "Dave",
    "email" => "dave@mustaine.io",
  ],
  [
    "name" => "Tom",
    "email" => "tom@araya.io",
  ],
  [
    "name" => "Zack",
    "email" => "zack@rocha.io",
  ]
];
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
      <!-- Output -->
      <h3 class="text-xl font-semibold mb-4">Using a for loop</h3>
      <ul class="mb-6">
        <?php for ($i = 0; $i < count($names); $i++): ?>
          <li><?= $names[$i]; ?></li>
        <?php endfor; ?>
      </ul>

      <h3 class="text-xl font-semibold mb-4">Using a foreach loop</h3>
      <ul class="mb-6">
        <?php foreach ($names as $name): ?>
          <li><?= $name; ?></li>
        <?php endforeach; ?>
      </ul>

      <h3 class="text-xl font-semibold mb-4">Using a foreach loop with index</h3>
      <ul class="mb-6">
        <?php foreach ($names as $index => $name): ?>
          <li><?= $index . ". " . $name; ?></li>
        <?php endforeach; ?>
      </ul>

      <h3 class="text-xl font-semibold mb-4">Using a foreach loop with associative array</h3>
      <ul class="mb-6">
        <?php foreach ($users as $user): ?>
          <li><?= $user["name"] . ": " . $user["email"]; ?></li>
        <?php endforeach; ?>
      </ul>

      <h3 class="text-xl font-semibold mb-4">Getting key names and values from associative array</h3>
      <ul class="mb-6">
        <?php foreach ($users as $user): ?>
          <?php foreach ($user as $key => $value) : ?>
            <li><?= $key . ": " . $value; ?></li>
          <?php endforeach; ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</body>

</html>