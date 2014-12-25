<?php

class NewsController extends AController{
    
    protected function actionIndex(){
        $template_path = __DIR__ . '/../views/';

        $view = new View($template_path);
         
        $html = $view->display('index.php');

        echo $html;  
    }
    
    
    protected function actionAll(){
             
        $template_path = __DIR__ . '/../views/';

        $view = new View($template_path);
         
        $view->news = NewsModel::findAll();

        $html = $view->display('viewall.php');

        echo $html;
    }
    
    protected function actionGet_addform(){
        
        $template_path = __DIR__ . '/../views/';
        
        $view = new View($template_path);
           
        $html = $view->display('addform.php');

        echo $html;
        
    }
        protected function actionGet_viewform(){
        
        $template_path = __DIR__ . '/../views/';
        
        $view = new View($template_path);
        
        $html = $view->display('viewform.php');

        echo $html;
        
    }
    
    protected function actionAdd()
    {
        $template_path = __DIR__ . '/../views/';
        
        $view = new View($template_path);
        
        if(isset($_POST["title"])&&isset($_POST["text"]))
        {
            $news_model = new NewsModel();
            $news_model->title = $_POST["title"];
            $news_model->text = $_POST["text"];
            
            try{
                $news_model->save();
                $view->message = "Новость добавлена";
            }
            catch(PDOExceptionException $e)
            {
                $view->message = "Что то пошло не так";
            }
        }
        else
        {
            $view->message = "Неверный запрос";   
        }
        $html = $view->display('addarticle.php');
        echo $html;
        
    }
    protected function actionOne(){

        $template_path = __DIR__ . '/../views/';

        $view = new View($template_path);
        
        try{
            $view->article = NewsModel::findByPk($_GET["id"]);
            if(null === $view->article){
                $view->message = "Нет такой новости";   
            } 
        }
        catch(PDOException $e)
        {
            $view->message = "Проверьте корректность ввода номера";   
        }
        
        $html = $view->display('viewarticle.php');
        echo $html;   
    }
}
