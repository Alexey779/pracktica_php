<?php
t4(); //вызов функции выше самой функции
echo "\n";
//работа функций с глобальной областью видимости
$r1 = 70;
function t1() {
     global $r1; // теперь функция может прочитать значение
    $r = 60;
    $r1 = $r; // мы можем перезаписать глобальное значение
    echo $r1,"\n"; //выводим значение
    echo $r;
}

t1();

//функции можно вызывать до создания ( )
function t4 ( ) {
    echo "функция вызвана!!!";


}

echo "\n";
//функция внутри другой функции
function t5 () {
    $f = 200;
    function t6 () { //функцию t6() можно вывести только когда запустить функцию t5()
        $f1 = 300;
        echo $f1, "\n";
    }
    
    echo $f, "\n";
}

t5();
t6();

$e = 40000;
$l = 600;

function t8 () { //функция выполняет замену значения на другое значение
    global $e, $l;
    if ($e > $l) {
       $x = $e;
       $e = $l;
       $l = $x;
    }
echo $e."\n";
echo $l. "\n";

}


t8();


$e = 4;
$l = 6;
t8();
//работа со строками

$z = "Tvin Picks";
$out = ''; //перебор строки
for ($i = 0; $i < strlen($z); $i = $i + 1) {
    $out = $out. $z[$i];

}
echo $out;
echo "\n";

//реверс строки
 echo strrev($out);
 
 $m = "hello world!!"; //перебор строки

 $q = '';

 for($i = 0; $i < strlen($m); $i++) {
    $q = $q.$m[$i]."_";
 }
echo "\n";
 echo $q;
 //реверс строки
echo "\n";
 $f = strrev($q);
 echo $f. "\n";
 //поиск строки в подстроке

 $dic = "Richard Gir";
 $dic2 = str_contains($dic, 'r'); //ищем строку, подстроку

 //неприятная особенность
 $dic = "Richard Gir";
 $dic2 = str_contains($dic, ''); // пустая строка - true 
 var_dump($dic2);
 //поиск подстроки - индекс
//если не найдено -   false
 $dic3 = strpos($dic, "c" );// первый индекс начала подстроки в строке
 var_dump($dic3);
 echo $dic3;
 echo "\n";
 // stripos() - i не зависит от регистра
 $dic4 = stripos($dic, 'g');// i- может принемать большие и маленькие буквы

 var_dump($dic4);
 $dic = "Richard Gir";
$dic5 = strripos($dic, "r");// не зависит от регистра, поиск с конца строки
var_dump($dic5);
// в php можно менять строки
$dic[7] = '|'; //вставили символ "|"
echo $dic, "\n";
 
//преобразование регистров

$a = "hello world";

echo ucfirst($a),"\n"; // развернутая функция - uppercasefirst преобразавание первого элемента строки в  верхний регистор
echo strtoupper($a), "\n"; //все символы  в верхнем регистре
echo strtolower($a), "\n"; //все символы в нижнем регистре

//удаление пробелов в строке

$p = " trevel ";
$p1= trim($p); //удаление пробелов с 2х сторон(между стовами пробелы остаются!!!)
var_dump($p1); "\n";

//комментарии слешами

$slech = "fgh'j\ nkjhk' uibkb\go ";
var_dump($slech); "\n";
 $slech2 = addslashes($slech); //экранирование
var_dump($slech2); "\n";
$slech3 = stripcslashes($slech2);
var_dump($slech3); //снятие экранирования со строки

//комментирование спецсимволами
echo "\n";
$span = "<span><b>go</b></span>";

$span2 = htmlspecialchars($span);// преобразует строку в спецсимволы понятные для html

var_dump($span2); "\n";
//удаляем теги
$span3 = "<span><b>thee</b></span>";//удаление всех тегов
echo strip_tags($span3); 
echo "\n";
//форматирование данных

$prise = 2234.5678;
echo number_format($prise, 2, ".", " "), "\n";

//замена подстроки в строке

echo str_replace('bbb','r', 'aabbbaaabbb'), "\n";










