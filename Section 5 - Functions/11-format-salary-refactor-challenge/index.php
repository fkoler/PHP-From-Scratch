<?php
$listings = [
  [
    "id" => 1,
    "title" => "Software Engineer",
    "description" => "We are seeking a skilled software engineer to develop high-quality software solutions.",
    "salary" => 80000,
    "location" => "Montreal",
    "tags" => ["Software Development", "Java", "Python", "SEO"]
  ],
  [
    "id" => 2,
    "title" => "Marketing Specialist",
    "description" => "We are looking for a marketing specialist to develop and implement effective marketing strategies.",
    "salary" => 60000,
    "location" => "Toronto",
    "tags" => ["Digital Marketing", "Social Media", "SEO"]
  ],
  [
    "id" => 3,
    "title" => "Accountant",
    "description" => "We are hiring an experienced accountant to handle financial transactions and ensure compliance.",
    "salary" => 55000,
    "location" => "Vancouver",
    "tags" => ["Accounting", "Bookkeeping", "Financial Reporting"]
  ],
  [
    "id" => 4,
    "title" => "UX Designer",
    "description" => "We are seeking a talented UX designer to create intuitive and visually appealing user interfaces.",
    "salary" => 70000,
    "location" => "Toronto",
    "tags" => ["User Experience", "Wireframing", "Prototyping"]
  ],
  [
    "id" => 5,
    "title" => "Customer Service Representative",
    "description" => "We are looking for a friendly customer service representative to assist customers and resolve issues.",
    "salary" => 40000,
    "location" => "Regina",
    "tags" => ["Customer Support", "Communication", "Problem Solving"]
  ],
  [
    "id" => 6,
    "title" => "Java Developer",
    "description" => "MBS is in urgent need of a Sr. Java Developer in Winnipeg, MB. This position is a full-time, temp to hire opportunity.",
    "salary" => 90000,
    "location" => "Winnipeg",
    "tags" => []
  ],
];

$formatSalary = fn($salary) => "$" . number_format($salary);

function highlightTags($tags, $searchTerm)
{
  $tagsStr = implode(", ", $tags);
  return str_replace(
    $searchTerm,
    "<span class='bg-gray-700 text-white rounded-full px-2 py-1'>{$searchTerm}</span>",
    $tagsStr
  );
}

function calculateAverageSalary($jobListings, $formatCallback)
{
  $averageSalary = !empty($jobListings)
    ? array_sum(array_column($jobListings, "salary")) / count($jobListings)
    : 0;

  return $formatCallback($averageSalary);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Format Salary Refactor Challenge</title>
</head>

<body class="bg-black">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl text-center font-semibold">Job Listings</h1>
    </div>
  </header>

  <div class="container mx-auto p-4 mb-4">
    <!-- Output -->
    <div class="w-1/3 bg-gray-700 text-white rounded-lg shadow-md p-6 mx-auto">
      <h2 class="text-2xl font-semibold text-center">
        Average Salary:
        <?= calculateAverageSalary($listings, $formatSalary) ?>
      </h2>
    </div>

    <?php foreach ($listings as $index => $job) : ?>
      <div class="md my-4">
        <div class="
        <?php if ($index % 2 === 0): ?>
          bg-blue-200
          <?php else : ?>
            bg-red-200
        <?php endif; ?>        
        rounded-lg shadow-md">
          <div class="p-4">
            <h2 class="text-xl font-semibold"><?= $job["title"] ?></h2>
            <p class="text-gray-700 text-lg mt-2"><?= $job["description"] ?></p>
            <ul class="mt-4">
              <li class="mb-2">
                <strong>Salary:</strong> <?= $formatSalary($job["salary"]) ?>
              </li>

              <li class="mb-2">
                <strong>Location:</strong> <?= $job["location"] ?>
                <?php if ($job["location"] === "Toronto") : ?>
                  <span class="text-xs text-white bg-blue-500 rounded-full px-2 py-1 ml-2">
                    Local
                  </span>
                <?php endif; ?>
              </li>

              <?php if (!empty($job["tags"])) : ?>
                <li class="mb-2">
                  <strong>Tags:</strong>
                  <?= highlightTags($job["tags"], "SEO") ?>
                </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>

</html>