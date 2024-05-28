<?php

require "functions.php"; 
// require "router.php"; 
require "Database.php"; 

$config = require "config.php"; 

$db = new Database($config["database"]);

$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);
$post = $db->query("SELECT * FROM posts LIMIT 1")->fetch(PDO::FETCH_ASSOC);



foreach($posts as $post){
    echo "<li>" . $post["title"] . "</li>";
}

echo "<p>" . $post["title"] . "<p>";