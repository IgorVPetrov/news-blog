<?php

require_once __DIR__ . '/models/news.php';

$news = new News();

$articles = $news->getAll();

include 'view/index.php';