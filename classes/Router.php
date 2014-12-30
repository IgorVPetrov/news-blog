<?php

namespace Mynewsblog\classes;

class Router{
    
    public $controller;
    public $action;
    
    public function __construct() {
        
        $uri = substr($_SERVER ['REQUEST_URI'],1);
        
        
        try{
            
            $uri_parts = array_reverse(preg_split('~\/|\?~', $uri));
        
            if(2 > count($uri_parts)){
                throw new \Exception();
            }
            $controller = array_pop($uri_parts);
            
            $controller_class = 'Mynewsblog\controllers\\' .ucfirst($controller)."Controller";
            
            if (!class_exists($controller_class)) 
            {
                throw new \Exception(); 
            }
            
            $this->controller = $controller; 
       
            $action = array_pop($uri_parts);
            
            if( false === array_search('action' . ucfirst($action), 
                    get_class_methods($controller_class)))
            {
                throw new \Exception();
            }
            
            $this->action = $action;
  
            $this->fillGET($uri_parts);
           
        }
        catch (\Exception $e)
        {        
            $this->controller = 'news'; 
            $this->action = 'index';   
        }
    }     

    private function fillGET($array){
        
        while(null !== $param = \array_pop($array)){
            $_GET[$param] = \array_pop($array);
        }
    
    }
    
    
    
    
}

