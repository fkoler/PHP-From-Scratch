<?php

interface ContentInterface
{
  public function display();
  public function edit();
}

class Article implements ContentInterface
{
  private $title;
  private $content;

  public function __construct($title, $content)
  {
    $this->title = $title;
    $this->content = $content;
  }

  public function display()
  {
    echo "<h2><strong>{$this->title}</strong></h2>";
    echo "<p>{$this->content}</p>";
  }

  public function edit()
  {
    echo "Editing the article '{$this->title}'";
  }
}

class Video implements ContentInterface
{
  private $title;
  private $url;


  public function __construct($title, $url)
  {
    $this->title = $title;
    $this->url = $url;
  }

  public function display()
  {
    echo "<h2><strong>{$this->title}</strong></h2>";

    echo "<iframe src='{$this->url}'></iframe>";
  }

  public function edit()
  {
    echo "Editing the video '{$this->title}'";
  }
}

$article = new Article("Welcome to PHP", "PHP is an open-source general purpose scripting language, widely used for website development. It is developed by Rasmus Lerdorf. PHP stands for a recursive acronym PHP: Hypertext Preprocessor.");

$video = new Video("PHP From Scratch", "https://youtu.be/BUCiSSyIGGU");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-900">
  <header class="bg-blue-600 text-white text-center p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <!-- Output -->
    <div class="bg-blue-400 text-black rounded-lg shadow-md p-6 mt-6">
      <?= $article->display() ?>
    </div>

    <div class="bg-blue-400 text-black rounded-lg shadow-md p-6 mt-6">
      <?= $video->display() ?>
    </div>
  </div>
</body>

</html>