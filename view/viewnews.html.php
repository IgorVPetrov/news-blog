<!DOCTYPE html>
<html>
<head>
    <title>Новость <?=$article['id'];?></title>
    <meta charset="UTF-8">
    <style>
        fieldset{width: 100px;}   
        input[type="text"]{width:100px;margin-bottom: 8px;}
        legend{font-weight: bold;}  
    </style>
</head>
<body>
    
    <?php include 'newsgetform.html.php'; ?>
    
    <?php if(null === $article && isset($_GET['id'])): ?>
    "Нет новости с таким номером
    <?php endif; ?>
    
    <h1><?=$article['title'] . " " . $article['id'];?></h1>
    <div><?=$article['text'];?></div>
    
    
</body>
</html>


