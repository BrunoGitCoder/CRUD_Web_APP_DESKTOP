<?php
session_start();
require_once __DIR__ . "/../includes/config.php";

require_once BASE_PATH . "/includes/db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST["user"] ?? '';
    $pass = $_POST["password"] ?? '';
    $passconfi = $_POST["passconfi"] ?? '';

    if (isset($_SESSION["social"])){
        $user = $_SESSION["social"] == "google" ? $user."@gmail.com" : $user."@icloud.com";
        unset($_SESSION["social"]);
    }

    if (empty($user) || empty($pass) || empty($passconfi)) {
        echo " Por favor, preencha todos os campos.";
        exit;
    }

    if ($pass == $passconfi) {
        try {
            $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO usuario (user, pass) VALUES (:user, :pass)");
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':pass', $hashedPassword);
            $stmt->execute();
            echo " Registro criado com sucesso!";
            $_SESSION["success"] = "<strong>$user</strong> registrado(a) com sucesso!";
            header("Location: /crud_web_app/index.php");
            exit;
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                $_SESSION["error"] = "Usuário <strong>$user</strong> já existe.";
                header("Location: /crud_web_app/pages/signup.php");
                exit;
            } else {
                echo " Erro ao inserir: " . $e->getMessage();
                exit;
            }
        }
    } else {
        $_SESSION["error"] = "Digite a mesma senha em ambos os campos de senhas.";
        header("Location: /crud_web_app/pages/signup.php");
        exit;
    }
}
