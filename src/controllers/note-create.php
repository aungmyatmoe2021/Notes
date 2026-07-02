<?php

$heading = "Create Note";

// Starting bind and display data
$db = new Database();
$validator = new Validator();

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $errors = [];

    if(!$validator->checkValiation($_POST['body'], 1, 1000)){
        $errors['body'] = 'A body of no more than 1,000 characters is required';
    }

    if(empty($errors)){
        $db->query("INSERT INTO notes(body,user_id) values(:body,:user_id)",[
            'body'=>$_POST['body'],
            'user_id'=> 1
        ]);
        header('Location: /notes');
    }
}

require "views/note-create.view.php";