<?php 

$name = "My Notes";

$config = require "config.php"; 
$db = new Database($config["database"]);

$query = "SELECT * FROM notes WHERE user_id = ?";

$notes = $db->query($query,[1])->get();

require "views/notes.view.php"; 