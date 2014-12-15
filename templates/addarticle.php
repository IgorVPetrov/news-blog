<!DOCTYPE html>
<html>
    <head>
        <title>Добавить новость</title>
        <meta charset="UTF-8">
        <style>
            fieldset{width: 300px;}   
            input[type="text"]{width:340px;}
            legend{font-weight: bold;}  
        </style>
    </head>
    <body>
        <div>
            <fieldset>
                <legend>Добавьте новость</legend> 
                <form action="addarticle.php" method="POST">
                    <span>Заголовок</span><br/>
                    <input type="text" name="title"><br/>
                    <span>Текст новости</span><br/>
                    <textarea name="text" cols="40" rows="8"/></textarea><br/>
                    <input type="submit" value="Отправить"/>
                </form>
            </fieldset>
            <?php if(isset($message)): ?>
                <?=$message;?>
            <?php endif; ?>
        </div>
    </body>
</html>


