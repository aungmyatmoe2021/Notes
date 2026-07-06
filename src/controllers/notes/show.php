<?php

use Core\Database;
use Core\Response;

// Starting bind and display data
$db = new Database();

$note = $db->query("select * from notes where id = :id",[
    "id" => $_GET['id']
])->findOrFail();

// User Default ID (Temporary ID Now)
$userid = 1;

authorise($note['user_id'] == $userid, Response::FORBIDDEN);

view("notes/show.view.php",[
    "heading" => "Note",
    "note"=> $note
]);