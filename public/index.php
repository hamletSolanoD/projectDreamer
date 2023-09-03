<?php

use Dotenv\Dotenv;

const BASE_PATH = __DIR__ . '/../';
require BASE_PATH . 'functions.php';

spl_autoload_register(function ($class) {
    require base_path("Core/" . $class . '.php');
});


$envFilePath = __DIR__ . ('/../.env');
if (file_exists($envFilePath)) {
    $lines = file($envFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        list($key, $value) = explode('=', $line, 2);
        $_ENV[$key] = $value;
    }
}

require base_path("router.php");
