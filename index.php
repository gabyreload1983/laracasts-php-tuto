<?php

require "functions.php"; 
require "Database.php"; 

// require "router.php"; 


$db = new Database();

$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);
$post = $db->query("SELECT * FROM posts LIMIT 1")->fetch(PDO::FETCH_ASSOC);



foreach($posts as $post){
    echo "<li>" . $post["title"] . "</li>";
}

echo "<p>" . $post["title"] . "<p>";