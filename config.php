<?php

return [
    'database' => [
        'host' => getenv("containers-us-west-209.railway.app"),
        'port' => getenv("6212"),
        "dbname" => getenv("databaseDB"),
        'charset' => "utf8mb4"

    ]
];
