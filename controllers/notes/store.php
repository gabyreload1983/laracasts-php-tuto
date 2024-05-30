<?php

use Core\App;
use Core\Validator;


$currentUser = 1;
$errors = [];


$db = App::resolve('Core\Database');


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