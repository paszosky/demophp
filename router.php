<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// dd($uri);



// if ($uri === '/www/demophp/') {
    
//     require('controllers/index.php');

// } else if ($uri === '/www/demophp/about') {

//     require 'controllers/about.php';

// } else if ($uri === '/www/demophp/contact') {

//     require 'controllers/contact.php';

// } else if ($uri === '/www/demophp/mission') {

//     require 'controllers/mission.php';

// }

$routes = [
    '/www/demophp/' => 'controllers/index.php',
    '/www/demophp/about' => 'controllers/about.php',
    '/www/demophp/contact' => 'controllers/contact.php',
    '/www/demophp/mission' => 'controllers/mission.php',
];

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

// domyslny argument = 404 (ale mozna go zmienic)
function abort($code = 404) { 
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);