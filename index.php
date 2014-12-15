<?php

require_once __DIR__ . '/models/news.php';

require_once __DIR__ . '/view/view.php';

$template_path = __DIR__ . '/templates/';

$news_model = new News_Model();

$view = new View($template_path);

$view->news = $news_model->getAll();

$html = $view->display('index.php');

echo $html;