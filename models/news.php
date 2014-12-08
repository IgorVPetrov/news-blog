<?php

require_once __DIR__ . '/../functions/db.php';

function News_getAll()
{
    return DBQuery("
    SELECT * FROM news
    ");
}

function Add_News()
{
    if(isset($_POST["title"])&&isset($_POST["text"]))
    {
        $title = mysql_real_escape_string($_POST["title"]);
        $text = mysql_real_escape_string($_POST["text"]);
    
    
        if( false !== $title && false !== $text 
            && 0 !== strlen($title) &&  0 !== strlen($text))
        {
        
            DBQuery("
                    INSERT 
                    INTO `news`(`title`,`text`)
                    VALUES('$title' , '$text')
            "); 
            
            echo "Новость добавлена";
        }
        else
        {
            echo "Заполните форму";
        
        }
    }
    else 
    {
        echo "Функция вызвана неверно";
    }
}

function GetNewsById($id)
{
    if(isset($_GET['id']))
    {

        $id = mysql_real_escape_string($_GET["id"]);
      
        $res = DBQuery("
            SELECT * FROM `news` WHERE `id`='$id'
        ");
        return $res[0];
    }
    else 
    {
        return [];
    }
    
    
}