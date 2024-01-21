<?php
//прямоугольник
for ($k = 0; $k < 5; $k++) {
    for ($i = 0; $i < 14; $i++) {
        echo "*";
    } echo "\n";
}
// треуголник
for ($k = 0; $k < 9; $k++) {
    for ($i = 0; $i <= $k; $i++) {
        echo "*";
    } echo "\n";
}
//тренировка с цифрами
for($i = 0; $i <= 10; $i++){
     $t= 7 * $i;
   echo "7 * $i = $t". ";".  "\n";
}

for ($i = 0; $i < 10; $i++){
    for( $k = 1; $k <= 10; $k++){
        if($i ===0 AND $k  < 10)echo "0";
        echo 10 * $i + $k, " ";
    }
    echo "\n";
}

for ( $i = 10; $i > 0; $i--) {
    for( $k = 0; $i >= 0; $i--) {
        if($i === 0 AND $k > 10) echo '0';
        echo $i * 10 + $k, " ";
        
    }
    echo  "\n ";
}
//трапеция
echo "\n";


for( $i = 5; $i >= 0; $i--){
 for( $k =0; $k <= 20; $k++){
    if($k <= $i +2  OR $k >= 20- $i -2){
        echo "_";
    } else{ 
        echo"*";
    }
   
  }
  echo "\n";
    
}

$t = [22, 44,77];
print_r($t);

array_push($t,88);
print_r($t);
echo "\n";
$arr= [1, 2, 3, 4];

$ke1 = 1;
$ke2 = 3;
echo $arr[$ke1] + $arr[$ke2];
echo "\n";
$arr1 = ['a' => 1,'b' => 2];
$key = 'a';
echo $arr1[$key];
echo "\n";

if ($ke1> $ke2) {
    echo 'true';
} else {
    echo 'false';

}
echo "\n";

$test = 0;
if ($test < 10 ) {
    echo 'false';
} else {
    echo ' true';
}
echo "\n";
if ($test != 10 ) {
    echo 'false';
} else {
    echo ' true';
}
echo "\n";
$test1 = 1;
	$test2 = 3;
		
	if ($test1 !== $test2) {
		echo '+++';
	} else {
		echo '---';
	}
    echo "\n";
    if ($test1> 0 OR $test < 5) {
        echo " true";
    } else "false";

    echo "\n";
    if ($test2 >=10 AND $test <= 20) {
      echo "true";
    }  else echo "false";
    echo "\n";
    if ($test1 <= 1 AND $test2 >= 3) {
        echo "true";
    } else echo "false";
echo "\n";

$num1 = 0;
	$num2 = 19;
	
	if ($num1 >= 0 or $num2 >= 0) {
		echo '+++';
	} else {
		echo '---';
	}

    echo "\n";
    $num = 2;
	
	if ($num == 0 or $num == 1 or $num == 2) {
		echo '+++';
	} else {
		echo '---';
	}
    echo "\n";
    $num = 5;
    if( ($num >= 5 AND $num < 10) OR $num == 20){
        echo "true";
    } else echo "false";

echo "\n";
$num = 3;
		
	if ($num > 5 or ($num > 0 and $num < 3)) {
		echo '+++';
	} else {
		echo '---';
	}

    echo "\n";
    $num = 13;
		
	if (($num == 9) or 
    ($num > 10 and $num < 20) or
	 ($num > 20 and $num < 30)) { 
		echo '+++';
	} else {
		echo '---';
	}
    echo "\n";
var_dump($num2);
var_dump($num1);
    if (!($num2 > 10 or  $num1 >= 0)) {
        echo "true";
    } else echo "false";
$num = 5;
    echo "\n";
    if (!($num >= 0 or $num <= 10))  {
		echo '+++';
	} else {
		echo '---';
	}
    echo "\n";
    $test = false;
	
	if ($test == true) {
		echo '+++';
	} else {
		echo '---';
	}
    echo "\n";
    $test = "";
    	
	if ($test == false) {
		echo '+++';
	} else {
		echo '---';
	}
    echo "\n";
    $test = true;
	
	if (!!$test ) {
		echo '+++';
	} else {
		echo '---';
	}
    echo "\n";
    $test = -1;//'0' -при не строгом сравнение, 0,"",false, null - выводиться "___"
	
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}
    echo "\n";
    
	$test = null;
	if ($test !== null) { // !== и isset аналогично
		echo 'true';
	} else {
		echo 'false';
	}
    echo "\n"; 
var_dump($test);
echo "\n";
$test = null;
	
	if (!isset($test)) {
		echo '+++';
	} else {
		echo '---';
	}
    
   

    echo "\n";
    $test = null;
	
	if (isset($test)) {
		echo '+++';
	} else {
		echo '---';
	} 


    
    echo "\n\n";
    $test = 0;
	
	if ($test !== 0) {
		echo '+++';
	} else {
		echo '---';
	}
    
    echo "\n\n";
    $test = false;
	
	if (!isset($test)) {
		echo '++0';
	} else {
		echo '---';
	}
    echo "\n";
    $arr = [1, 2, 3, 4, 5];
	
	if (isset($arr[1])) {
		echo '+++';
	} else {
		echo '---';
	}
    echo "\n";
    $test = false;
	
	if (empty($test)) {
		echo '+++';
	} else {
		echo '---';
	}
    echo "\n";

    if($test = 10) {
        echo 'верно';
    }
    echo "\n\n\n";
    $test = 4;
    if($test = 0) echo "верно";else echo "не верно";
     echo "\n\n";
     if ($test ==0)  echo "верно";
     echo "\n\n";
     $day = 33;

     if($day>= 0 and $day< 10) {
        echo "первая декада";
     }
     if($day>= 10 and $day< 20) {
        echo "вторая декада";
     }
     if($day>= 20 and $day< 31) {
        echo "третья декада";
     } else {
        echo "error";
     }
     echo "\n\n";

     if ($day >= 0 and $day < 10){
        echo "yes";
     } elseif ($day>= 10 and $day < 20){
        echo "true";
     } elseif( $day>= 20 and $day < 31){
        echo "false";
     } else {
        echo "error";
     }
     echo "\n\n";
     $age = 96;
$d= str_split($age);
$a = array_sum($d);
var_dump($a);
     if ($age < 10 and $age > 99) {
        echo "число не попадает";
     } elseif($a > 10 and $a < 99){
        echo "все в порядке" . '-' . $a ."-"."сумма цифр двухзначна";
     } elseif ($a <= 9) {
        echo "сумма цифр однозначна";
     }
     
     echo "\n\n";
     $num = '';

     switch ($num){
        case 1 : echo "зима";
        break;
        case 2 : echo "весна";
        break;
        case 3 : echo "лето";
        break;
        case 4 : echo "осень";
        break;
        default: echo "false";
        break;
     }

     echo "\n\n";
     $num = 2;
     $res;
     if($num >= 0){
    echo $res = 1;
     } else if ($num < 0){
        echo $res = -1;
     }
echo "\n\n";

   var_dump($num >= 0 ? $res = 1 : $res = -1 );
   
   echo "\n";
   $ng = $num >= 0 ? $res = 1 : $res = -1;
   echo $ng;
   echo "\n";
   $user = ['name' => 'john', 'age' => 30];
	
	if (!isset($user['name'])) {
		$name = $user['name'];
	} else {
		$name = 'unknown';
	}
    var_dump($user);
    echo "\n";
    $user = $user['name'] ?? "unknown";
    var_dump($user);
    var_dump(!isset($user['name'])) ;
    
    echo "\n";
    if (isset($user['name'])) {
		$res = $user['name'];
	} elseif (isset($user['surname'])) {
		$res = $user['surname'];
	} else {
		$res = '';
	}
    var_dump($res);
    $res = $user['name'] ?? '';
    var_dump($res);
    echo "\n";
    $a = 2 * (3 - 1);
    $b = 6 -2;
    $s = $a == $b;
    var_dump($s);
    echo "\n";
    $a = 5 * (7 - 4);
	$b = 1 + 2 + 7;
    var_dump($a > $b);
           
   echo "\n";
   
   $a = 2 ** 4;
	$b = 4 ** 3;
    echo $a;
    echo $b;
    var_dump($a != $b);
    // В переменной $arr содержится некоторый массив с числами. 
    // Напишите условие, которое проверит, что в массиве 3 элемента. 
    // Если это так, выведите на экран сумму элементов массива.

    $arr = [20, 30, 45, 55];
    $sum;
    if(count($arr) >= 3) {//Напишите условие, которое проверит, что в массиве 3 элемента. 
        echo count($arr);
        echo "\n";

        echo array_sum($arr); //сумму элементов массива.
    }
echo "\n";
//Дана некоторая строка. Проверьте, заканчивается ли она на '0'.
    $st = "hello world";
    if ($st[strlen($st) -7] == "o"){
        echo "true";
    } else {
        echo "false"; 
        $sum = strlen($st) - 7;
        echo "\n";
         echo $st[$sum];
    } 
    echo "\n";
    // Как известно, четные числа делятся на 2 без остатка, 
    // а нечетные - с остатком. Пусть у вас дано число. 
    // С помощью оператора % и конструкции if проверьте четное это число или нет.
    $d = 42;

    if ($d % 2 === 0) {
        echo $d .'-' ."целое число";

    } else { 
        echo $d . "-" . "не целое число";
    }
    echo "\n";

    if ($d % 3 === 0) {
        echo "делиться на 3";
    } else {
        echo " не делиться на 3";
    }
    echo "\n";
    
    // В переменной $month лежит какое-то число из интервала от 1 до 12. 
    // Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).
    $month = 2;
    if ($month == 1){
        echo "январь";
    } elseif( $month == 2){
        echo "февраль";
    } elseif( $month == 3){
        echo "март";
    }elseif( $month == 4){
        echo "апрель";
    } elseif( $month == 5){
        echo "май";
    }elseif( $month == 6){
        echo "июнь";
    } elseif( $month == 7){
        echo "июль";
    }elseif( $month == 8){
        echo "август";
    } elseif( $month == 9){
        echo "сентябрь";
    }elseif( $month == 10){
        echo "октябрь";
    } elseif( $month == 11){
        echo "ноябрь";
    }elseif( $month == 12){
        echo "декабь";
    } else{
        echo "нет такого месяца";
    }
// swich case
echo "\n";
$month = 0;
switch($month){
case ($month == 0):
    echo "январь";
    break;
    case ( $month == 2):
        echo "февраль";
        break;
    case ( $month == 3):
        echo "март";
        break;
    case ( $month == 4):
        echo "апрель";
        break;
    case ( $month == 5):
        echo "май";
        break;
    case ( $month == 6):
        echo "июнь";
        break;
    case ( $month == 7):
        echo "июль";
        break;
    case ( $month == 8):
        echo "август";
        break;
    case ( $month == 9):
        echo "сентябрь";
        break;
    case ( $month == 10):
        echo "октябрь";
    case ( $month == 11):
        echo "ноябрь";
        break;
    case ( $month == 12):
        echo "декабь";
break;
    default:
    echo "нет такого месяца";
}
//Дана строка, состоящая из символов, например, 'abcde'. Проверьте, 
//что первым символом этой строки является буква 'a'.
echo "\n";
$rich = "abcde";
if($rich[0] == "d"){
    echo "true";
} else {
    echo "false";
}
//Дано число, например, 12345. Проверьте,
// что первым символом этого числа является цифра 1, 2 или 3.
echo "\n";
$h = '12345';
if($h[1] == 1){
echo "1";
 } elseif($h[1] == 2){
    echo "2";
 } elseif($h[1] == 3){
    echo "3";
 }
 echo "\n";
 $t = 123;
$d = str_split($t);
 $sum = array_sum($d);
 echo $sum;
 echo "\n";

 $n = $t % 10;// последняя цифра в строке
 echo $n;
 echo "\n";
//  Дано число из 6-ти цифр. Проверьте, 
//  что сумма первых трех цифр равняется 
//  сумме вторых трех цифр.
$r =933456;
$t = str_split($r);
$sum1 = $t[0] + $t[1] + $t[2];
$sum2 = $t[3] + $t[4] + $t[5];

if ($sum1 == $sum2) {
    echo "все в порядке";
} else {
    echo "все плохо";
}
echo "\n";

// использование цикла foreach
$arr = [ 1, 'yes', 45, 'ok'];
$arr2 = [ 1,2, 3, 4];
var_dump($arr);
foreach ($arr as $element) {
echo $element;
}
echo "\n";
//Переберем массив с числами циклом и выведем на экран квадраты этих чисел:
$arr3 = [ 2, 3, 4, 5];

foreach ($arr3 as $kv) {
    echo $kv * $kv . "\n";
} 
//с помощью цикла найдем сумму элементов массива.
echo "\n";
var_dump($arr3);
$res = 0;
foreach ($arr3 as $sum) {
     $res += $sum;
}

echo $res;
echo "\n";
//сумму элементов  массива
$res = 0;
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $sum) {
     $res = $res + $sum / count($arr);
}
var_dump($arr);
echo $res;
echo "\n";

//среднее арифметическое его элементов.
$res1 = 0;
foreach ( $arr as $sum) {
    $res1 = $res1 + $sum / count($arr);
    // $res1 = array_sum($arr) /count($arr); или так
}
echo $res1;
echo "\n";
//вывод ключей из массива
foreach( $arr as $key => $sum){ 
    echo $key . "\n";
}
$arr = ['green' => 'зеленый', 
		'red' => 'красный','blue' => 'голубой'];

        foreach($arr as $key => $color ){
            echo $key. '-' . $color . "\n";
        }

$arr = ['user1' => 30, 'user2' 
		=> 32, 'user3' => 33];   
      foreach( $arr as $key => $sum) {
        echo $key .'-'. 'возраст' ." ".  $sum ." ". "лет" . "\n";
      } 

      echo "\n";
      $arr4 = [33, 47, 54, 22, 32, 88];
       foreach ($arr4 as $sum){
        if($sum % 2 == 0){
            echo $sum ."-".'четное число'. "\n";
        }
        if($sum % 2 != 0) {
            echo $sum . "-". "нечетное число". "\n";
        }
       } 
//С помощью цикла foreach и оператора if выведите в консоль 
// те элементы массива, которые больше 3-х, но меньше 10.

$arr = [2, 5, 9, 15, 1, 4];

foreach ($arr as $sum) {
    if ($sum >= 3 and $sum < 10){
        echo $sum ."\n";
    }
}
//Дан массив с числами. Числа могут быть положительными и отрицательными. 
// Найдите сумму положительных элементов массива.

echo "\n";
$res = 0;
$arr = [ 12, -9, 43, -7, 2, -34];
foreach ($arr as $sum) {
    if ( $sum > 0) {
        $res = $res + $sum;
    }
}
echo $res;
echo "\n\n";
//Выведите на экран только те числа из массива, 
// которые начинаются на цифру 1, 2 или 5.
$arr = [10, 20, 30, 50, 235, 3000];
foreach ( $arr as  $sum) {
    
    if ( strval($sum)[0] == 1  ){
        echo $sum. "\n";
    }
    if ( strval($sum)[0] == 2  ){
        echo $sum. "\n";
    }
    if ( strval($sum)[0] == 5  ){
        echo $sum. "\n";
    }
}

echo "\n".'<br>';
//Составьте массив дней недели. С помощью цикла foreach 
// выведите все дни недели, а выходные дни выведите жирным.
$arr = [1 =>"понедельник", "вторник", "среда", "четверг", "пятница", "суббота","воскресенье"];
 
foreach ($arr as $sum => $val) {
    $day1 = 6;
    $day = 5;
    if ($sum == $day or $sum == $day1){
        echo '<strong>'.$val.'</strong>'.'<br>';  
    } else {
        echo $val. '<br>';
    }
}

echo "\n\n";
//Составьте массив дней недели. С помощью цикла foreach 
// выведите все дни недели, а текущий день выведите курсивом. Номер текущего дня должен храниться в переменной $day.
$arr = [1=>'Понедельник', 2=>'Вторник', 3=>'Среда', 4=>'Четверг', 5=>'Пятница', 6=>'Суббота', 7=>'Воскресенье'];
	$day = 5;
	foreach ($arr as $key=>$val) {
		if ($key == $day){
            echo "\n";
			echo '<i>'.$val.'</i>'.'<br>';
		} else{
			echo $val.'<br>';
		}
	}
echo "\n";
    //Цикл while будет выполняться до тех пор,
    //  пока верно (истинно) выражение, переданное ему параметром
$i = 1;
while ( $i<= 5) {
    echo $i. "\n";
    $i = $i +1;
}
$r = 1;
while ($r <= 100){
    echo $r. "\n";
    $r++;    
}
$e = 11;
while ($e <= 33) {
    echo $e."\n";
    $e++;
}
//Выведите на экран четные числа в промежутке от 0 до 100.
$v = 0;
while( $v <= 100){
    echo $v."\n";
$v = $v+2;
}
//Выведите на экран нечетные числа в промежутке от 1 до 99.

echo "\n";

for($i = 1; $i <= 99; $i++) {
    if($i % 2 != 0) {
        echo $i . "<br />"."\n";
    }
}

echo "\n";
$b = 1;
while($b <= 99) {
    
    $b= $b+1;
    if ($b % 2 != 0){
        echo $b. "\n";
    }
}
//Выведите на экран числа от 30 до 0.
echo "\n";
$i = 30;
while($i >= 0){
    echo $i. "\n";
    $i--;
}
echo "\n";
$i = 10;
while ($i >= 1) {
		echo $i ."\n";
        $i--;
	}	
    echo "\n";
   //С помощью цикла for выведите на экран числа от 1 до 100.
for($i = 1; $i <= 100; $i++){
    echo $i . "\n";
}
//	С помощью цикла for выведите на экран числа от 11 до 33.
for ($i = 11; $i <= 33; $i++){
    echo $i . "\n";
}
//С помощью цикла for выведите на экран четные числа в промежутке от 0 до 100.
echo "\n";
for ($i = 0; $i <= 100; $i= $i+2){
    echo $i . "\n";
}
echo "\n";
//С помощью цикла for выведите на экран нечетные числа в промежутке от 1 до 99.
for($i = 1; $i <= 99; $i++){
   if($i % 2 != 0){ 
     echo $i . "\n";} 
}
//
//С помощью цикла for выведите на экран числа от 100 до 0./
echo "\n";
for ($i = 100; $i >= 0; $i--){
    echo $i . "\n";
}
echo "\n";
//Найдите произведение целых чисел от 1 до 20.
$res = 1;
for ($i = 1; $i <= 20; $i++) {
   $res = $res*$i;
}
echo $res . "\n";

//Найдите сумму четных чисел от 2 до 100.
$res = 0;
for ($i = 0; $i <= 100; $i= $i +2){
$res = $res +$i;
}
echo $res . "\n";

//Найдите сумму нечетных чисел от 1 до 99.
$res = 0;
for ($i = 1; $i <= 99; $i++){
    if ($i % 2 != 0) {
        $res = $res + $i;
    }
}
echo $res . "\n";
for ($i = 0, $j = 0; $i <= 9; $i++, $j += 2) {
    echo $i . ' ' . $j . '<br>';
}