<!DOCTYPE html>
<html>
<head>
    <title>Просмотр новости по ID</title>
    <meta charset="UTF-8">
    <style>
        fieldset{width: 250px;}   
        input[type="text"]{width:150px;margin-bottom: 8px;}
        legend{font-weight: bold;}  
    </style>
</head>
<body>
    
    <?php require 'articlegetform.php'; ?>
    
    <?php if(isset($message)): ?>
        <?=$message;?>   
    <?php else: ?>
        <h1><?=$article['title'] . " " . $article['id'];?></h1>
        <div><?=$article['text'];?></div>
    <?php endif; ?>
    
</body>
</html>



