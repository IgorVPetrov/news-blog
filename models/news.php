<?php

require_once 'clause.php';
require_once 'db.php';

class News extends Clause{
    
    private $db;
    
    public function __construct()
    {
        $this->db = new DataBase();   
    }
    
    public function getAll()
    {
        return $this->db->query("
               SELECT * FROM news
               ");  
    }
    
    public function getById($id)
    {
        $res = $this->db->query("
            SELECT * FROM `news` WHERE `id`='$id'
        ");
        return $res[0];
        
    }
    
    public function add($title,$text)
    {
        $this->db->query("
                    INSERT 
                    INTO `news`(`title`,`text`)
                    VALUES('$title' , '$text')
                   "); 
    }
}