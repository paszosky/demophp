<?php

require 'functions.php';
require 'Database.php';
// require 'router.php';
         
// dd($_SERVER);



$db = new Database();

$post = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);

dd($post);

// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }