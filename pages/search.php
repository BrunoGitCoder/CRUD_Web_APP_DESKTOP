<?php
session_start();
require_once __DIR__ . '/../includes/config.php';
$search_text = $_POST["search-text"] ?? "";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/dar_scroll_bar.css">
    <link rel="shortcut icon" href="<?= BASE_URL ?>/assets/img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>ScoreMovie</title>
</head>

<body class="search-page">
    <!-- Header -->
    <?php include BASE_PATH . "/includes/header.php";?>

    <!-- Search Form -->
    <div class="search-box">
        <form action="" method="POST">
            <button type="submit"><img src="<?= BASE_URL ?>/assets/img/lupa_icon.png"></button>
            <input type="text" name="search-text" placeholder="Pesquisar" value="<?= $search_text ?>">
        </form>
    </div>
    <p class="filter-div">- OU -</p>

    <!-- Search Filter -->
    <div class="filter-box">
        <form action="" method="POST">
        <?php
        $filterSelect = $_POST["filter"] ?? "";
        $filters = ["Todos", "Terror", "Aventura", "Ação", "Comédia", "Drama", "Fantasia", "Ficção", "Romance", "Documentario"];
        foreach ($filters as $filter){
            if ( $filterSelect == $filter){
                echo "<button class=\"filter-select\" type=\"submit\" name=\"filter\" value=\"$filter\">$filter</button>";
            } else {
                echo "<button class=\"filter-not-select\" type=\"submit\" name=\"filter\" value=\"$filter\">$filter</button>";
            }
        }
        ?>
        </form>
    </div>

    <!-- Movie List -->
    <div class="movie-list">
        <?php
        include BASE_PATH . "/controllers/read_all_movie.php";
        ?>
    </div>
</body>

</html>