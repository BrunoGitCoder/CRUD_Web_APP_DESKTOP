<?php
require_once __DIR__ . "/../includes/config.php";

require_once BASE_PATH . "/includes/db.php";

if (!isset($category)) return;

$stmt = $pdo->prepare("SELECT * FROM movie WHERE category LIKE :category");
$stmt->execute([':category' => $category]);

$movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($movies) {
    echo "<div class=\"carousel-row carousel-$category\">";
    foreach ($movies as $movie) {
        include BASE_PATH . "/templates/carousel_card.php";
    }
    echo '</div>';
}