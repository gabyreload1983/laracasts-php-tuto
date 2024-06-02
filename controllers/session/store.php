<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST["email"];
$password = $_POST["password"];
$errors = [];

$db = App::resolve(Database::class);

if(!Validator::email($email)){
    $errors["email"] = "Please provide a valid email address";
}

if(!Validator::string($password)){
    $errors["password"] = "Please enter a valid password.";
}

if(!empty($errors)){
    return view("session/create.view.php",[
        "errors" => $errors,
    ]);
}

$user = $db->query("SELECT * FROM users WHERE email = :email",[
    "email" => $email
])->find();

if($user && password_verify($password,$user["password"])){
    login([
        "email" => $email
    ]);
    
    header("location: /");
    exit();
}


return view("session/create.view.php",[
    "errors" => [
        "password" => "Email or password is wrong"
    ],
]);