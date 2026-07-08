<?php

use Core\App;

$db = App::resolve(\Core\Database::class);

$notes = $db->query("select * from notes where user_id = :id",["id" => $_SESSION['user']['user_id'] ?? '0'])->findAll();

view("notes/index.view.php",[
    "heading" => "My Notes",
    "notes"=> $notes
]);