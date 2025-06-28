<?php
session_start();
require_once __DIR__ . '/../includes/config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/img/icon.ico" type="image/x-icon">
    <title>ScoreMovie</title>
</head>

<body class="signup-page">
    <!-- Header -->
    <?php
    include BASE_PATH . "/includes/header.php";
    if (isset($_GET["social"])) {
        $_SESSION["social"] = $_GET["social"];
    } else {
        unset($_SESSION["social"]);
    }
    ?>

    <!-- Login Box -->
    <div class="login-body">
        <form action="/crud_web_app/controllers/create_user.php" method="POST">
            <h1>Registrar-se</h1>
            <?php
            if (isset($_SESSION['error'])) {
                echo "<p class='aviso'>" . $_SESSION['error'] . "</p>";
                unset($_SESSION['error']);
            }
            ?>
            <div class="input-box">
                <input type="text" name="user" required="required">
                <span>Usuário</span>
                <?php
                $social = $_GET["social"] ?? "";
                if ($social == "google") {
                    echo "<p class=\"social\">@gmail.com</p>";
                } else if ($social == "icloud") {
                    echo "<p class=\"social\">@icloud.com</p>";
                }
                ?>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="pass" required="required">
                <span>Senha</span>
                <i onclick="showpass()"><img src="/crud_web_app/assets/img/icon_lock.png" id="lock"></i>
            </div>
            <div class="input-box">
                <input type="password" name="passconfi" id="passconfir" required="required">
                <span>Confirmar Senha</span>
                <i onclick="showpassconfir()"><img src="/crud_web_app/assets/img/icon_lock.png" id="lockconfir"></i>
            </div>
            <button class="btn-login">Registrar-se</button>
            <div class="separator">
                <hr>
                <p>OU</p>
                <hr>
            </div>
            <a href="/crud_web_app/index.php"><button class="btn-cadastro" type="button">Entrar</button></a>
        </form>
    </div>
    <script src="/crud_web_app/assets/js/showpass.js"></script>
</body>

</html>