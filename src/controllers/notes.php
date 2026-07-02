<?php

$heading = "My Notes";

$db = new Database();

$notes = $db->query("select * from notes where user_id = :id",["id" => 1])->findAll();

require "views/notes.view.php";