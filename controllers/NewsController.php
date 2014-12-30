<?php
namespace Mynewsblog\controllers;
use \Mynewsblog\classes\Menu as Menu;
use \Mynewsblog\models\NewsModel as NewsModel;


class NewsController extends AController{
    
    private $menu;
    
    public function __construct(){
        parent::__construct();
        $this->menu = Menu::getMenu('config_umenu');
        
    }
    

    public function actionIndex(){
        
        $template = $this->twig->loadTemplate('userview.html.twig');
        echo $template->render(array('menu' => $this->menu));
        
    }
    
    
    public function actionAll(){
                 
        $template = $this->twig->loadTemplate('userviewall.html.twig');
        $news = NewsModel::findAll();
        echo $template->render(array('menu' => $this->menu, 'news' => $news ));
        
    }
    
    public function actionGet_addform(){
        
        $template = $this->twig->loadTemplate('useraddform.html.twig');
        $form['action'] = '/news/add';
        $form['title']  = 'Добавьте новость';       
        echo $template->render(array('menu' => $this->menu, 'form' => $form, ));
        
    }
    public function actionGet_viewform(){
        
        $template = $this->twig->loadTemplate('userviewidform.html.twig');
        $form['action'] = '/news/one';
        $form['title']  = 'Посмотреть новость';       
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
        $template = $this->twig->loadTemplate('useradd.html.twig');     
        echo $template->render(array('menu' => $this->menu, 'message' => $message, ));
        
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
        
        $template = $this->twig->loadTemplate('userviewarticle.html.twig');
        echo $template->render(array(
            'menu' => $this->menu, 
            'article' => $article,
            'message' => $message,
            ));
        
           
    }
}
