<?php
// типы данных

// цело число

$r = -4455;
var_dump($r);// int-целые числа
$Ric = 90;
var_dump($Ric);
$Ric = 3.45;
var_dump($Ric);// float-дробные чила
// строки
$w = "choose your power";
var_dump($w);

$r = strlen($w); //функция выводит количество символов в строке
echo $r;
// проверка типов данных

echo "\n";
$rait = 5;
echo gettype($rait);//integer - int сокращенное название
echo "\n";
$rait = 6.57;
echo gettype($rait);//double - дробное значение
echo "\n";
$rait = false;
echo gettype($rait);//boolean - булевое  значение

echo "\n";
$str = 'hello world';
echo gettype($str);// string- строковое значение

echo "\n";
var_dump(gettype(66) === 'integer');//проверка через функцию var_dump()
echo "\n";
//окрыгление чисел

$s = 5.68;
echo $s;
echo "\n";
echo gettype($s);
$f = round($s, 1); // округление числа до целого или если 1 то до одног после запятой
echo "\n";
echo $f;
$d= $s + 34;
echo "\n";
echo $f;
echo "\n";
$sic= 8;
var_dump(gettype($sic) === 'integer');
echo "\n";
var_dump(is_int($s));// функция is_int проверяет число на  boolean значение( в данном случае число)
var_dump(is_double($s));//функция дроби
var_dump(is_float($s));
$g = 5;
$s= 5;
var_dump(is_string($g));//функция строки
var_dump(is_bool($s));
echo "\n";
var_dump(gettype($s)=== gettype($g));
echo "\n";

$f1 = '3';
$f2 = '5';
echo $f1 + $f2;
echo "\n";

var_dump((bool) $f1);
echo gettype($f1);
echo "\n";
$tr =(float) '12.456';

var_dump($tr);
echo gettype($tr);
$tr =(int) '12.556';
echo "\n";
echo $tr;
echo "\n";
$test = (string)12345;
var_dump($test);
$task1 = "abcde";
var_dump($task1);

 var_dump( $task1[5]='f');
 var_dump($task1);
 var_dump($task1[0]='f',$task1[1]='e',$task[2]='d',$task[3]='c');
 var_dump($task1);

 $task2 = "hello";
 $null = 0;
var_dump($task2);
 echo $task2[$null];
 echo "\n";
 echo  strlen ($task2);
 echo "\n";
 $fil = $task2[strlen ($task2)-3];
echo $fil;
echo "\n";
$task3 = '123456';
echo $task3[2] + $task3[5];
echo "\n";
$task4 = 12345;
$task4 = (string)$task4;

echo $task4[1] + $task4[4];
echo "\n";
echo $task4[4], $task4[3], $task4[2];
echo "\n"; 
$num = 47;
$num += 7;
$num -= 18;
$num *= 10;
$num /= 15;
echo $num;
echo "\n";
echo $str2 = 'a'.'b'.'c';
echo "\n";
$sum1 = 10;
 $sum1 ++;
$sum1 ++;
$sum1 --;
echo $sum1;
echo "\n";
$num1 = 0;
echo $num1 ++;
echo $num1;
echo "\n";
$num2 = 3;
 $num3= $num2--;
  echo $num3;
  echo $num2;
  echo "\n";
  $num1 = 3;
	$num1++;
	$num2 = $num1--;
	echo $num1++;
	echo --$num2;
    echo "\n";
    $time = 60;
    $clock= $time * $time;

    echo $clock * 24;
    echo "\n";
    echo $clock *24 *30 *365;
    echo "\n";
    echo $time *24; 
    echo "\n";
    echo $time *24 *365;
    echo "\n";
     $r = 5;
     $s = 3.14 * $r * $r;
     echo $s;
     echo "\n";
     $a = 4;
     echo $s1 = $a*$a;
     echo "\n";
$arr = ['a',1, true, 4,7];
echo $arr;
var_dump($arr);
$array = ['a','b','c'];
echo  $array[0],'+', $array[1],'+' ,$array[2];
echo "\n";
$summ = [1, 2, 3];
echo $summ[0] + $summ[1] + $summ[2];
echo "\n";
$arry = [2,5,3,9];
$res = $arry[0] * $arry[1] + $arry[2] *$arry[3];
echo $res;
echo "\n";
$cal = [1=>'pn', 2=> 'vt', 3=>'sr'];
echo $cal[2];

$calendar = [1=> 'янв', 'фев','март'];
echo $calendar[2];






