<?php

use Core\App;

$db = App::resolve('Core\Database');

$query = "SELECT * FROM notes WHERE user_id = ?";

$currentUserId = 1;

$notes = $db->query($query,[$currentUserId])->get();

view("notes/index.view.php", [
    "name" => "My Notes",
    "notes" => $notes
]);