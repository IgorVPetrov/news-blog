<?php

require_once __DIR__ . '/models/news.php';

$action = '/../viewnews.php';

$article = null;
$id = null;
if(isset($_GET["id"]) && null !== $_GET["id"])
{
   $id = mysql_real_escape_string($_GET["id"]);
   $news = new News();
   $article = $news->getById($id);

}

include __DIR__ . '/view/viewnews.html.php';