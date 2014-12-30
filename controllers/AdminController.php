<?php
namespace Mynewsblog\controllers;
use \Mynewsblog\classes\Menu as Menu;
use \Mynewsblog\models\NewsModel as NewsModel;

class AdminController extends AController{
    
    
    private $menu;
    
    public function __construct(){
        parent::__construct();
        $this->menu = Menu::getMenu('config_amenu');
        
    }

    public function actionIndex(){
        $template = $this->twig->loadTemplate('adminview.html.twig');
        echo $template->render(array('menu' => $this->menu)); 
    }
    
    public function actionAll(){
             
        $template = $this->twig->loadTemplate('adminviewall.html.twig');
        $news = NewsModel::findAll();
        echo $template->render(array('menu' => $this->menu, 'news' => $news ));
    } 
    
    public function actionGet_viewform(){
        
        $template = $this->twig->loadTemplate('admingetidform.html.twig');
        $form['action'] = '/admin/one';
        $form['title']  = 'Посмотреть новость';       
        echo $template->render(array('menu' => $this->menu, 'form' => $form, ));
        
    }    
    public function actionOne(){

        $message=null;
        $article=null;
        try{
            $article = NewsModel::findByPk($_GET["id"]);
            if(false === $article){
                $message = "Нет такой новости";   
            } 
        }
        catch(\PDOException $e)
        {
            $message = "Проверьте корректность ввода номера";   
        }
        
        $template = $this->twig->loadTemplate('adminviewarticle.html.twig');
        echo $template->render(array(
            'menu' => $this->menu, 
            'article' => $article,
            'message' => $message,
            ));  
    }
    public function actionGet_addform(){
        
        $template = $this->twig->loadTemplate('adminaddform.html.twig');
        $form['action'] = '/admin/add';
        $form['title']  = 'Добавьте новость';       
        echo $template->render(array('menu' => $this->menu, 'form' => $form, ));
        
    }
    public function actionAdd()
    {
        $message;
        
        if(isset($_POST["title"])&&isset($_POST["text"]))
        {
            $news_model = new NewsModel();
            $news_model->title = $_POST["title"];
            $news_model->text = $_POST["text"];
            
            try{
                $news_model->save();
                $message = "Новость добавлена";
            }
            catch(\PDOException $e)
            {
                $message = "Что то пошло не так";
            }
        }
        else
        {
            $message = "Неверный запрос";   
        }
        $template = $this->twig->loadTemplate('adminviewmessage.html.twig');     
        echo $template->render(array('menu' => $this->menu, 'message' => $message, ));
        
    }
    public function actionGet_ideditform(){
        
        $template = $this->twig->loadTemplate('admingetidform.html.twig');
        $form['action'] = '/admin/get_editform';
        $form['title']  = 'Редактировать новость';       
        echo $template->render(array('menu' => $this->menu, 'form' => $form, ));
        
    }
    public function actionGet_editform(){
        
        $message=null;
        $article=null;
        $form=null;
        try{
            $article = NewsModel::findByPk($_GET["id"]);
            if(false === $article){
                $message = "Нет такой новости";   
            }
            else 
            {
                $form['action'] = '/admin/edit';
                $form['title']  = 'Редактируйте новость'; 
            }
        }
        catch(\PDOException $e)
        {
            $message = "Проверьте корректность ввода номера";   
        }
        $template = $this->twig->loadTemplate('admineditform.html.twig');
        echo $template->render(array(
            'menu' => $this->menu, 
            'article' => $article,
            'message' => $message,
            'form' => $form,
            ));
        
    }
    public function actionEdit(){
        
        
        $message=null;
        if(isset($_POST["title"])&&isset($_POST["text"]))
        {
            $news_model = new NewsModel();
            $news_model->title = $_POST["title"];
            $news_model->text = $_POST["text"];
            $news_model->id = $_POST["id"];
            
            try{
                $news_model->save();
                $message = "Новость изменена";
            }
            catch(\PDOException $e)
            {
                $message = "Что то пошло не так";
            }
        }
        else
        {
            $message = "Неверный запрос";   
        }
        $template = $this->twig->loadTemplate('adminviewmessage.html.twig');     
        echo $template->render(array('menu' => $this->menu, 'message' => $message, ));
  
    }
    
    
    
    
    
    public function actionGet_deleteform(){
        
        $template = $this->twig->loadTemplate('admingetidform.html.twig');
        $form['action'] = '/admin/delete';
        $form['title']  = 'Введите номер удаляемой новости';       
        echo $template->render(array('menu' => $this->menu, 'form' => $form, ));
        
    }
    public function actionDelete(){
        
        
        $message=null;
        try{
            
            NewsModel::deleteByPk($_GET["id"]);
            $message = "Новость ". $_GET["id"] . " удалена";   
             
        }
        catch(\PDOException $e)
        {
            $message = "Проверьте корректность ввода номера";   
        }
        $template = $this->twig->loadTemplate('adminviewmessage.html.twig');     
        echo $template->render(array('menu' => $this->menu, 'message' => $message, ));
        
        
    }
}

