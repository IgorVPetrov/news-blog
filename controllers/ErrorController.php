<?php

class ErrorController extends AController{
    
    private $config;
    private $e;
    
    private function config(){
        return include __DIR__ . '/../config/config_err.php';
    }
    public function __construct(Exception $e) {
        
        $this->config = $this->config();
        $this->e = $e;
    }
    public function actionIndex(){
        
        if($this->config['debug']){
            var_dump($this->e);
        }
        else {
            echo "<h1>Что то пошло не так</h1>";
        }
        
        
    }
    
}
