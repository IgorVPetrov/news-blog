<!DOCTYPE html>
<html>
<head>
    <title>Новости</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div id="page-index">
        
        <?php include "menu.php"; ?>
    
        <?php foreach ($news as $article): ?>
            <div class="title"><?=$article->title;?></div>
            <div class="text"><?=$article->text;?></div>
         <?php endforeach; ?>
        
    </div>
</body>
</html>



