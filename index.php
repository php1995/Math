<?php

session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Router.php');
require_once(ROOT . '/components/Renderer.php');
require_once(ROOT . '/components/Controller.php');

require_once(ROOT . '/components/config/db.php');

$router = new Router();
$router->run();
