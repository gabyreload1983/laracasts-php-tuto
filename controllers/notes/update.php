<?php


use Core\App;
use Core\Validator;

$id = $_POST["id"];
$body = $_POST["body"];
$currentUserId = 1;
$errors = [];


$db = App::resolve('Core\Database');

$note = $db->query("SELECT * FROM notes WHERE id = :id",[
    "id" => $id
])->findOrFail();


authorize($note["user_id"] === $currentUserId);

if(! Validator::string($body, 1, 1000)){
    $errors["body"] = "A body of no more than 1000 characters is required.";
 }
 
 if(!empty($errors)){
    return view("notes/edit.view.php", [
       "name" => "Edit Note",
       "errors" => $errors,
       "note" => $note
    ]);
 }

$note = $db->query("UPDATE notes SET body = :body WHERE id = :id",[
    "id" => $id,
    "body" => $body
]);


header("location: /notes");
exit();