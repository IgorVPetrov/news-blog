<?php

require_once __DIR__ . '/models/news.php';

require_once __DIR__ . '/view/view.php';

$template_path = __DIR__ . '/templates/';

$view = new View($template_path);

if(isset($_POST["title"])&&isset($_POST["text"]))
{
    $title = mysql_real_escape_string($_POST["title"]);
    $text = mysql_real_escape_string($_POST["text"]);
    
    if( false !== $title && false !== $text 
        && 0 !== strlen($title) &&  0 !== strlen($text))
    {
            $news_model = new News_Model();
            $news_model->add($title, $text);
            $view->message = "Новость добавлена";
    }
    else
    {
        $view->message =  "Заполните форму";
    }
}
$html = $view->display('addarticle.php');

echo $html;

