<?php
echo "Hello Word<br>";//комментарий
echo date(DATE_RSS) . "<br>";#комментарий
require 'Second.php'; //добавка 2 файла
//require 'Third.php'; //добавка 2 файла
$asd=4;
$check="";
//echo "\$asd<br>";
//echo `ls -l`;
//echo "hello word";
//echo "some word";
$a=12.5;
$b="34";

echo $a. $b;
//print(a+float(b))


echo gettype(156);
if (isset($check))
{
    echo "<br>NC";
}
else{
    echo "<br>notnc";
}
if (empty($check))
{
    echo "<br>NC";
}
else{
    echo "<br>notnc";
}

echo "<br>". PHP_VERSION;

//define('FOR_VAR',1)
echo "<br>".__LINE__;
//выводит номер строки
echo "<br>".__FILE__;//Путь к файлу
?>;
