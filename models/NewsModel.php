<?php

class NewsModel extends AModel{
    
    static protected $table = "news";
    static protected $columns = ['title','text'];
    
    public $title;
    public $text;
    
    
    
   
}