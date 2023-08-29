<?php

use Dotenv\Dotenv;

$envFilePath = __DIR__ . '/.env';
if (file_exists($envFilePath)) {
    $lines = file($envFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        list($key, $value) = explode('=', $line, 2);
        $_ENV[$key] = $value;
    }
}


require "functions.php";
require "Database.php";
require "Response.php";
require "router.php";
