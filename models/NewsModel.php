<?php

class NewsModel extends Clause{
    
    private $db;
    
    public function __construct()
    {
        $this->db = new Db();   
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
            SELECT * FROM `news` WHERE `id`=" . $id 
        );
        return $res[0];
        
    }
    
    public function add($title,$text)
    {
        $this->db->query("
                    INSERT 
                    INTO `news`(`title`,`text`)
                    VALUES('" . $title . "' , '" . $text ."')
                   "); 
    }
}