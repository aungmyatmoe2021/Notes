<?php

use Core\Validator;
use Core\Response;
use Core\App;

$errors = [];

$db = App::resolve(\Core\Database::class);

$note = $db->query("select * from notes where id = :id",[
    "id" => $_POST['id']
])->findOrFail();

// User Default ID (Temporary ID Now)
$userid = 1;

authorise($note['user_id'] == $userid, Response::FORBIDDEN);

if(! Validator::checkValiation($_POST['body'], 1, 1000)){
    $errors['body'] = 'A body of no more than 1,000 characters is required';
}

if(! empty($errors)){
    return view("notes/edit.view.php",[
        "heading" => "Update Note",
        "note" => $note,
        "errors"=> $errors
    ]);
}

 $db->query("UPDATE notes SET body = :body WHERE id = :id",[
    'body'=>$_POST['body'],
    'id'=> $_POST['id']
]);
header('Location: /notes');
die();