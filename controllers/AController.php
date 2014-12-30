<?php
namespace Mynewsblog\controllers;

abstract class AController{
    
    protected $twig;
    
    public function action($name)
    {
        $actionName = 'action'.ucfirst($name);
        if(method_exists($this, $actionName)){
            $this->$actionName();
        }
        
    }
    
    public function __construct() {
        $template_path = __DIR__ . '/../templates/';
        $loader = new \Twig_Loader_Filesystem($template_path); 
        $this->twig = new \Twig_Environment($loader, 
                array( 'cache' => $template_path . 'compilation_cache', 

        ));
    }
    
    
}

