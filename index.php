<?php
require_once __DIR__ . '/boot.php';

$router = new Router();


$controllerName = ucfirst($router->controller) . 'Controller';
$controller = new $controllerName;
$controller->action($router->action);