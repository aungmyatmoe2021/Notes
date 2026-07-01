<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/contact" => "controllers/contact.php",
    "/error" => "controllers/error.php"
];


function routeToController($uri,$routes){
    if(array_key_exists($uri,$routes)){
        require $routes[$uri];
    }else{
        absort(404, $routes);
    }
}
function absort($errorCode = 404, $routes = []){
    http_response_code($errorCode);
    require $routes['/error'];
    die();
}

routeToController($uri,$routes); 