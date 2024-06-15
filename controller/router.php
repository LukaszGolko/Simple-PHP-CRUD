<?php
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    var_dump($uri);

    $routes = 
    [
        '/' => 'model/home.view.php',
        '/create' => 'model/create.model.php',
        '/read' => 'model/read.model.php',
        '/update' => 'model/update.model.php',
        '/delete' => 'model/delete.model.php',
    ];

    function routeToController($uri, $routes) {
        if (array_key_exists($uri, $routes)) {
            require $routes[$uri];
        
        } else {
            abort();
        }
    }
    
    function abort($code = 404) {
        http_response_code($code);
        
        require "view/{$code}.php";
    
        die();
    }
    
    routeToController($uri, $routes);
?>