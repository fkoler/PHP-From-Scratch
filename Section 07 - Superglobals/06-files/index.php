<?php
$title = "";
$description = "";
$submitted = false;

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
  $title = htmlspecialchars($_POST["title"]) ?? "";
  $description = htmlspecialchars($_POST["description"]) ?? "";

  $file = $_FILES["logo"];

  if ($file["error"] === UPLOAD_ERR_OK) {
    // Specify where to upload
    $uploadDir = "uploads/";

    // Check and create dir
    if (!is_dir($uploadDir)) {
      mkdir($uploadDir, 0755, true);
    }

    // Create file name
    $filename = uniqid() . "-" . $file["name"];

    // Check file type
    $allowedExtensions = ["jpg", "jpeg", "png"];
    $fileExtension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    // Make sure extension is in array
    if (in_array($fileExtension, $allowedExtensions)) {
      // Upload file
      if (move_uploaded_file($file["tmp_name"], $uploadDir . $filename)) {
        echo "File Uploaded";
      } else {
        echo "File Upload Error: " . $file["error"];
      }
    } else {
      echo "Invalid File Type";
    }
  }

  $submitted = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Job Listing</title>
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

      <form method="post" enctype="multipart/form-data">
        <div class="mb-4">
          <label for="title" class="block text-gray-100 font-medium">Title</label>
          <input type="text" id="title" name="title" placeholder="Enter job title" class="bg-gray-300 text-gray-900 w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none">
        </div>

        <div class="mb-6">
          <label for="description" class="block text-gray-100 font-medium">Description</label>
          <textarea id="description" name="description" placeholder="Enter job description" class="bg-gray-300 text-gray-900 w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none"></textarea>
        </div>

        <div class="mb-4">
          <label for="resume" class="block text-gray-100 font-medium">Logo</label>
          <input type="file" id="logo" name="logo" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none">
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