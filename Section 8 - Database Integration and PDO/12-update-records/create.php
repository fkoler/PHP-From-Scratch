<?php
require("database.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
  $title = htmlspecialchars($_POST["title"]);
  $body = htmlspecialchars($_POST["body"]);

  $sql = "INSERT INTO posts (title, body) VALUES (:title, :body)";

  $stmt = $pdo->prepare($sql);

  $params = [
    "title" => $title,
    "body" => $body,
  ];

  $stmt->execute($params);

  header("Location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Record</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl text-center font-semibold">My Blog</h1>
    </div>
  </header>

  <div class="flex justify-center mt-10">
    <div class="bg-gray-600 text-white p-8 rounded shadow-md w-full max-w-md">
      <h1 class="text-2xl font-semibold mb-6">Create Blog Post</h1>

      <form method="post">
        <div class="mb-4">
          <label for="title" class="block text-white font-medium">Title</label>
          <input type="text" id="title" name="title" placeholder="Enter post title" class="bg-gray-800 w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none">
        </div>

        <div class="mb-6">
          <label for="body" class="block text-white font-medium">Body</label>
          <textarea id="body" name="body" placeholder="Enter post body" class="bg-gray-800 w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none"></textarea>
        </div>

        <div class="flex items-center justify-between">
          <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
            Submit
          </button>
          <a href="index.php" class="text-blue-400 hover:underline">Back to Posts</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>