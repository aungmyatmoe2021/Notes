<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH."Core/functions.php";

spl_autoload_register(function($class){
    $class = base_path(str_replace('\\',DIRECTORY_SEPARATOR,$class).".php");
    if(file_exists($class)){
        require_once $class;
    }
});
require base_path("Core/router.php");

