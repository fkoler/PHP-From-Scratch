<?php
$isLogedIn = true;
$name = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-900 text-white">
  <header class="bg-blue-600 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl text-center font-semibold">PHP From Scratch</h1>
    </div>
  </header>

  <div class="container mx-auto p-4 mt-4">
    <div class="bg-blue-400 text-black rounded-lg shadow-md p-6 mt-6">
      <!-- <?php if ($isLogedIn): ?>
        <?php if (isset($name)): ?>
          <h1 class="text-3xl text-center">Welcome <?= $name ?></h1>
        <?php else : ?>
          <h1 class="text-3xl text-center">Welcome</h1>
        <?php endif; ?>
      <?php else : ?>
        <h1 class="text-3xl text-center">Please log in</h1>
      <?php endif; ?> -->


      <?php if ($isLogedIn && $name): ?>
        <h1 class="text-3xl text-center">Welcome <?= $name ?></h1>
      <?php elseif ($isLogedIn): ?>
        <h1 class="text-3xl text-center">Welcome</h1>
      <?php else : ?>
        <h1 class="text-3xl text-center">Please log in</h1>
      <?php endif; ?>
    </div>
  </div>
</body>

</html>