<?php

use Core\Response;

$routes = require base_path("routes.php");
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function routeToController($uri,$routes){
    if(array_key_exists($uri,$routes)){
        require base_path($routes[$uri]);
    }else{
        absort(Response::NOT_FOUND);
    }
}
function absort($errorCode = 404){
    http_response_code($errorCode);
    require base_path("controllers/error.php");
    die();
}

routeToController($uri,$routes); 