<?php

require 'functions.php';
require 'Database.php';
// require 'router.php';
$config = require('config.php');
         
// dd($_SERVER);
$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from posts where id = ?";


$post = $db->query($query, [$id])->fetchAll();

dd($post);

// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }