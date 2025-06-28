<div class="carousel-card" style="background-image: url(/crud_web_app/assets/img/<?= $movie["img_small"] ?>);">
    <?php if ($acess == "admin") : ?>
        <p class='crud-menu'>
            <span class='btn-crud'>
                <a class="id<?= $movie['movie_id'] ?>" href="/crud_web_app/pages/movie_edit.php?id=<?= $movie["movie_id"] ?>">
                    <img src='../assets/img/editar.png'>
                </a>
            </span>
        </p>
    <?php endif; ?>
    <?php
    if ($movie["score"] >= 0) {
        if ($movie["score"] >= 8) {
            echo "<p style=\"background-color:rgba(23, 186, 45, 0.8)\" class=\"card-score\">";
        } elseif ($movie["score"] >= 6) {
            echo "<p style=\"background-color:rgba(229, 185, 9, 0.8)\" class=\"card-score\">";
        } else {
            echo "<p style=\"background-color:rgba(229, 9, 20, 0.8)\" class=\"card-score\">";
        }
        echo $movie["score"];
        echo "<span style=\"color: #fff;\">&#9733;</span>";
        echo "</p>";
    }
    ?>
    <p class="card-title">
        <strong><?= $movie["title"] ?></strong>
        <br>
        <?= $movie["description"] ?>
    </p>
</div>