<?php

class Storage implements 
              Countable,
              Iterator
{ 
    private $data;
    
    
    public function __construct() { 
        
        $this->data = [];
    }
    
    public function __get($key) {
        return $this->data[$key];
    }
    
    public function __set($key,$value){  
        
        $this->data[$key] = $value;
        
    }

    public function count() {  
        
        return count($this->data);
    }

    public function current() {
       
       return current($this->data);
    }

    public function key() {
       
        return key($this->data);
    }

    public function next() { 
        
        next($this->data);
    }

    public function rewind() {
        
        reset($this->data);
    }

    public function valid() {
        
        return null === key($this->data) ? false : true ;
    }

}

