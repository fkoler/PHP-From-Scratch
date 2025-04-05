<?php
$dayOfWeek = date("l");
// $dayOfWeek = "Monday";


switch ($dayOfWeek) {
  case "Monday":
    $message = "Monday Blues!";
    $bgColor = "blue";
    $color = "white";
    break;

  case "Tuesday":
    $message = "Taco Tuesday!";
    $bgColor = "orange";
    $color = "black";
    break;

  case "Wednesday":
    $message = "Midweek Hustle!";
    $bgColor = "yellow";
    $color = "black";
    break;

  case "Thursday":
    $message = "Almost There!";
    $bgColor = "purple";
    $color = "white";
    break;

  case "Friday":
    $message = "TGIF!";
    $bgColor = "green";
    $color = "white";
    break;

  case "Saturday":
    $message = "Weekend Vibes!";
    $bgColor = "red";
    $color = "white";
    break;

  case "Sunday":
    $message = "Lazy Sunday!";
    $bgColor = "gray";
    $color = "black";
    break;

  default:
    $message = "Invalid day!";
    $bgColor = "black";
    $color = "gray";
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>What Day Is It?</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      font-size: xx-large;
      background-color: <?= $bgColor ?>;
      color: <?= $color ?>;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 0;
      margin: 0;
      height: 100vh;
    }
  </style>
</head>

<body>
  <h1><?= strtoupper($message) ?></h1>
</body>

</html>