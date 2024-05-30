<?php

use Core\App;
use Core\Database;

$id = $_GET["id"];
$name = "Note {$id}";
$currentUserId = 1;

$db = App::resolve('Core\Database');

$note = $db->query("SELECT * FROM notes WHERE id = :id",[
    "id" => $id
])->findOrFail();


authorize($note["user_id"] === $currentUserId);

view("notes/show.view.php", [
    "name" => $name,
    "note" => $note
]);