<?php
$projectName = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'))[0] ?? '';

define("BASE_URL", "/" . $projectName);
define("BASE_PATH", $_SERVER['DOCUMENT_ROOT'] . BASE_URL);
