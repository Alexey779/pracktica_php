<?php
//Дан массив с числами. Запустите цикл, 
// который будет по очереди выводить 
// элементы этого массива в консоль до тех пор, 
// пока не встретится элемент со значением 0.
//  После этого цикл должен завершить свою работу.
$arr = [1, 4, 7, 0, 8 ,1];
foreach ($arr as $n){
    if ($n == 0){
        echo "yes";
        break;
    } else {
     echo $n ."\n";
    }
}
echo "\n";
//Дан массив с числами. Найдите сумму элементов, расположенных от
//  начала массива до первого отрицательного числа.
$arr = [2,2,3,-3,4];
$sum = 0;
foreach($arr as $n){
    if ($n > 0 ){
        $sum = $n + $sum;
      }else {  
        break;
    }
}
echo $sum;        
 //Дан массив с числами. Найдите позицию
// первого числа 3 в этом массиве (считаем, что это число обязательно есть в массиве).   
 echo "\n";
 $arr = [5,8,4,0,3,5,89,3];
 foreach($arr as $n){
    if ($n === 3){
        echo $n ."-" ."yes";
       break;
    }
   
 }   
echo "\n";
//Определите, сколько целых чисел, 
// начиная с числа 1, нужно сложить, чтобы сумма получилась больше 100.

$con = 0;
while($sum <= 100){
    $con++;
    $sum = $sum + $con;
}
echo $con;
echo "\n\n";
// $sum = 0;
// $i = 0;
// for ($i = 0; $i <= 100; $i++){
    
//     $sum = $sum + $i;
// }
// echo $i;
$arr = [23,3,4,32,40,7,23];
$sum = 0;
$con = 0;
echo "\n=======\n";

foreach($arr as $f){
    if ($f % 2 === 0 ){ //четные числа
        
    $res = $f*$f;
echo $res ."\n\n";
}elseif($f % 3 === 0){//не четные числа
    $res = $f * $f * $f;
    
    echo $res . "-". "\n";
}

}
echo "\n=======\n";
$arr = [1, 2, 3, 4, 5];
	$flag = false;
	
	foreach ($arr as $elem) {
		if ($elem === 8) {
			$flag = true;
			break;
		}
	}
	
	if ($flag === true) {
		echo 'есть';
	} else {
		echo 'нет';
	}
    echo "\n";
    //Проверьте, что в этом массиве есть элемент 'c'. 
    // Если есть - выведите 'да', а если нет - выведите 'нет'.
    $arr = ['a', 'b', 'c', 'd', 'e'];
    $flag = false;// применение флага
    foreach ($arr as $h){
        if ($h === 'r'){
            $flag = true;
            break;
        }
    }
    if ($flag === true){
echo "true";
    } else {
        echo "false";
    }
    echo "\n=======\n";
    $arr = [1, 2, 3, 4, 5];
    $flag = false;

    foreach($arr as $d) {
        if($d === 7){
            $flag = true;
            break;
        }
    }
if ($flag === true){
    echo "да";
} else {
    echo "нет";
}
echo "\n=======\n";
//Дано число $num с неким начальным значением. 
// Умножайте его на 3 столько раз, пока результат умножения
//  не станет больше 1000. Какое число получится? Посчитайте
//   количество итераций, необходимых для этого.
$num = 500;
	
	while ($num > 10) {
		$num = $num / 2;
	}
	
	echo $num;
    echo "\n";
$num = 1;
$i = 0;
while($num <= 1000){
    $num = $num * 3;
    $i++;
    
}
// echo $num ."-" .$i;
// echo "\n======\n";
// for($num = 1,  $i =0; $num <= 1000; $num = $num * 3, $i++ ){
//     echo $num . "+" . $i."\n";
// }
//С помощью цикла сформируйте строку, заполненную 5-тью нулями.
$str = "";
for ($i = 0; $i < 5; $i++ ){
    $str = $str."0";

}
echo $str;
echo "\n";

$r = "";
 for( $i = 0; $i < 10; $i++){
    $r = $r . "0";
 }
 echo $r;
 echo "\n";
 //С помощью цикла сформируйте строку '123456789' и запишите ее в переменную $str. 
//  Выведите значение этой переменной на экран.
 $str = "";
 for($i = 1; $i < 10; $i++){
    $str = $str . $i;
 }
 echo $str;
 echo "\n";
 //С помощью цикла сформируйте строку '987654321' и запишите ее в переменную $str.
//   Выведите значение этой переменной на экран.
$str = "";
for ($i = 9; $i >= 1; $i--){
    $str = $str . $i;
}
echo $str;
echo "\n=========\n";

$str = " ";
for ($i = 1; $i <= 9; $i++) {
    $str = $str . "-" . $i ;
}
echo $str. "-";
echo "\n";
//С помощью двух вложенных циклов выведите на экран следующую строку:

//111222333444555666777888999
for ($i = 1; $i <= 9; $i++) {
    for($j = 1; $j <= 3; $j++){
        echo $i;
    }

}
echo "\n";
//С помощью двух вложенных циклов выведите на экран следующую строку:

//11 12 13 21 22 23 31 32 33

for ( $i = 1; $i <= 3; $i+=1){
    for ($j = 1; $j <= 3; $j++){
            echo $i . $j . " ";
    }
}
echo "\n";
//Объявите пустой массив, 
// а затем заполните его числами от 1 до 5.
$arr = [];
$arr[]= 1;
$arr[]= 2;
$arr[]= 3;
$arr[]= 4;
$arr[]= 5;
var_dump($arr);
//Объявите пустой массив, 
// а затем заполните его 5-ю буквами x.
$arr = [];
$arr[] = 'x';
$arr[] = 'x';
$arr[] = 'x';
$arr[] = 'x';
$arr[] = 'x';
var_dump($arr);

//С помощью цикла заполните массив числами от 1 до 100.
$arr = [];
for ($i = 1; $i <= 100; $i++){
    $arr[] = $i + 1;
}
var_dump($arr);
//С помощью цикла заполните массив нечетными числами в промежутке от 1 до 99.
$arr = [];
for ( $i = 1; $i <= 99; $i++){
    if( $i% 2 != 0) {
        $arr[] = $i;
    }
}
var_dump($arr);
//С помощью цикла for выведите все эти элементы на экран.
$arr = ['a', 'b', 'c', 'd', 'e'];
for ($i = 0; $i < count($arr); $i++){
    echo $arr[$i] . " ";
}
echo "\n======\n";
//С помощью цикла for выведите на экран 
// все элементы этого массива, кроме последнего.
$arr = ['a', 'b', 'c', 'd', 'e'];
for ($i = 0; $i < count($arr); $i++){
    if($arr[$i] != 'e'){
        echo $arr[$i];
    }
    
}
echo "\n";
//С помощью цикла for выведите на экран первую половину элементов этого массива.
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
for ($i = 0; $i < count($arr); $i++){
    if($arr[$i] < 5)
    echo $arr[$i] ." ";
}
echo "\n";
// сумму всех элементов массива
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
	$sum = 0;
    $f = count($arr);
	
	for ($i = 0; $i < $f; $i++) {
		$sum += $arr[$i];
	}
	
	echo $sum;

//Дан массив с числами. Переберите этот массив циклом и 
// возведите каждый элемент этого массива в квадрат.
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$f = count($arr);
$arr1= [];
for($i =0; $i < $f; $i++){
$arr[$i] = $arr[$i] * $arr[$i];
}
var_dump($arr). "\n ";
//Дан массив с числами. Переберите этот массив циклом
//  и отнимите от каждого элемента единицу.
$arr = [43,22,2,5,1,-12,0];
$f = count($arr);
for($i = 0; $i < $f; $i++){
    $arr[$i] = $arr[$i] - 1;
   
}
 var_dump($arr);
echo "\n=================\n";
$arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	
	for ($i = 0; $i < $length; $i++) {
		$arr[$i] += 5;
	}
	
	var_dump($arr);
echo "\n========---\n";
$arr = [1, 2, 3, 4, 5, 6];
$length = count($arr);

for($i = 0; $i < $length; $i++){

    $arr[$i] += 10;
    
}
var_dump($arr);
echo "\n===========\n";
//Дан следующий массив с работниками и их зарплатами:
$arr = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];
$f = count($arr);
$r = [];
foreach($arr as $d){
    echo $r = ($d * 10)/100 + $d. " ";
}
echo "\n";
//Модифицируйте предыдущую задачу так, чтобы зарплата увеличивалась 
// только тем работникам, у которых она меньше или равна 400.
$r = [];
foreach($arr as $d){
    if($d <= 400){
        echo $r = ($d * 10)/100 + $d. " ";
    }else{
        echo $d. "-" . "остальные". ",";
    }
    
}
//Найдите сумму ключей этого массива и поделите ее на сумму значений.
echo "\n";
$arr = [1 => 6, 2 => 7, 3 => 8, 
		4 => 9, 5 => 10];
$sum = 0;
foreach( $arr as $r => [$arr]){
    $sum = $r + $sum . " ";
    
}
echo $sum;
echo "\n";
//Запишите ключи этого массива в один массив, а значения - в другой.
$arr = ['a' => 1, 'b' => 2, 'c' 
		=> 3, 'd' => 4, 'e' => 5]; 
$key = "";
$sum = "";
foreach($arr as $f => $value){
    $key = $key . $f . " ";
   $sum = $sum .$value . " ";
}


var_dump($key);
var_dump($sum);
//Запишите в новый массив элементы, 
// значение которых начинается с цифры 1 или цифры 2.
//  То есть у вас в результате получится вот такой массив:
$arr = [
    1 => 125,
    2 => 225,
    3 => 128,
    4 => 356,
    5 => 145,
    6 => 281,
    7 => 452,
];
$arr2 = "";
foreach($arr as $g ){
    if(strval($g)[0] == 1){
        echo $g . " ";
}
elseif(strval($g)[0] == 2){
    echo $g . " ";
}
    }
    echo "\n==========\n";
 // Выведите с помощью цикла столбец чисел от 1 до 100. 
for ($i = 1; $i <= 100; $i++){
    echo $i . "\n";
}
echo "\n==========\n";
//Выведите с помощью цикла столбец чисел от 100 до 1.
for ($i = 100; $i >= 1; $i--){
    echo $i . "\n";
}
//Выведите с помощью цикла столбец четных чисел от 1 до 100.
echo "\n";
for($i = 1; $i <= 100; $i++){
if ($i % 2 === 0) {
    echo $i. "\n";
}
}
//Заполните массив 10-ю иксами с помощью цикла.
echo "\n";
$arr = [];
for ($i = 0; $i < 10; $i++){

    echo $arr = "x";
}
echo "\n";
$arr= [];

for( $i = 1; $i <= 10; $i++){
    echo $arr = $i;
}
echo "\n";
//Дан массив с числами. С помощью цикла 
// выведите только те элементы массива, которые больше нуля и меньше 10-ти.
$arr = [30,10,8,67,4,-1,9];
$l = [];
foreach($arr as $g){
    if ($g<= 10 and $g > 0){
        $l = $g;
echo $l. " ";
    }
}
echo "\n";
//Дан массив с числами. С помощью цикла
//  проверьте, что в нем есть элемент со значением 5.
$arr = [30,10,8,67,4,-1,9,5];
$len = count($arr);

    if(in_array(5,$arr)){ //можно найти сразу через функцию не используя цикл
        echo "true";
        
    }else{
        echo "false";
        
    }

echo "\n";
$arr = ['n'=>30,10,8,67,4,-1,9,5];//функция для поиска в ассоциативных массивах - выводит ключ
$key = array_search(30,$arr);
if ($key){
    echo $key;
}
echo "\n";
$arr = [30,10,8,67,4,-1,9,5];
$flag = false;// устанавливаем флаг изначально ложным
foreach($arr as $f){
    if($f === 5) { //строгое сравнение
        $flag = true;// используем флаг
        break;
    }
}
if ($flag === true){
    echo "цифра есть";
} else {
    echo "нет такой цифры";
}
echo "\n";
//Дан массив с числами. С помощью цикла найдите
//  сумму элементов этого массива.
$arr = [30,10,8,67,4,1,9,5];
$sum = 0;
foreach($arr as $n){
    $sum = $sum + $n;
}

echo $sum;
echo "\n";
//Дан массив с числами. С помощью цикла найдите
//  сумму квадратов элементов этого массива.
$arr = [30,10,2,1];
$sum = 0;
$sum2 = 0;
foreach($arr as $f => $value){
    $sum = $sum +  ($value * $value) ." ";
    $sum2 = $sum2 + $f ;
}
echo $sum. "\n";
echo $f;//количество ключей = 3
echo "\n=======\n";
//Дан массив с числами. Найдите среднее арифметическое 
// его элементов (сумма элементов, делить на количество).
$arr = [30,10,2,1,76,4];
$sum = 0;
$sum2 = 0;
foreach($arr as $d => $value){
    $sum = $sum + $d;
    $sum2 = $sum2 + $value;
}
echo $sum . "\n";
echo $sum2 . "\n";
echo $sum2/ $sum; //среднеарифмитическое значение
echo "\n========\n";//вычисление факториала
$n = 3;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
    
 $x= $x*($i+1);
  echo $x . "\n";
}
echo "Факториал  $n = $x"."\n";


$n = 5;
$r = 1;
    for ($i = 1; $i <= $n-1; $i++) {
        $r = $r * ($i +1);
    }
    echo $r;
echo "\n";

// $fact1 = gmp_fact(5); // 5 * 4 * 3 * 2 * 1
// echo gmp_strval($fact1) . "\n";

// $y = gmp_fact(6);

// echo gmp_strval($y); 