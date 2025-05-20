<?php

// url param 'v' for view part to include to main container
$view = isset($_GET["v"]) ? $_GET["v"]: "home";
// url param 'r' for route which have to done action
$route = isset($_GET['r']) ? $_GET['r']: null;

// set the routes with desire path
$views = [
    "/" => '/views/home/index.php',
    "about" => '/views/about/index.php'
];

// this will include require container to main container
require_once __DIR__.$views[$view];