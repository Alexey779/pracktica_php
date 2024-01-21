<?php
//Дан массив с числами. Найдите среднее арифметическое его элементов.
$arr = [1,4,2,5,9,3];
$f = array_sum($arr)/count($arr);
echo $f;
echo "\n";
//Найдите сумму чисел от 1 до 100.
$arr = range(1,100);
$d = array_sum($arr);
echo $d;
//Выведите столбец чисел от 1 до 100.
echo "\n";
$arr = range(1,100);
echo implode($arr);
echo "\n";
//Заполните массив 10-ю иксами.
$d = array_fill(1,10,'x');
var_dump($d);
//Заполните массив 10-ю случайными числами от 1 до 10 так, чтобы они не повторялись.
$s = range(1,10);
$f = shuffle($s);
var_dump($s);
//Найдите факториал заданного числа.
$str =4;
$f = range(1,$str);
echo array_product($f);
echo"\n";
//Дано число. Найдите сумму цифр этого числа.
$str = 3489;
$r = str_split($str);
$arr = array_sum($r);
var_dump($arr);
//Дана строка. Сделайте заглавным последний символ этой строки.
$str = 'hello';
$str1 = strrev($str);
$f = ucfirst($str1);
$str = strrev($f);
echo $str;
echo "\n";
//Дан массив с числами. Получите из него массив с квадратными корнями этих чисел.
$arr = [1,4,2,5,9,3];
$r = array_map('sqrt',$arr);
var_dump($r);



