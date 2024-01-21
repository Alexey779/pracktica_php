<?php
echo 4;
echo "\n";
echo (4);
echo PHP_EOL;
echo "5";
echo 4, 5, 'hello';
//*** Вывод переменных
echo "\n";
$foo = 11;
$dat = 5;

echo $foo + $dat;
echo "\n";
echo $foo/$dat;
echo "\n";
echo $foo%$dat;
echo "\n";
$tok = 'Hello';
$tok = 'world';
echo $tok . $tok; //конкатенация строк
echo "\n";
echo "15 + 6 = ". ($foo + $dat);
echo "\n";
//дроби
$d = 8.5;
echo $d +12;
//строки
echo "\n";
$d = 'string';
echo $d;
echo "\n";
echo $d . $foo + 333;
echo "\n";
$r = 4;
$t = 6;
$d = ($r**2 + $t**2)**0.5; //быстрое возведение в степень
echo $d;
echo "\n";
var_dump($d); //функция проверяет тип значения и количество символов
echo"\n";
$d = "hello";
var_dump($d);
var_dump($t);
//функция выводит в терминал всю информацию
//phpinfo($t); 
//функция запуска калькулятора на компьютере
//exec('start calc');