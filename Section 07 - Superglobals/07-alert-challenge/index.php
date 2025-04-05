<?php
$title = "";
$description = "";
$submitted = false;
$messages = [];

// Check if the form was submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
  // Get the title and description from the form input, applying htmlspecialchars for security
  $title = htmlspecialchars($_POST["title"]) ?? "";
  $description = htmlspecialchars($_POST["description"]) ?? "";

  // Validate that both fields are filled
  if (empty($title) || empty($description)) {
    $messages[] = ["Both fields are required!", "red"];
  } else {
    $submitted = true;
    $messages[] = ["Form submitted successfully!", "green"];
  }

  // Check if a file was uploaded without errors
  if (isset($_FILES["logo"]) && $_FILES["logo"]["error"] === UPLOAD_ERR_OK) {
    $file = $_FILES["logo"];
    $uploadDir = "uploads/";

    // Create the upload directory if it doesn't exist
    if (!is_dir($uploadDir)) {
      mkdir($uploadDir, 0755, true);
    }

    // Generate a unique filename and get the file extension
    $filename = uniqid() . "-" . basename($file["name"]);
    $fileExtension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $allowedExtensions = ["jpg", "jpeg", "png"];

    // Check if the uploaded file type is allowed
    if (in_array($fileExtension, $allowedExtensions)) {
      // Move the file to the upload directory
      if (move_uploaded_file($file["tmp_name"], $uploadDir . $filename)) {
        $submitted = true;
        $messages[] = ["File uploaded successfully!", "green"];
      } else {
        $messages[] = ["File upload failed!", "red"];
      }
    } else {
      $messages[] = ["Invalid file type!", "red"];
    }
  } else {
    $messages[] = ["No file uploaded or upload error!", "red"];
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Job Listing</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/png" href="assets/favicon.png">
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
    <div class="bg-gray-700 p-8 rounded shadow-md w-full max-w-md">
      <h1 class="text-2xl font-semibold mb-6">Create Job Listing</h1>

      <!-- Display validation or success messages -->
      <?php foreach ($messages as $msg): ?>
        <div class="p-3 mb-3 rounded text-center text-gray-900 font-bold bg-<?= $msg[1] === 'green' ? 'green-500' : 'red-500' ?>">
          <?= $msg[0] ?>
        </div>
      <?php endforeach; ?>

      <!-- Form for job listing -->
      <form method="post" enctype="multipart/form-data" id="jobForm">
        <div class="mb-4">
          <label for="title" class="block font-medium">Title</label>
          <input type="text" id="title" name="title" value="<?= htmlspecialchars($title) ?>"
            class="w-full px-4 py-2 border rounded bg-gray-300 text-gray-900 focus:ring focus:ring-blue-300">
        </div>

        <div class="mb-4">
          <label for="description" class="block font-medium">Description</label>
          <textarea id="description" name="description" autocomplete="off"
            class="w-full px-4 py-2 border rounded bg-gray-300 text-gray-900 focus:ring focus:ring-blue-300"><?= htmlspecialchars($description) ?></textarea>
        </div>

        <div class="mb-4">
          <label for="logo" class="block font-medium">Logo</label>
          <input type="file" id="logo" name="logo"
            class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300">
        </div>

        <div class="flex items-center justify-between">
          <!-- Submit button -->
          <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Create Listing
          </button>
          <!-- Back to Home button -->
          <button type="button" onclick="window.location.href='/'"
            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Back to Home
          </button>
        </div>
      </form>

      <!-- Display the submitted job listing -->
      <?php if ($submitted): ?>
        <div class="mt-6 p-4 border rounded bg-gray-300 text-gray-900">
          <h2 class="text-lg font-bold">Submitted Job Listing:</h2>
          <p><strong>Title:</strong> <?= htmlspecialchars($title) ?></p>
          <p><strong>Description:</strong> <?= htmlspecialchars($description) ?></p>
        </div>

        <!-- <3 JavaScript <3 to reset the form fields after submission -->
        <script>
          document.getElementById("jobForm").reset();
          document.getElementById("title").value = "";
          document.getElementById("description").value = "";
          document.getElementById("logo").value = "";
        </script>
      <?php endif; ?>
    </div>
  </div>
</body>

</html>