<?php
use Core\Database;
use Core\Validator;


$currentUser = 1;
$errors = [];

$config = require base_path("config.php"); 
$db = new Database($config["database"]);


if(! Validator::string($_POST["body"], 1, 1000)){
   $errors["body"] = "A body of no more than 1000 characters is required.";
}

if(!empty($errors)){
   return view("notes/create.view.php", [
      "name" => "Create Note",
      "errors" => $errors
   ]);
}

$db->query("INSERT INTO notes(body, user_id) VALUES (:body, :user_id);",[
   "body" => $_POST["body"],
   "user_id" => $currentUser
]);

header("location: /notes");
exit();