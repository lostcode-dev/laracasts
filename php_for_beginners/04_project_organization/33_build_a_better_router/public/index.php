<?php
const BASE_PATH = __DIR__.'/../';

require BASE_PATH.'functions.php';

spl_autoload_register(function ($class) {
    require base_path(str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php');
});

$router = new \Core\Router();
$routes = require base_path('routes.php');
$router->route();
