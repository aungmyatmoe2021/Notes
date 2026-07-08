<?php

use Core\Validator;
use Core\App;

$errors = [];

$db = App::resolve(\Core\Database::class);

if(!Validator::checkValiation($_POST['body'], 1, 1000)){
    $errors['body'] = 'A body of no more than 1,000 characters is required';
}

if(! empty($errors)){
    return view("notes/create.view.php",[
        "heading" => "Create Note",
        "errors"=> $errors
    ]);
}

if(empty($errors)){
    $db->query("INSERT INTO notes(body,user_id) values(:body,:user_id)",[
        'body'=>$_POST['body'],
        'user_id'=> $_SESSION['user']['user_id'] ?? '0'
    ]);
    header('Location: /notes');
    die();
}