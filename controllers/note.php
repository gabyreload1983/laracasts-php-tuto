<?php 

$id = $_GET["id"];
$name = "Note {$id}";

$config = require "config.php"; 
$db = new Database($config["database"]);


$query = "SELECT * FROM notes WHERE id = ?";

$note = $db->query($query,[$id])->fetch();

require "views/note.view.php"; 