<?php
//этот скрипт написан для тестирования класса Storage
require_once __DIR__ .'/view/storage.php';

$stor = new Storage();
$stor->one = 1;
$stor->due = 2;

echo count($stor) . "<br/>";

var_dump($stor->valid());
$stor->next();
var_dump($stor->valid());
$stor->next();
var_dump($stor->valid());
$stor->rewind();
var_dump($stor->valid());
echo "<br/>";
echo $stor->key() . " = " . $stor->current();
echo "<br/>";
$stor->next();
echo $stor->key() . " = " . $stor->current();
echo "<br/>";
foreach($stor as $key=>$value){
    echo $key . " = " . $value . "<br/>";
}
echo $stor->due;