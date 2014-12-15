<?php

class Storage implements 
              Countable,
              Iterator
{ 
    private $data;
    private $iterator;
    
    public function __construct() {
        
        $this->data = [];
        //для обслуживания массива используется 
        //встроенный РНР класс ArrayIterator
        //так же с его помощью реализуются методы интерфейса Iterator
        $this->iterator = new ArrayIterator($this->data);
        
    }
    
    public function __get($key) {
        
        return $this->data[$key];
    }
    
    public function __set($key,$value){  
        
        $this->data[$key] = $value;
        //каждый раз при изменении массива нужно создавать 
        //новый экземпляр класса ArrayIterator
        $this->iterator = new ArrayIterator($this->data);
    }

    public function count() {  
        
        return count($this->data);
    }

    public function current() {
       
       return $this->iterator->current();
    }

    public function key() {
       
        return $this->iterator->key();
    }

    public function next() { 
        
        $this->iterator->next();
    }

    public function rewind() {
        
        $this->iterator->rewind();
    }

    public function valid() {
        
        return $this->iterator->valid();
    }

}

