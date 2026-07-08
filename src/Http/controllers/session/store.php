<?php

use Core\App;
use Http\Form\LoginForm;
use Core\Authenticator;

$errors = [];

$form = new LoginForm();
$auth = new Authenticator();
if(!$form->validate($_POST['email'],$_POST['password'])){
    $auth->redirectURL($form->getErrors());
    exit();
}

$auth->attempt($_POST['email'],$_POST['password']);