<?php
const BASE_PATH = __DIR__.'/../';

require BASE_PATH.'functions.php';

spl_autoload_register(function ($class) {
    require base_path(str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php');
});

require base_path('router.php');