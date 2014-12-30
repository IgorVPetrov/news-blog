<?php

function exception_error_handler($errno, $errstr, $errfile, $errline ) {
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
}
set_error_handler("exception_error_handler");

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/vendor/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();





function nsAutoload($name){
    
    $name_parts = array_reverse(explode('\\', $name ));
    array_pop($name_parts );
    $filename = __DIR__ . '\\' . array_pop($name_parts ) . '\\' . array_pop($name_parts ) . '.php';
    if(file_exists($filename)){
        require_once $filename; 
    }
    else 
    {
       return false; 
    }
    
}


spl_autoload_register('nsAutoload');