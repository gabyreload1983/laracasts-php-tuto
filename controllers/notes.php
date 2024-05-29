<?php 

$name = "My Notes";

$config = require "config.php"; 
$db = new Database($config["database"]);

$query = "SELECT * FROM notes WHERE user_id = ?";

$currentUserId = 1;

$notes = $db->query($query,[$currentUserId])->get();

require "views/notes.view.php"; 