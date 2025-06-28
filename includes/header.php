<header>
    <img class="scoremovie-logo" src="/crud_web_app/assets/img/logo_base_red_curved_2.0.png" alt="ScoreMovie logo">
    <ul>
        <!--<li><a href="/crud_web_app/index.php">Entrar</a></li>-->
        <a href="/crud_web_app/pages/home.php" class="header-btn-home">
            <li>Home</li>
        </a>
        <a href="">
            <li>Series</li>
        </a>
        <a href="">
            <li>Movies</li>
        </a>
        <a href="">
            <li>Trending</li>
        </a>
        <a href="/crud_web_app/pages/search.php" class="header-btn-search">
            <li><img src="/crud_web_app/assets/img/lupa_icon.png"></li>
        </a>
    </ul>
    <div class="user-info-box" id="user-info">
        <?php
        $user = $_SESSION["user"] ?? null;
        $acess = $_SESSION["acess"] ?? null;
        if ($user) {
            echo "<div class=\"menu-admin\"><img src=\"/crud_web_app/assets/img/user_icon_defoult2.png\">";
            echo "<a id=\"btmenu\"><p>$user</p></a>";
            if ($acess == "admin") {
                echo "<div id=\"menu\" class=\"menu-admin-box\"><a id='movie-register' href=\"/crud_web_app/pages/movie_register.php\"><p>Adicionar Filme</p></a></div>";
            }
            echo "</div>";
            echo "<a class=\"logout\" href=\"/crud_web_app/controllers/logout_user.php\">Log-out</a>";
        } else {
            echo "<a class=\"logout\" href=\"/crud_web_app/controllers/logout_user.php\">Log-in</a>";
        }

        ?>
    </div>
</header>
<script>
    const btMenu = document.getElementById("btmenu")
    const menu = document.getElementById("menu")
    btMenu.addEventListener("click", () => {
        menu.classList.toggle("menu-admin-show")
    })
</script>