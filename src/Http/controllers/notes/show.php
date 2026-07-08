<?php

use Core\Response;
use Core\App;

$db = App::resolve(\Core\Database::class);

$note = $db->query("select * from notes where id = :id",[
    "id" => $_GET['id']
])->findOrFail();

authorise($note['user_id'] == $_SESSION['user']['user_id'] ?? '0', Response::FORBIDDEN);
    
view("notes/show.view.php",[
    "heading" => "Note",
    "note"=> $note
]);