<?php
session_start();
session_unset();
session_destroy();

session_start();

include_once __DIR__ . "/../includes/config.php";

include BASE_PATH . "/includes/db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST["user"] ?? '';
    $pass = $_POST["password"] ?? '';

    if (empty($user) || empty($pass)) {
        echo " Por favor, preencha todos os campos.";
        exit;
    }

    try {
        $stmt = $pdo->prepare("SELECT * FROM usuario WHERE user = :user");
        $stmt->bindParam(":user", $user);
        $stmt->execute();

        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$userData) {
            $_SESSION["error"] = "Usuário <strong>$user</strong> não existe.";
            header("Location: /crud_web_app/index.php");
            exit;
        }

        if ($userData && password_verify($pass, $userData["pass"])) {
            $_SESSION["acess"] = $userData["acess"];
            $_SESSION["user"] = $userData["user"];
            header("Location: /crud_web_app/pages/home.php");
            exit;
        } else {
            $_SESSION["error"] = "Senha informada está inválida!";
            header("Location: /crud_web_app/index.php");
            exit;
        }
    } catch (PDOException $e) {
        echo " Erro ao inserir: " . $e->getMessage();
    }
}
