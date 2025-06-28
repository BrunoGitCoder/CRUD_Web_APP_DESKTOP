<?php
session_start();
require_once __DIR__ . "/../includes/config.php";

require_once BASE_PATH . "/includes/db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST["title"];
    $descript = $_POST["description"];
    $category = $_POST["category"];

    if (isset($_FILES["poster"]) && $_FILES["poster"]["error"] === UPLOAD_ERR_OK) {
        $posterName = $_FILES["poster"]["name"];
        $posterPathTemp = $_FILES["poster"]["tmp_name"];
        move_uploaded_file($posterPathTemp, BASE_PATH . "/assets/img/" . $posterName);

        $stmt = $pdo->prepare("INSERT INTO movie (title, description, category, img_small) VALUES (:title, :descript, :category, :img)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':descript', $descript);
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':img', $posterName);
        $stmt->execute();
        $_SESSION["success"] = "Filme <strong>$title</strong> salvo com sucesso.";
        header("Location: /crud_web_app/pages/movie_register.php");
        exit;
    } else {
        $_SESSION["error"] = "Nenhuma imagem foi enviada ou houve um erro.";
        header("Location: /crud_web_app/pages/movie_register.php");
        exit;
    }
}
