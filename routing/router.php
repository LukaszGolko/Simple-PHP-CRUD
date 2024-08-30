<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// var_dump($uri);

$routes =
    [
        '/' => 'controller/home.controller.php',
        '/create' => 'controller/create.controller.php',
        '/read' => 'controller/read.controller.php',
        '/update' => 'controller/update.controller.php',
        '/delete' => 'controller/delete.controller.php',
    ];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);

    require "view/{$code}.php";

    die();
}

routeToController($uri, $routes);
