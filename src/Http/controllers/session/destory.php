<?php

use Core\Authenticator;

// dd(base_path('Core/Authenticator.php'));

$auth = new Authenticator();

$auth->logout();

header('location: /');
exit();