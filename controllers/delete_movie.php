<?php
session_start();
require_once __DIR__ . "/../includes/config.php";
require_once BASE_PATH . "/includes/db.php";

// Verifica permissão
if (!isset($_SESSION["acess"]) || $_SESSION["acess"] !== "admin") {
    header("Location: /crud_web_app/pages/home.php");
    exit;
}

// Verifica se o ID foi enviado
if (!isset($_GET["id"])) {
    $_SESSION["error"] = "ID do filme não foi informado.";
    header("Location: /crud_web_app/pages/admin.php");
    exit;
}

$id = intval($_GET["id"]);

try {
    // Primeiro pega o nome da imagem para remover depois
    $stmt = $pdo->prepare("SELECT img_small FROM movie WHERE movie_id = :id");
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $movie = $stmt->fetch();

    if (!$movie) {
        $_SESSION["error"] = "Filme não encontrado.";
        header("Location: /crud_web_app/pages/admin.php");
        exit;
    }

    // Remove o registro do banco
    $stmt = $pdo->prepare("DELETE FROM movie WHERE movie_id = :id");
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();

    // Tenta remover a imagem, se existir
    $imagePath = BASE_PATH . "/assets/img/" . $movie["img_small"];
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }

    $_SESSION["success"] = "Filme excluído com sucesso.";
    header("Location: /crud_web_app/pages/movie_register.php");
    exit;

} catch (PDOException $e) {
    $_SESSION["error"] = "Erro ao excluir o filme: " . $e->getMessage();
    header("Location: /crud_web_app/pages/movie_register.php");
    exit;
}
