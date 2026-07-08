<?php

use Core\Validator;
use Core\App;

$errors = [];

$db = App::resolve(\Core\Database::class);

if(!Validator::checkEmail($_POST['email'])){
    $errors['email'] = 'Please provide a Valid email adddress';
}

if(!Validator::checkValiation($_POST['password'],7,255)){
    $errors['password'] = 'Please provide password with the min 7, max 255 character';
}

if(! empty($errors)){
    return view("registration/create.view.php",[
        "heading" => "Create Register",
        "errors"=> $errors
    ]);
}

$user = $db->query("SELECT * FROM users WHERE email = :email",[
    'email' => $_POST['email']
])->find();

if($user){
    $errors['email'] = 'Email is already used it';
    return view("registration/create.view.php",[
        "heading" => "Create Register",
        "errors"=> $errors
    ]);
}else{
     $db->query("INSERT INTO users(email,password) VALUES(:email,:password)",[
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'],PASSWORD_BCRYPT)
    ]);

    login([
        'email'=> $_POST['email']
    ]);

    header('location: /');
    exit();
}