<?php
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];


$paths = [
    "/" => "controllers/dashboard.php",
    "/dashboard" => "controllers/dashboard.php",
    "/calendar" => "controllers/calendar.php",
    "/about" => "controllers/about.php",
    "/personalProjects" => "controllers/personalProjects.php",
    "/team" => "controllers/team.php",
];


function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
    }
}
function abort($code = 404)
{
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

routeToController($uri, $paths);
