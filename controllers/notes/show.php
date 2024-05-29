<?php 

$id = $_GET["id"];
$name = "Note {$id}";

$config = require base_path("config.php"); 
$db = new Database($config["database"]);


$note = $db->query("SELECT * FROM notes WHERE id = :id",[
    "id" => $_GET["id"]
])->findOrFail();



$currentUserId = 1;

authorize($note["user_id"] === $currentUserId);

view("notes/show.view.php", [
    "name" => $name,
    "note" => $note
]);