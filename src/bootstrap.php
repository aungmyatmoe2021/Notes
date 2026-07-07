<?php

use Core\Container;
use Core\Database;
use Core\App;

$container = new Container();

$container->bind('Core\Database', function(){
   return new Database();
});

App::setContainer($container);