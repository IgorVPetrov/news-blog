<?php

require_once __DIR__ . '/models/news.php';

$action = '/../viewnews.php';


if(isset($_GET["id"]))
{

   $article = GetNewsById($id);

}


include __DIR__ . '/view/viewnews.html.php';