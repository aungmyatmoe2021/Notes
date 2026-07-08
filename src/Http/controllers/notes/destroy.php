<?php

use Core\Response;
use Core\App;

$db = App::resolve(\Core\Database::class);

$note = $db->query("select * from notes where id = :id",[
    "id" => $_POST['id']
])->findOrFail();

// User Default ID (Temporary ID Now)
$userid = 1;

authorise($note['user_id'] == $userid, Response::FORBIDDEN);

$status = $db->query("DELETE FROM notes where id = :id",[
    "id" => $_POST['id']
]);

header("location: /notes");
exit();
