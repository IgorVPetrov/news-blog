<?php
namespace Mynewsblog\models;
use \Mynewsblog\models\AModel as Model;

class NewsModel extends Model{
    
    static protected $table = "news";
    static protected $columns = ['title','text'];
    
    public $title;
    public $text;
    
    
    
   
}