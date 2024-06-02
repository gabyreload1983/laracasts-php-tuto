<?php

use Core\App;

$currentUserId = 1;

$db = App::resolve('Core\Database');


$note = $db->query("SELECT * FROM notes WHERE id = :id",[
    "id" => $_POST["id"]
])->findOrFail();


authorize($note["user_id"] === $currentUserId);

$db->query("DELETE FROM notes WHERE id = :id",[
    "id" => $_POST["id"]
]);

header("location: /notes");
exit();