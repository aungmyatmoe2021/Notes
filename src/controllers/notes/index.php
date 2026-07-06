<?php

use Core\Database;

$db = new Database();

$notes = $db->query("select * from notes where user_id = :id",["id" => 1])->findAll();

view("notes/index.view.php",[
    "heading" => "My Notes",
    "notes"=> $notes
]);