<?php
require_once __DIR__ . '/boot.php';

$router = new Router();

try{
   $controllerName = ucfirst($router->controller) . 'Controller';
   $controller = new $controllerName;
   $controller->action($router->action);
}
catch(Exception $e){
   $controller = new ErrorController($e);
   $controller->actionIndex(); 
}