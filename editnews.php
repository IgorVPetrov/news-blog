<?php

require_once __DIR__ . '/models/news.php';

$action = '/../editnews.php';

$article=null;

if(isset($_GET["id"]))
{

   $article = GetNewsById($id);

}



include __DIR__ . '/view/editnews.html.php';
