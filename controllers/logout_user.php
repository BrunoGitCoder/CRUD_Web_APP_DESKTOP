<?php
session_start();
session_unset();
session_destroy();
header("Location: /crud_web_app/index.php");
exit;
