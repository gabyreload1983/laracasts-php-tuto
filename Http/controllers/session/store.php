<?php

use Core\Authenticator;
use Http\Forms\LoginForm;


$email = $_POST["email"];
$password = $_POST["password"];

$form = LoginForm::validate([
    "email" => $email,
    "password" => $password,
]);

$signIn = (new Authenticator)->attempt($email, $password);

if(!$signIn){
    $form->error( "password", "Email or password is wrong")->throw();
} 

redirect("/");