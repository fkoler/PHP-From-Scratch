<?php
$title = "";
$description = "";
$submitted = false;

// might see it in legacy code
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_REQUEST["submit"])) {
  $title = htmlspecialchars($_REQUEST["title"]) ?? "";
  $description = htmlspecialchars($_REQUEST["description"]) ?? "";

  $submitted = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REQUEST - Superglobal</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: "Poppins", sans-serif;
    }
  </style>
</head>

<body class="bg-gray-900 text-gray-100">
  <div class="flex justify-center items-center h-screen">
    <div class="bg-gray-700 text-gray-100 p-8 rounded shadow-md w-full max-w-md">
      <h1 class="text-2xl font-semibold mb-6">
        Create Job Listing
      </h1>

      <form method="post">
        <div class="mb-4">
          <label for="title" class="block text-gray-100 font-medium">Title</label>
          <input type="text" id="title" name="title" placeholder="Enter job title" class="bg-gray-300 text-gray-900 w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none">
        </div>

        <div class="mb-6">
          <label for="description" class="block text-gray-100 font-medium">Description</label>
          <textarea id="description" name="description" placeholder="Enter job description" class="bg-gray-300 text-gray-900 w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none"></textarea>
        </div>

        <div class="flex items-center justify-between">
          <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
            Create Listing
          </button>

          <button onclick="window.location.href='/'" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
            Back to Home
          </button>
        </div>
      </form>

      <!-- Display submitted data -->
      <?php if ($submitted): ?>
        <div class="mt-6 p-4 border rounded bg-gray-300 text-gray-900">
          <h2 class="text-lg font-semibold">Submited Job Listing:</h2>
          <p>
            <strong>Title:</strong>
            <?= $title ?>
          </p>
          <p>
            <strong>Description:</strong>
            <?= $description ?>
          </p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</body>

</html>