<?php

use Core\Response;
use Core\App;

$db = App::resolve(\Core\Database::class);

$note = $db->query("select * from notes where id = :id",[
    "id" => $_GET['id']
])->findOrFail();

// User Default ID (Temporary ID Now)
$userid = 1;

authorise($note['user_id'] == $userid, Response::FORBIDDEN);

view("notes/edit.view.php",[
    "heading" => "Edit Note",
    "note" => $note,
    "errors"=> []
]);