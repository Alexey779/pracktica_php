<?php

//Создание своей функции
//Сделайте функцию, выводящую на экран ваше имя.
function f (){
    echo 'alexey';
}
f();
echo "\n";
//Сделайте функцию, выводящую на экран сумму чисел от 1 до 100.
function r(){
    $arr = range(1,100);
    $s = array_sum($arr);
    echo $s;
}
r();
echo "\n";
//Параметры функций в PHP
//Сделайте функцию, которая параметром 
//принимает число и выводит на экран куб этого числа.
function h ($d) {
    $e = $d*$d*$d;
    echo $e;
}
h(2);//8
echo "\n";
//Сделайте функцию, которая параметром принимает число и проверяет,
// положительное это число или отрицательное. 
// В первом случае пусть функция выводит на экран текст '+++', а во втором '---'.
function t ($f){
if($f > 0){
    echo "+++";
}else if($f <= 0){
    echo "---";
}
}
t(1);//+++
//Несколько параметров функций в PHP
//Сделайте функцию, которая параметрами принимает 3 числа и выводит на экран сумму этих чисел.
echo "\n";
function rg ($s, $h, $v) {
echo $s + $h + $v;
}

rg(1,1,1);
echo "\n";
function func($num = 5) {
    echo $num * $num;
}
func(2);//4
	//func(3);//9
	//func();//25
    echo "\n";
    function func1($num1 = 0, $num2 = 0) {
		echo $num1 + $num2;
	}
    //func1(2, 3);//5
	//func1(3);//3
	func1();//0
    echo "\n";
    function cub ($r){
        
        return $r = $r*$r*$r;
    }
    $res = cub(3) + cub(2);
echo cub(3);
echo "\n";
echo $res;
echo "\n";
//Последовательный вызов функций в PHP
function sum ($u,$n){
    return $u + $n;
}

$th = sum(cub(2), cub(2));
echo $th;
echo "\n";
//Тонкое место return в PHP
function fun($num) {
    return $num;
    
    $res = $num * $num;
    return $res;
}

echo fun(3);//3
echo "\n";
function func2($num) {
    if ($num <= 0) {
        return abs($num);
    } else {
        return $num * $num;
    }
}

echo func2(10);//100
echo "\n";
echo func2(-5);//5
echo "\n";
function func3($num) {
    if ($num <= 0) {
        return abs($num);
    }
    
    return $num * $num;
}

echo func3(10);//100
echo "\n";
echo func3(-5);//5
echo "\n";
//Цикл и return в PHP
function func5($num) {
    $sum = 0;
    
    for ($i = 1; $i <= $num; $i++) {
        $sum += $i;       
    }
return $sum;
}
echo func5(5);//15
//Применение return в цикле в PHP
// Напишите функцию, которая параметром 
// будет принимать число и делить его на 2 столько раз, 
// пока результат не станет меньше 10. Пусть функция
//  возвращает количество итераций, которое потребовалось для достижения результата.
echo "\n====================\n";

function funct($n) {
    $sum = 0;
    while ($n >= 10) {
        $n = $n/2;
        ++$sum;
    }
return $sum;
}
echo funct(100);//4
echo "\n";
function div($n) {
    $iterations = 0;
    for (; $n >= 10; ++$iterations) {
      $n /= 2;
    } 
    return $iterations;
  }

echo div(100);//4
echo "\n";
//Приемы работы с return в PHP
function func8($num1, $num2) {
    if ($num1 > 0 and $num2 > 0) {
        return  $num1 * $num2;
    } else {
        return 0;
    }    
}
echo func8(3, 4);
echo "\n";
//Флаги в функциях PHP
// Сделайте функцию, которая параметром будет 
// принимать массив с числами, и проверять, 
// что все элементы в этом массиве являются четными числами.

$arr= [6,8];
function arr ($arr) {
    
    foreach($arr as $s){
        if ($s%2 == 0)
        return 'true';
    }
    return 'false'; 
}
echo arr($arr);
//Сделайте функцию, которая параметром будет принимать
// число и проверять, что все цифры это числа являются нечетными.
echo "\n==============\n";
$f = 1234;
$r = str_split($f);
var_dump($r);
echo "\n";
function ry ($f) {
    
for ($i = 0; $i < strlen($f); $i++){
    echo "\n++\n";
    var_dump( str_split($f));  
    if ($f%2 !== 0){
        return "true";
    }
}return "false";
}
echo ry(348);//////////////////////////////////////no
//$arr = '123';
echo "\n";
function rt ($arr){
for ($i = 0; $i < strlen($arr); $i++){
    for ($j = $i + 1; $j < strlen($arr); $j++){
        echo $arr[$i];
        if ($arr[$i] === $arr[$j]){
        return 'yes';
        } else {
            return'no';
        }
    }
}

}
echo rt('2123');
echo "\n=====================\n";
//Логические операторы без if в функциях PHP
function func12($a, $b) {
    if ($a === $b) {
        return true;
    } else {
        return false;
    }
}
echo func12(2,3);
echo "\n";
//перепишим функцию
function func13($a, $b) {
    
        return $a === $b;   
}
echo func13(3,3);
echo "\n";
function func14($a, $b) {
    
        return $a !== $b;   
}
echo func14(2,3);
echo "\n";
function func15($a, $b) {
   
        return  $a + $b >= 10;
  
}
echo func15(2,13);
echo "\n================\n";
function func16($num) {

        return $num >= 0;
    
}
echo func16(2,13);
echo "\n";
$arr = [3,5,7];
function sum1($arr) {
    $res = 0;
    
    foreach ($arr as $elem) {
        $res += $elem;
    }
    
    return $res / count($arr);
}
echo sum1($arr);//5
echo "\n";
$arr1 = [2,5,6,9];
$arr2 = [4,9,3];
function sumArray($arr1, $arr2) {
    $res1 = 0;
    
    foreach ($arr1 as $elem) {
        $res1 += $elem;
    }
    
    $res2 = 0;
    
    foreach ($arr2 as $elem) {
        $res2 += $elem;
    }
    
    return $res1 / $res2;
}
echo sumArray($arr1, $arr2);
echo "\n";
$arr = [4,1,2];
function getSum($arr) {
    $res = 1;//при умножении всегда 1
    
    foreach ($arr as $elem) {
        $res *= $elem;
    }
    
    return $res;
}
echo getSum($arr);
echo "\n";
//Практика на функции PHP
//Сделайте функцию, которая параметром будет принимать 
//число и возвращать массив его делителей.
$str = '';
function array1($str) {
return (array) $str;
}
var_dump(array1(123));
print_r(array1(123));//[123]

$number = 123;

$numberToString = (string)$number;//явно переводим в строку
//echo "\n========\n";
//var_dump($number);
$lengthNumber = strlen($numberToString);//измеряется длина строки
//echo $lengthNumber;
$result = [];
for ($i = 0; $i < $lengthNumber; $i++) {
    $result[] = (int)$numberToString[$i];
}

print_r($result);//[1,2,3]

$number = 1234;

$numberToString = (string)$number;
$numberToArray = str_split($numberToString);

$result = array_map(function ($item) {
    return (int)$item;
}, $numberToArray);

print_r($result);//[1,2,3,4]

//Сделайте функцию, которая параметром будет 
//принимать два числа и возвращать массив их общих делителей.

function array3 ($str2,$str3) {
    
    $merge = $str2.$str3;//соединяем 2 строки
$numb = (string)$merge;//переводим строку
$leng = strlen($numb);//находим количество элементов в строке
//$ary = [];
for($i = 0; $i < $leng; $i++ ){ //перебираем строку
    $ary[] = (int)$numb[$i]; //передаем цифры в массив по элементам
}return $ary;
}
var_dump(array3(123,'457')) ;
//Сделайте функцию, которая параметром будет 
//принимать число и возвращать сумму его цифр.
function sumArr($stri) {
    $stre = (string)$stri;
    $t =strlen($stre);
    for($i = 0; $i < $t; $i++){
        $arr6[] = (int)$stre[$i];
    }return array_sum($arr6);
}
echo sumArr(123);
echo "\n";
//Сделайте функцию, которая вернет текущий день недели словом.
function week () {
 $days  = array('пн'=> 1, 'вт', 'ср', 'чт', 'пт', 'сб', 'вс');
    // foreach($arr as $f){
    //    $f =date('l'); // день недели "w"-порядковый номер недели
    //        break;
    // } 
     return $days[date("l")];  
}
// $days = array( 1 => "Понедельник" , "Вторник" , "Среда" , "Четверг" , "Пятница" , "Суббота" , "Воскресенье" );

// echo $days[date( "N" )];        
echo week();
echo "\n";
//Сделайте функцию, которая параметром будет получать дату, 
//а возвращать день недели словом, соответствующий этой дате.

// function getDate ($day) {
//     $days = array( 1 => "Понедельник" , "Вторник" , "Среда" , "Четверг" , "Пятница" , "Суббота" , "Воскресенье" );
//     return 
// }
 
//$days = array( 1 => "Понедельник" , "Вторник" , "Среда" , "Четверг" , "Пятница" , "Суббота" , "Воскресенье" );
$dates1 = ''; 

function getDate1 ($dates1) {
$days1 = [
    'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
    'Четверг', 'Пятница', 'Суббота'
];

$r = strtotime($dates1);
return  $days1[ date("w", $r )];    
//echo $days[ date("w", strtotime($dates) )];//вывод
}
echo getDate1(2021-12-12);//вторник
//Сделайте функцию, которая параметром будет принимать секунды,
// а возвращать количество суток, соответствующих этим секундам.
echo "\n";
$sec = '';

function formatDay ($sec) {
    $result = $sec/60/60/24;
    return 'количество суток :'.$result;
}
echo formatDay(197400);//2
// Сделайте функцию, которая параметром будет год
//  и проверять, високосный он или нет.

echo "\n";
function searchYear ($year){
if($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0)
{
 echo "ok";
}else{
   echo "no";
}
}
echo searchYear(2028);
echo "\n===============\n";
//Сделайте функцию, которая параметром будет принимать число
// и проверять, простое оно или нет.
function IsPrime($n) {
    for($x=2; $x<$n; $x++) {
         if($n %$x ==0 and $n > 0) {
              return 0;
             }
       }
     return 1;
      }
echo IsPrime(230);
echo "\n============\n";
 $number = +5;
function primeNumber ($number) {
   
if($number < 2) return false;
for($i = 2; $i <= $number / 2; $i++) {
    if($number % $i == 0 ) {
        return  'Это не простое число';
    }
}
return 'Это простое число';
}
echo primeNumber($number);
//    $a = IsPrime(-60);
//    if ($a==0)
//    echo ."\n";
//    else
//    echo ."\n";