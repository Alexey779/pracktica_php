<?php

//циклы
for ($i = 0; $i < 10; $i= $i + 1) {
    echo $i." ";
}
echo "\n";

for ($i = 40; $i > 6; $i= $i - 1) {
    echo $i ,' ';
}
//выход из цикла
echo "\n";
for ($i = 100; $i > 40; $i = $i - 10)
 {
    if($i === 30) {
        break;
    }
 echo $i, " ";
}
echo "\n";
for ( $i = 0; $i < 60; $i = $i + 6) {
    echo $i, " ";
}
echo "\n";
//останавливает итерацию на цифре 20
for ($i = 60; $i > 0; $i = $i - 4) {
     if ($i === 20) {
        break;
    }
     echo $i, " ";
}
echo "\n";
//пропуск итерации цикла - пропускает цифру 4
 for ($i = 2; $i <= 10; $i = $i + 1){
    if($i === 4){
         continue;
    }
    echo $i, " ";
 }
 echo "\n";
 //сложение внутри цикла
 $sum = 0;
 for ($i = 2; $i < 10; $i++){
    echo $i, " ";
    $sum = $sum + $i;
 }
 echo "\n";
 echo $sum;
 echo "\n";
 // произведение внутри цикла
 $sum2 = 1;
 for( $i = 2; $i <= 5; $i++){
    echo $i, "_";
    $sum2 = $sum2 *$i;

 }
 
 echo  "\n";
echo $sum2;
echo "\n";
for ($i = 0; $i <= 8; $i = $i+2 ) {
    echo $i, "_";
}
echo "\n";
//работа с массивами - получение последнего элемента из массива функцией count()
$arr = ['a','b', 'c','d','e'];
echo count($arr);
echo "\n";
$arr1 = ['a' => 1, 'b' => 2, 'c' => 3];
echo count($arr1);
echo "\n";
$arr2 = ['a','b','c'];
echo $arr2[count($arr2) -2];
//замена одного элемента массива на другой
$arr2[0] = '1';
$arr2[1] = '2';
$arr2[2] = '3';
var_dump ($arr2);
echo "\n\n";
$arr3 = ['a'=> 1,'b'=> 2,'c'];
$arr3[1] = $arr3[1].'3';
 $arr3[2] = $arr3[2].'3';
// $arr3[3] = 3;
var_dump($arr3);
