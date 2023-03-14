<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

// dd($_SERVER);

// echo ($_SERVER['REQUEST_URI']);

// if ($_SERVER['REQUEST_URI'] === '/www/demophp/') {
//     echo 'bg-gray-900 text-white';
// } else {
//     echo 'text-gray-300';
// }

// alterantywne zapisanie ifa
// echo $_SERVER['REQUEST_URI'] === '/www/demophp/' ? 'bg-gray-900 text-white' : 'text-gray-300';

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}