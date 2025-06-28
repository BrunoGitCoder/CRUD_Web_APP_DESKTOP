<?php
require_once __DIR__ . '/includes/config.php';
session_start();
if (isset($_SESSION["user"])) {
    header("Location: BASE_URL/pages/home.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
    <link rel="shortcut icon" href="<?= BASE_URL ?>/assets/img/icon.ico" type="image/x-icon">
    <title>ScoreMovie</title>
</head>

<body class="login-page">
    <!-- Header -->
    <?php include "./includes/header.php" ?>

    <!-- Login Box -->
    <div class="login-body">
        <form action="<?= BASE_URL ?>/controllers/read_login.php" method="POST">
            <h1>Entrar</h1>
            <?php
            if (isset($_SESSION['error'])) {
                echo "<p class='aviso'>" . $_SESSION['error'] . "</p>";
                unset($_SESSION['error']);
            }
            if (isset($_SESSION["success"])) {
                echo "<p class='success'>" . $_SESSION["success"] . "</p>";
                unset($_SESSION["success"]);
            }
            ?>
            <div class="input-box">
                <input type="text" name="user" required="required">
                <span>Usuário</span>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="pass" required="required">
                <span>Senha</span>
                <i onclick="showpass()"><img src="<?= BASE_URL ?>/assets/img/icon_lock.png" id="lock"></i>
            </div>
            <button class="btn-login">Entrar</button>
            <p>Primeira vez aqui?</p>
            <a href="<?= BASE_URL ?>/pages/signup.php"><button class="btn-cadastro" type="button">Registrar-se</button></a>
            <div class="separator">
                <hr>
                <p>OU</p>
                <hr>
            </div>
            <div class="social-login">
                <a href="<?= BASE_URL ?>/pages/signup.php?social=google"><button class="social-button" type="button"><img src="<?= BASE_URL ?>/assets/img/icon_google.png">Google</button></a>
                <a href="<?= BASE_URL ?>/pages/signup.php?social=icloud"><button class="social-button" type="button"><img src="<?= BASE_URL ?>/assets/img/icon_apple.png">Apple</button></a>
            </div>
        </form>
    </div>
    <script src="<?= BASE_URL ?>/assets/js/showpass.js"></script>
</body>

</html>