<?php

class NewsController extends AController{
    
    protected function actionAll(){
             
        $template_path = __DIR__ . '/../views/';

        $news_model = new NewsModel();

        $view = new View($template_path);

        $view->news = $news_model->getAll();

        $html = $view->display('index.php');

        echo $html;
    }
    
    protected function actionAdd()
    {
        $template_path = __DIR__ . '/../views/';

        $view = new View($template_path);
        
        $view->url = 'index.php?route=news/add';

        if(isset($_POST["title"])&&isset($_POST["text"]))
        {
            $title = mysql_real_escape_string($_POST["title"]);
            $text = mysql_real_escape_string($_POST["text"]);
    
            if( false !== $title && false !== $text 
              && 0 !== strlen($title) &&  0 !== strlen($text))
            {
                $news_model = new NewsModel();
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
        
    }
    protected function actionOne(){

       
        $template_path = __DIR__ . '/../views/';

        $view = new View($template_path);
        
        $view->url = 'index.php';
        
        $view->action = 'route=news/one';

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
       
                $news_model = new NewsModel();
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
        
        
        
        
    }
}
