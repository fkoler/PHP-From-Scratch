<?php

// http://localhost:8000/?name=bart

// var_dump($_GET);
// echo isset($_GET["name"]) ? $_GET["name"] : "";

// http://localhost:8000/?name=<script>alert(1);</script>
// echo $_GET["name"] ?? "";
echo htmlspecialchars($_GET["name"] ?? ""); // &lt;script&gt;alert(1);&lt;/script&gt;
