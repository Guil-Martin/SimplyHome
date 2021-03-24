<?php

/* <i class="fas fa-hotel"></i>*/

define('WEBROOT', str_replace("index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("index.php", "", $_SERVER["SCRIPT_FILENAME"]));

include_once(ROOT . "router/Router.php");
$router = new Router();
$router->submit();