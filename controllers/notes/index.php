<?php 

use Core\Database;

$config = require base_path("config.php"); 
$db = new Database($config["database"]);

$query = "SELECT * FROM notes WHERE user_id = ?";

$currentUserId = 1;

$notes = $db->query($query,[$currentUserId])->get();

view("notes/index.view.php", [
    "name" => "My Notes",
    "notes" => $notes
]);