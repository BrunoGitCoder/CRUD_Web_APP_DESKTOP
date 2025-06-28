<?php
require_once __DIR__ . "/../includes/config.php";
require_once BASE_PATH . "/includes/db.php";

$search_text = $_POST["search-text"] ?? "";
$filter = $_POST["filter"] ?? null;

if ($filter and $filter != "Todos"){
    $stmt = $pdo->prepare("SELECT * FROM movie WHERE category LIKE '$filter'");
}else {
    $stmt = $pdo->prepare("SELECT * FROM movie WHERE title LIKE '%$search_text%'");
}

$stmt->execute();

$movieData = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($movieData) {
    foreach ($movieData as $movie) {
        include BASE_PATH . "/templates/carousel_card.php";
    }
} else {
    echo "<p class='search-null'>❗❗❗ Nenhum filme foi encontrado ❗❗❗</p>";
}
