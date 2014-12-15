<?php

require_once __DIR__ . '/models/news.php';

require_once __DIR__ . '/view/view.php';

$template_path = __DIR__ . '/templates/';

$view = new View($template_path);

$view->action = '../viewarticle.php';

if(!isset($_GET["id"])) {
    
    //если просто загрузили эту страницу
    $view->message = "";
}
else if("" === $_GET["id"] ) {
    
    //если нажали "Отправить" но не ввели номер
    $view->message = "Введите номер новости";
}
else {
    
   $id = trim($_GET["id"]);
   
   //проверяем , состоит ли номер только из цифр
   if(0 !== preg_match("~^[0-9]+$~", $id )){
       
       $news_model = new News_Model();
       //проверяем есть ли новость с таким номером
       if(null !== $article = $news_model->getById($id)){
  
           $view->article = $article;
       }
       else{
           
           $view->message = "Нeт новости с таким номером";
       }
   }
   else{
       
       $view->message = "Номер новости должен быть числом";
       
   }

}

$html = $view->display('viewarticle.php');

echo $html;