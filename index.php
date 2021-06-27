<?php

require_once __DIR__ . '/vendor/autoload.php';
use app\core\Application;
use app\core\Router;

$app = new Application();

$router = new Router();
$app->router->get('/', function(){
    return 'Hello World';
});

$app->run();