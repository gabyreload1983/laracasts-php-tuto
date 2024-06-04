<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;


$email = $_POST["email"];
$password = $_POST["password"];

$form = new LoginForm;

if($form->validate($email, $password)){
    $auth = new Authenticator();

    if($auth->attempt($email, $password)){
        redirect("/");
    } 

    $form->error( "password", "Email or password is wrong");
}

Session::flash("old",[
    "email" => $email,
]);

Session::flash("errors", $form->errors());

return redirect("/login");