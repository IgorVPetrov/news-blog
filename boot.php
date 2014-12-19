<?php

function classesAutoload($name)
{
    $filename = __DIR__ . '/classes/' . $name . '.php';
    if(file_exists($filename)){
        require_once $filename;
        
    }
          
}

spl_autoload_register('classesAutoload');

function controllersAutoload($name)
{ 
    $filename = __DIR__ . '/controllers/' . $name . '.php';
    if(file_exists($filename)){
        require_once $filename;
        
    }  
}

spl_autoload_register('controllersAutoload');

function modelsAutoload($name)
{ 
    $filename = __DIR__ . '/models/' . $name . '.php';
    if(file_exists($filename)){
        require_once $filename;
        
    }  
}

spl_autoload_register('modelsAutoload');