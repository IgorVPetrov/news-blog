<?php

class View extends Storage {
    
    private $template_path;
    
    public function __construct($template_path) {
        
        parent::__construct();

        $this->template_path = $template_path;
    }
    
    public function display($template)
    {
        foreach($this as $key => $value){
            
            //здесь неявно создаются переменные с именами 
            //равными значениям ключей масива
            //и в них заносятся элементы массива, соответсвующие этим ключам
            // МАГИЯ!!!!
            $$key = $value;
        }
        ob_start();
        require $this->template_path . $template;
        return ob_get_clean ();
    }
    
    
}

