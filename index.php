<?php

require 'functions.php';
// require 'router.php';
         
// dd($_SERVER);

// connect to database
$dsn = "mysql:host=localhost;port=3306;user=root;dbname=demophp;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts where id=1");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}