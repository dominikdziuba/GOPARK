<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('index', 'DefaultController');
Router::get('panels', 'DefaultController');
Router::post('login', 'SecurityController');
Router::post('addCar', 'CarController');

Router::run($path);