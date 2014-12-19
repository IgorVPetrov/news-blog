<form action=<?=$url ;?> method="GET">
    <fieldset id="newsgetform-fieldset"> 
        <legend>Введите номер новости</legend>
        <input type="text" name="id" /><br/>
        <input type="hidden" name="route" value=<?=$action ;?>/>
        <input type="submit" value="Отправить"/>
    </fieldset>    
</form>


