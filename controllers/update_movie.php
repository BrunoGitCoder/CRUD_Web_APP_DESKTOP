<?php
session_start();
require_once __DIR__ . "/../includes/config.php";
require_once BASE_PATH . "/includes/db.php";

// Verifica se é admin
if (!isset($_SESSION["acess"]) || $_SESSION["acess"] !== "admin") {
    header("Location: /crud_web_app/pages/home.php");
    exit;
}

// Verifica método POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"] ?? null;
    $title = trim($_POST["title"]);
    $descript = trim($_POST["description"]);
    $category = trim($_POST["category"]);

    if (!$id || !$title || !$descript || !$category) {
        $_SESSION["error"] = "Todos os campos são obrigatórios.";
        header("Location: /crud_web_app/pages/movie_edit.php?id=$id");
        exit;
    }

    try {
        if (isset($_FILES["poster"]) && $_FILES["poster"]["error"] === UPLOAD_ERR_OK) {
            $posterName = $_FILES["poster"]["name"];
            $posterTemp = $_FILES["poster"]["tmp_name"];
            move_uploaded_file($posterTemp, BASE_PATH . "/assets/img/" . $posterName);

            $stmt = $pdo->prepare("UPDATE movie SET title = :title, description = :descript, category = :category, img_small = :img WHERE movie_id = :id");
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':descript', $descript);
            $stmt->bindParam(':category', $category);
            $stmt->bindParam(':img', $posterName);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        } else {
            // Sem nova imagem
            $stmt = $pdo->prepare("UPDATE movie SET title = :title, description = :descript, category = :category WHERE movie_id = :id");
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':descript', $descript);
            $stmt->bindParam(':category', $category);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        }

        $stmt->execute();

        $_SESSION["success"] = "Filme <strong>$title</strong> atualizado com sucesso.";
        header("Location: /crud_web_app/pages/movie_edit.php?id=$id");
        exit;

    } catch (PDOException $e) {
        $_SESSION["error"] = "Erro ao atualizar o filme: " . $e->getMessage();
        header("Location: /crud_web_app/pages/movie_edit.php?id=$id");
        exit;
    }
}
