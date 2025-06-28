<?php
session_start();
require_once __DIR__ . '/../includes/config.php';
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
    <title>ScoreMovie</title>
</head>

<body class="home-page">
    <!-- Header -->
    <?php include BASE_PATH . "/includes/header.php"; ?>

    <!-- Hero -->
    <section class="hero" style="background-image: url(../assets/img/hero_the_protector.jpg);">
        <video class="hero-video" id="hero-video">
            <source src="<?= BASE_URL ?>/assets/video/protector.mp4">
        </video>
        <div class="info">
            <div class="hero-title"><img src="../assets/img/hero_logo_the_protector.png" alt="The Protector"></div>
            <p>Ao descobrir seus laços com uma ordem secreta ancestral, um jovem que vive na moderna Istambul embarca em uma missão para salvar a cidade de um inimigo imortal.</p>
            <div class="btns">
                <button class="btn-play" id="play">▶ Trailer</button>
                <button class="btn-info">ℹ Mais informações</button>
            </div>
        </div>
    </section>

    <!-- carousel -->
    <div class="carousel-box">
        <?php
        $categories = ["Terror", "Aventura", "Ação", "Comédia", "Drama", "Fantasia", "Ficção", "Romance", "Documentario"];
        foreach ($categories as $category) {
            echo "<h2>$category</h2>";
            echo "<div class=\"carousel-box-row\">";
            echo "<button class=\"btn-left\">⏴</button>";
            include BASE_PATH . "/controllers/read_movies_category.php";
            echo "<button class=\"btn-right\">⏵</button>";
            echo "</div>";
        }
        ?>
    </div>
    <script src="<?= BASE_URL ?>/assets/js/hero_video.js"></script>
    <script src="<?= BASE_URL ?>/assets/js/carousel_button.js"></script>

</body>

</html>