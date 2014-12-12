<?php

require_once __DIR__ . '/models/news.php';

if(isset($_POST["title"])&&isset($_POST["text"]))
{
    $title = mysql_real_escape_string($_POST["title"]);
    $text = mysql_real_escape_string($_POST["text"]);
    
    if( false !== $title && false !== $text 
        && 0 !== strlen($title) &&  0 !== strlen($text))
    {
            $news = new News();
            $news->add($title, $text);
            echo "Новость добавлена";
    }
    else
    {
        echo "Заполните форму";
        require_once 'view/addnews.html.php';
    }
}
else 
{
    require_once 'view/addnews.html.php';
}

