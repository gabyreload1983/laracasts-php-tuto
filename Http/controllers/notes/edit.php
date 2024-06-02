<?php

use Core\App;

$id = $_GET["id"];
$name = "Edit Note {$id}";
$currentUserId = 1;

$db = App::resolve('Core\Database');

$note = $db->query("SELECT * FROM notes WHERE id = :id",[
    "id" => $id
])->findOrFail();


authorize($note["user_id"] === $currentUserId);

view("notes/edit.view.php", [
    "name" => $name,
    "note" => $note,
    "errrs" => []
]);