<?php
// 1. for
// for ($i = 0; $i < 5; $i++) {
//   for ($j = 0; $j < 5; $j++) {
//     echo $i . " - " . $j . "<br>";
//   }
// }

// 2. while
// $i = 0;
// while ($i < 5) {
//   $j = 0;

//   while ($j < 5) {
//     echo $i . " - " . $j . "<br>";
//     $j++;
//   }

//   $i++;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nested Loops & CSS Grid Example</title>
  <style>
    body {
      background-color: black;
      color: whitesmoke;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(5, 50px);
      grid-gap: 5px;
    }

    .grid-item {
      width: 50px;
      height: 50px;
      background-color: lightblue;
      color: black;
      text-align: center;
      line-height: 50px;
    }
  </style>
</head>

<body>
  <!-- 1. -->
  <!-- <div class="grid-container">
    <?php for ($i = 0; $i < 5; $i++): ?>
      <?php for ($j = 0; $j < 5; $j++): ?>
        <div class="grid-item">
          <?= $i . " - " . $j . "<br>" ?>
        </div>
      <?php endfor  ?>
    <?php endfor  ?>
  </div> -->

  <!-- 2. -->
  <div class="grid-container">
    <?php
    $i = 0;
    while ($i < 5):
      $j = 0;
      while ($j < 5):
    ?>
        <div class="grid-item">
          <?= $i . " - " . $j . "<br>" ?>
        </div>
    <?php
        $j++;
      endwhile;
      $i++;
    endwhile;
    ?>
  </div>
</body>

</html>