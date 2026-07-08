<?php

use Core\Response;
use Core\App;

$db = App::resolve(\Core\Database::class);

$note = $db->query("select * from notes where id = :id",[
    "id" => $_POST['id']
])->findOrFail();

authorise($note['user_id'] == $_SESSION['user']['user_id'] ?? '0', Response::FORBIDDEN);

$status = $db->query("DELETE FROM notes where id = :id",[
    "id" => $_POST['id']
]);

header("location: /notes");
exit();
