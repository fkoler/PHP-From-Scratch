<?php
$output = null;

$bands = [
  [
    "Nine Inch Nails",
    "Ministry",
    "Machine Head"
  ],
  [
    "Lamb of God",
    "Killswitch Engage",
    "Mastodon"
  ],
];

$output = $bands[0][0]; // Nine Inch Nails

$bands[] = [
  "Slayer",
  "Megadeth",
  "Sepultura"
];

$members = [
  [
    "name" => "Trent Reznor",
    "email" => "trent.reznor.io",
    "password" => "000000",
  ],
  [
    "name" => "Randy Blythe",
    "email" => "randy.blythe.io",
    "password" => "111111",
  ],
  [
    "name" => "Tom Araya",
    "email" => "tom.araya.io",
    "password" => "222222",
  ],
];

$members[] = [
  "name" => "Dave Mustaine",
  "email" => "dave.mustaine.io",
  "password" => "333333",
];

array_push($members, [
  "name" => "Max Cavalera",
  "email" => "max@cavalera.io",
  "password" => "444444"
]);

array_pop($members);
array_shift($members);
unset($members[0]);

$output = $members[2]["name"];

$output = count($members);
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
      <p class="text-xl font-semibold"><?= $output ?></p>

      <p>
      <pre>
          <?= print_r($members) ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>