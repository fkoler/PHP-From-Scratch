<?php
require "database.php";

$isDeleteRequest = $_SERVER["REQUEST_METHOD"] === "POST" && ($_POST["_method"] ?? "" === "delete");

// var_dump($isDeleteRequest);

if ($isDeleteRequest) {
    $id = $_POST["id"];

    $sql = "DELETE FROM posts WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $params = [
        "id" => $id,
    ];

    $stmt->execute($params);

    header("Location: index.php");
    exit;
}
