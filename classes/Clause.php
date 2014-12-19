<?php

abstract class Clause{
    
    public $title;
    public $text;
    
    abstract public function getAll();
    abstract public function getById($id);
    abstract public function add($title,$text);
    

}
