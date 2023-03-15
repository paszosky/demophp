<?php

require 'functions.php';
require 'Database.php';
// require 'router.php';
$config = require('config.php');
         
// dd($_SERVER);



$db = new Database($config['database']);

$post = $db->query("select * from posts")->fetchAll();

dd($post);

// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }