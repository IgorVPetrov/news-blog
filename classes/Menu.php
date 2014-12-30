<?php

namespace Mynewsblog\classes;

class Menu {
    
    public static function getMenu($menu_config){
    
        return require __DIR__ . '/../config/' . $menu_config . '.php';
         
    }  
}

