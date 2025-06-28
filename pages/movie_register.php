<?php
session_start();
if ($_SESSION['acess'] != 'admin'){
    header("Location: /crud_web_app/pages/home.php");
}
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

<body class="movie-register-page">
    <!-- Header -->
    <?php include BASE_PATH . "/includes/header.php" ?>

    <!-- Form / Preview -->
    <div class="register-box">
        <h1>Adicionar Novo Filme</h1>
        <div class="register-preview-box">
            <div class="register-form-box">
                <form id="movie-register-form" action="<?= BASE_URL ?>/controllers/create_movie.php" method="POST" enctype="multipart/form-data">
                    <div class="input-box">
                        <input type="text" id="title-input" name="title" required="required">
                        <span>Título</span>
                    </div>
                    <div class="textarea-box">
                        <textarea required id="description-input" name="description"></textarea>
                        <span class="textarea-title">Descrição</span>
                    </div>
                    <div class="input-box">
                        <input type="text" id="category-input" name="category" required="required">
                        <span>Categoria</span>
                    </div>
                    <label for="fileInput" class="btn-file">Selecionar imagem</label>
                    <input type="file" id="fileInput" name="poster" style="display: none;" accept="image/*">
                    <button type="submit" class="btn-save-movie">Salvar Filme</button>
                </form>
            </div>
            <div class="line"></div>
            <div class="preview-box">
                <section>
                    <div class="preview-img" id="preview-img"></div>
                    <h2 id="title">Título</h2>
                    <p id="category">Categoria</p>
                    <p id="description">Descrição</p>
                </section>
            </div>
        </div>
        <div class="movie-register-aviso">
            <?php
            if (isset($_SESSION["error"])) {
                echo "<p class='movie-register-error'>" . $_SESSION["error"] . "</p>";
                unset($_SESSION["error"]);
            }
            if (isset($_SESSION["success"])) {
                echo "<p class='movie-register-success'>" . $_SESSION["success"] . "</p>";
                unset($_SESSION["success"]);
            }
            ?>
        </div>
    </div>
    <script src="<?= BASE_URL ?>/assets/js/preview.js"></script>
</body>

</html>