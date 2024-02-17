<?php
$arr = ['a' => 1, 'b' => 2, 'c' 
=> 3, 'd' => 4, 'e' => 5];
function recursion($arr) {
var_dump(array_shift($arr));
var_dump($arr);
if(count($arr) !== 0) {
    recursion($arr);
}
}

echo recursion($arr);
echo "\n=========\n";
function func($arr) {
    var_dump(array_shift($arr));
    var_dump($arr);
    
    if (count($arr) !== 0) {
        func($arr);
    }
}

func([1, 2, 3]);
//Сумма элементов массива при рекурсии в PHP
//С помощью рекурсии найдите сумму элементов этого массива.
$arr = ['a' => 1, 'b' => 2, 'c' 
		=> 3, 'd' => 4, 'e' => 5]; 
 function sum7 ($arr) {
$sum = array_shift($arr);//удаляем из массива элемент
if(count($arr) !== 0) { //проверяем элемент  
    $sum +=sum7($arr); //прибавляем элемент
}
return $sum;
 }       
echo sum7($arr);//15
echo "\n";

function recur ($arr) {
    $sum2 = array_shift($arr);
    if (count($arr) !== 0) {
        $sum2 += recur($arr);
    }
    return $sum2;
}
 echo recur([2,4,6,8]);
echo "\n";
//Рекурсия и многомерные структуры в PHP
$arr = [1,[2, 7, 8],[3, 4, [5, [6, 7]]]];

function recurs($arr) {
    foreach($arr as $f){
       if(is_array($f)){

        recurs($f);
       }else {
        echo $f ;
       }
    }
}
 echo recurs([1,[2, 7, 8],[3, 4, [5, [6, 7]]]]) ;//127834567
echo "\n";
$arr1 = [1, 2, 3, [4, 5, [6, 7]], 
		[8, [9, 10]]]; 
function recurs2($arr1) {
    foreach($arr1 as $v) {
        if(is_array($v)) {
           recurs2($v); 
        } else {
            echo $v;
        }
    }
}
echo recurs2($arr1);//12345678910
//Сумма элементов массива в PHP
echo "\n";
$arr = [2, [2, 7, 8], [3,4, [5, [6, 7]]]];  
		
function fun ($arr) {
    $sum = 0;
    foreach($arr as $b){
        if(is_array($b)) {
            $sum += fun($b);
        } else {
            $sum +=$b;
        }

    }
    return $sum;
}
echo fun ($arr);
echo "\n";
//Дан многомерный массив произвольного уровня вложенности
//С помощью рекурсии найдите сумму элементов этого массива.
$arr = [1, 2, 3, [4, 5, [6, 7]], 
		[8, [9, 10]]]; 

function fun2 ($arr) {
    $sum = 0;//создаем контейнер
    foreach($arr as $d){ //перебираем массив циклом

        if (is_array($d)){//делаем проверку, является ли переменная массивом
            $sum= $sum + fun2($d);//
         } else {
             $sum = $sum + $d;//
         }
    }
    return $sum;
}

echo fun2($arr);
echo "\n";
//Дан многомерный массив произвольного
// уровня вложенности, содержащий внутри себя строки
//С помощью рекурсии слейте элементы этого массива в одну строку
$arr = ['a', ['b', 'c', 'd'], 
		['e', 'f', ['g', ['j', 'k']]]];

function funct ($arr) {//создаем функцию которая принимает параметр массив
    $call = '';//создаем пустой контейнер с пустой строкой
    foreach($arr as $h) {//перебираем массив циклом
        if (is_array($h)){//проверяем, является ли переменная массивом

            $call= $call.funct($h);//делаем конконтенацию к строке
        }else{
 
            $call = $call.$h;//делаем конкотенацию
        }
    }
    return $call;//вывод строки внутри функции
}

echo funct($arr);
echo "\n";

// Манипуляции с 
// элементами многомерного массива в PHP
$arr = [1, 2, 3, [4, 5, [6, 7]], 
		[8, [9, 10]]]; 
function funct4 ($arr) {
    $len = count($arr);
    for ($i = 0; $i < $len; $i++){
        if(is_array($arr[$i])){

            $arr[$i] = funct4($arr[$i]);
        }else {

            $arr[$i] = $arr[$i]. '!';
        }
    }
    return $arr;
}
var_dump(funct4($arr)) ;
//Дан многомерный массив произвольного уровня вложенности
//Возведите все элементы-числа этого массива в квадрат
echo "\n================\n";

$arr = [1, [2, 7, 8], [3, 4], [5, [6, 7]]]; 

function funct7 ($arr) {
    $len = count($arr);//передаем в переменную количество символов в строке
    for ($i = 0; $i < $len; $i++) {//перебираем массив циклом 
        if(is_array($arr[$i])){ // проверяем, является ли переменная массивом
        $arr[$i] = funct7($arr[$i]);
    } else {
        $arr[$i] = $arr[$i] * $arr[$i];//находим квадрат числа на кажном элементе
       } 
    }
    return $arr;
}
 var_dump(funct7($arr));
echo "\n=====================\n";









