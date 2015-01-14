<?php

require_once __DIR__ . '/vendor/autoload.php';


function nsAutoload($name){
    
    $name_parts = explode('\\', $name );
    $name_parts = array_reverse($name_parts);
    array_pop($name_parts );
    $filename = __DIR__ . '/' . array_pop($name_parts ) . '/' . array_pop($name_parts ) . '.php';
    if(file_exists($filename)){
        require_once $filename; 
    }
    else 
    {
       return false; 
    }
    
}


spl_autoload_register('nsAutoload');