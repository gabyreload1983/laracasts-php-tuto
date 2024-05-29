<?php 

$id = $_GET["id"];
$name = "Note {$id}";

$config = require "config.php"; 
$db = new Database($config["database"]);


$note = $db->query("SELECT * FROM notes WHERE id = :id",[
    "id" => $_GET["id"]
])->findOrFail();



$currentUserId = 1;

authorize($note["user_id"] === $currentUserId);

require "views/notes/show.view.php"; 