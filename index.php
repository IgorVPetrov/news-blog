<?php

require_once __DIR__ . '/boot.php';

use Mynewsblog\classes\Router as Router;


$router = new Router();
   
$controllerName = 'Mynewsblog\controllers\\' .ucfirst($router->controller) . 'Controller';
$controller = new $controllerName;
$controller->action($router->action);


   