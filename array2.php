<?php

//Дан следующий массив
//Выведите с его помощью элементы с текстом 'l', 'e', 'g' и 'a'.
$arr = [
    ['a', 'b', 'c'],
    ['d', 'e', 'f'],
    ['g', 'h', 'i'],
    ['j', 'k', 'l'],
];

echo $arr [3][2]. "," . $arr[1][1] . ",". $arr[2][0] .  " и ". $arr[0][0]; 
echo "\n";
//Найдите сумму всех его элементов.
$arr = [[1, 2], [3, 4], [5, 6]];
$sum = 0;
 foreach($arr as $s ){
    foreach($s as $d){
        $sum = $sum + $d;
    }

 }
echo $sum;
echo "\n";
$arr = [
    [
        ['a', 'b'],
        ['c', 'd'],
    ],
    [
        ['e', 'f'],
        ['g', 'h'],
    ],
    [
        ['i', 'j'],
        ['k', 'l'],
    ],
];
echo $arr[2][0][1];// j
echo "\n";
//Найдите сумму всех элементов приведенного массива.
$arr = [
    [
        [1, 2],
        [3, 4],
    ],
    [
        [5, 6],
        [7, 8],
    ],
];
$sum = 0;
foreach($arr as $f){
    foreach($f as $g){
        foreach($g as $i){
            $sum = $sum + $i;
        }
    }
}
echo $sum;
echo "\n";
//Выведите с помощью этого массива 
// имя первого мальчика и имя второй девочки.
$arr = [
    'boys'  => [1 => 'Коля', 2 => 'Вася', 3 => 'Петя'],
    'girls' => [1 => 'Даша', 2 => 'Маша', 3 => 'Лена'],
];
echo $arr['boys'][1] . " and " . $arr['girls'][2];
echo "\n";
//Выведите с помощью этого массива английское название среды
$arr = [
    'ru' => ['пн', 'вт', 'ср', 'чт', 
        'пт', 'сб', 'вс'], 
    'en' => ['mn', 'ts', 'wd', 'th', 
        'fr', 'st', 'sn'], 
];
echo $arr['en'][2];//'wd'

echo "\n";
//Выведите с помощью этого массива сумму зарплат первого и третьего юзера.
$arr = [
    [
        'name'   => 'user1',
        'age'    => 30,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 31,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 32,
        'salary' => 3000,
    ],
];
$sum = $arr[0]['salary'] + $arr[2]['salary'];
echo  $sum;
echo "\n";
//Найдите сумму всех элементов приведенного массива.
//  Обращайтесь к каждому элементу по отдельности, без цикла.
$arr = 
[
    [1, 2, 3, 

[4, 5, [6, 7]]

], 

[8, [9, 10]]

];




// $sum = $arr[0][0] + $arr[0][1]+ $arr[0][2] + $arr[0][3][0] + $arr[0][3][1] + $arr[0][4][0][0]; //+ $arr[0][2][1] ;
// echo $sum;
echo "\n";
//С помощью двух вложенных циклов найдите сумму элементов этого массива.
$arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];
$sum = 0;
foreach ($arr as $r){
    foreach ($r as $t){
        $sum = $sum + $t;
    }
}
echo $sum;
echo "\n";
//С помощью трех вложенных циклов найдите сумму элементов этого массива.
$arr = [
    [
        [1, 2, 3],
        [6, 7, 8],
        [3, 8, 4],
        [6, 7, 9],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
        [5, 6, 3],
    ],
];

$sum = 0;
foreach ($arr as $t){
    foreach ($t as $g) {
        foreach($g as $b){
            $sum = $sum + $b;
        }
    }
}

echo $sum;
echo "\n";
//Выведите элементы этого массива в формате ключ-значение.
$arr = [
    [
        'name'   => 'user1',
        'age'    => 30,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 31,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 32,
        'salary' => 3000,
    ],
];

foreach($arr as $s){
    foreach($s as $f => $m){
        echo $f . " - " . $m . "\n";
    }
}
echo "\n";
$arr = [
    'user1' => [
        'name' => 'name1',
        'age'  => 31,
    ],
    'user2' => [
        'name' => 'name2',
        'age'  => 32,
    ],
];
foreach ($arr as $key1 => $sub) {
    foreach ($sub as $key2 => $elem) {
        echo $key1 . ' ' . $key2 . 
            ' ' . $elem . "\n"; 
    }
}

echo "\n";

//С помощью двух вложенных циклов выведите 
// элементы этого массива в формате имя группы - имя юзера.
$arr = [
    'group1'  => ['user11', 'user12','user13', 'user43'], 
         
    'group2'  => ['user21', 'user22', 'user23'],
    'group3'  => ['user31', 'user32', 'user33'],
    'group4'  => ['user41', 'user42', 'user43'],
    'group5'  => ['user51', 'user52'],
];

foreach($arr as $f => $c){
    foreach($c as $w => $j){
echo $f . " => " . $j ."\n";
    }
}
echo "\n";
//Сформируйте с помощью двух вложенных циклов следующий массив:
$arr = [];

for ($i = 0; $i < 3; $i++){
    for ($j = 0; $j < 5; $j++){
        $arr[$i][$j] = $j + 1;
    }
}
var_dump($arr);
//Сформируйте с помощью двух вложенных циклов следующий массив:
// [['x', 'x', 'x', 'x'], ['x', 'x', 
// 	'x', 'x'], ['x', 'x', 'x', 'x']] 
$arr = [];

for( $i = 0; $i < 3; $i++){
    for($j = 0; $j < 4; $j++){
        $arr[$i][$j] = 'x';
    }
}
var_dump($arr);
echo "\n=================\n";
//Сформируйте с помощью трех вложенных циклов следующий массив:

// [
// 	[
// 		[1, 2, 3, 4, 5],
// 		[1, 2, 3, 4, 5],
// 	],
// 	[
// 		[1, 2, 3, 4, 5],
// 		[1, 2, 3, 4, 5],
// 	],
// 	[
// 		[1, 2, 3, 4, 5],
// 		[1, 2, 3, 4, 5],
// 	],
// ]
$arr = [];
for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 2; $j++){
        for($k = 0; $k < 5; $k++){
            $arr[$i][$j][$k] = $k + 1;
        }
    }
}

var_dump($arr);
//Сформируйте с помощью двух вложенных циклов следующий массив:
//[[1, 2], [3, 4], [5, 6], [7, 8]]
$arr =[];
$f = 1;
for($i = 0; $i < 4; $i++ ){
    for ($j = 0; $j < 2; $j++){
        $arr[$i][$j] = $f;
        $f = $f + 1;
    }
}
var_dump($arr);
//Сформируйте с помощью двух вложенных циклов следующий массив:
echo "\n============\n";
//[[2, 4, 6], [8, 10, 12], [14, 
// 16, 18], [20, 22, 24]] 
$arr = [];

$k = 2;
for($i =0; $i < 4; $i++){
    for($j = 0; $j < 3; $j++){
        $arr[$i][$j] = $k;
        $k = $k + 2;
    }
}
var_dump($arr);
//Сформируйте с помощью трех вложенных циклов следующий трехмерный массив
//[[[1, 2], [3, 4]], [[5, 6], [7, 8]]]
echo "\n=======================\n";
$arr = [];
$k = 1;

for ($i = 0; $i < 2; $i++){
    for ($j = 0; $j < 2; $j++){
        for ( $g = 0; $g < 2; $g++){
            $arr[$i][$j][$g] = $k++;
            
        }
    }
}

var_dump($arr);
//Выведите с помощью этого массива столбец
//  продуктов в каком-нибудь придуманном вами формате.
$products = [
    [
        'name'   => 'мясо',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'овощи',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'фрукты',
        'price'  => 300,
        'amount' => 7,
    ],
];
foreach ($products as $key){
    echo $key['name'] . " = " . $key['price'] . " = " . $key['amount'] .";"."\n" ;
}
echo "\n";
// Дан список городов и их стран, хранящийся в следующей структуре:

// [
// 	[
// 		'country' => 'Россия',
// 		'city' =>    'Москва',
// 	],
// 	[
// 		'country' => 'Беларусь',
// 		'city' =>    'Минск',
// 	],
// 	[
// 		'country' => 'Россия',
// 		'city' =>    'Питер',
// 	],
// 	[
// 		'country' => 'Россия',
// 		'city' =>    'Владивосток',
// 	],
// 	[
// 		'country' => 'Украина',
// 		'city' =>    'Львов',
// 	],
// 	[
// 		'country' => 'Беларусь',
// 		'city' =>    'Могилев',
// 	],
// 	[
// 		'country' => 'Украина',
// 		'city' =>    'Киев',
// 	],
// ]
// Напишите код, которой переделает структуру данных вот в такую:

// [
// 	'Россия'=> [
// 		'Москва', 'Питер', 'Владивосток',
// 	],
// 	'Беларусь'=> [
// 		'Минск', 'Могилев'
// 	],
// 	'Украина'=> [
// 		'Киев', 'Львов'
// 	],
// ]
$arr = [];

$res = [
	[
		'country' => 'Россия',
		'city' =>    'Москва',
	],
	[
		'country' => 'Беларусь',
		'city' =>    'Минск',
	],
	[
		'country' => 'Россия',
		'city' =>    'Питер',
	],
	[
		'country' => 'Россия',
		'city' =>    'Владивосток',
	],
	[
		'country' => 'Украина',
		'city' =>    'Львов',
	],
	[
		'country' => 'Беларусь',
		'city' =>    'Могилев',
	],
	[
		'country' => 'Украина',
		'city' =>    'Киев',
	],
];
//так будет правильно
foreach($res as $d){
    $arr[$d['country']][] = $d['city'];

}


var_dump($arr);
echo "\n=====================\n";
//вот так не верно
foreach($res as $d) {
$arr []= $d['country']. " : " . $d['city'];

}
var_dump($arr);


// Дан список событий за определенные даты, хранящийся в следующей структуре:

// [
// 	[
// 		'date'  => '2019-12-29',
// 		'event' => 'name1'
// 	],
// 	[
// 		'date'  => '2019-12-31',
// 		'event' => 'name2'
// 	],
// 	[
// 		'date'  => '2019-12-29',
// 		'event' => 'name3'
// 	],
// 	[
// 		'date'  => '2019-12-30',
// 		'event' => 'name4'
// 	],
// 	[
// 		'date'  => '2019-12-29',
// 		'event' => 'name5'
// 	],
// 	[
// 		'date'  => '2019-12-31',
// 		'event' => 'name6'
// 	],
// 	[
// 		'date'  => '2019-12-29',
// 		'event' => 'name7'
// 	],
// 	[
// 		'date'  => '2019-12-30',
// 		'event' => 'name8'
// 	],
// 	[
// 		'date'  => '2019-12-30',
// 		'event' => 'name9'
// 	],
// ]
// Напишите код, которой переделает структуру данных вот в такую:

// [
// 	'2019-12-29'=> ['name1', 'name3', 'name5', 'name7'],
// 	'2019-12-30'=> ['name4', 'name8', 'name9'],
// 	'2019-12-31'=> ['name2', 'name6'],
// ]
$arr = [
	[
		'date'  => '2019-12-29',
		'event' => 'name1'
	],
	[
		'date'  => '2019-12-31',
		'event' => 'name2'
	],
	[
		'date'  => '2019-12-29',
		'event' => 'name3'
	],
	[
		'date'  => '2019-12-30',
		'event' => 'name4'
	],
	[
		'date'  => '2019-12-29',
		'event' => 'name5'
	],
	[
		'date'  => '2019-12-31',
		'event' => 'name6'
	],
	[
		'date'  => '2019-12-29',
		'event' => 'name7'
	],
	[
		'date'  => '2019-12-30',
		'event' => 'name8'
	],
	[
		'date'  => '2019-12-30',
		'event' => 'name9'
	],
];
echo "\n=========================\n";
$res = [];
foreach($arr as $m){
    $res[$m['date']][] = $m['event'];
}
var_dump($res);

$arr = [
	'2019-12-29'=> ['name1', 'name2', 'name3', 'name4'],
	'2019-12-30'=> ['name5', 'name6', 'name7'],
	'2019-12-31'=> ['name8', 'name9'],
];
echo "\n=====================\n";
$d = [];
foreach($arr as $f => $r){
foreach($r as $event){
    $d[] = [
        'data' => $f,
        'event' => $event
    ];
} 


}
var_dump($d);

//Математические функции в PHP
// Работа со степенью и корнем
//Возведите 2 в 10 степень
$t = pow(2,10);
echo $t;
echo "\n";
//Найдите квадратный корень из 245.
$f = sqrt(245);
echo $f;
echo "\n";
//Найдите корень из суммы квадратов его элементов. 
//Для решения воспользуйтесь циклом foreach.
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach($arr as $r){
    $sum = $sum + ($r * $r);
}
echo sqrt($sum);

//Найдите квадратный корень из 379.
// Результат округлите до целых, до десятых, до сотых.
echo "\n===================\n";
$sum = sqrt(379);//квадратный корень

echo round($sum);//округляем до целого числа
echo "\n";
echo round($sum, 1);// округляем до десятых
echo "\n";
echo round($sum, 2);//округляем до сотых
echo "\n";
// Найдите квадратный корень из 587. Округлите результат в 
// большую и меньшую сторону, запишите результаты округления 
// в ассоциативный массив с ключами 'floor' и 'ceil'.
$sun = 587;
echo $d = sqrt($sun);//квадратный корень

echo "\n";
$arr = ["floor" => floor($d), "ceil" => ceil($d)]; // округляем до меньшего и большего значения
var_dump($arr);
//Найдите минимальное и максимальное число.
$arr = [4, -2, 5, 19, -130, 0, 10];
echo max($arr);
echo "\n";
echo min($arr);
//Выведите на экран случайное целое число от 1 до 100.
echo "\n";
echo mt_rand(1, 100);//выводит случайное число
echo "\n";
$arr = [];
for($i = 0; $i <= 10; $i++){
$arr = mt_rand(1, 10);//выводит случайное число из цикла
}
var_dump($arr);
//С помощью цикла заполните массив 10-ю случайными целыми числами.
$arr = "";
$s = [];
for ($i = 0; $i < 10; $i++){
    $arr = $arr . mt_rand(0, 10);
    $s = str_split($arr);
}
var_dump($s);
// Даны переменные $a и $b. Найдите найдите модуль разности $a и $b. 
// Проверьте работу скрипта самостоятельно для различных $a и $b.
$a = -4;
$b = -6;
$c = $a - $b;
echo abs($c);// приводит положительное число, выражение
echo "\n";
//Дана строка 'php'. Сделайте из нее строку 'PHP'

echo strtoupper('php');
echo "\n";
//Дана строка 'PHP'. Сделайте из нее строку 'php'.

echo strtolower('PHP');
echo "\n";
//Дана строка 'london'. Сделайте из нее строку 'London'.
echo ucfirst('london');
echo "\n";
//Дана строка 'London'. Сделайте из нее строку 'london'.
echo lcfirst('London');
// Дана строка 'london is the capital of great britain'. Сделайте
//  из нее строку 'London Is The Capital Of Great Britain'.
echo "\n";
echo ucwords('london is the capital of great britain');
//Дана строка 'LONDON'. Сделайте из нее строку 'London'
echo "\n";
echo strtolower('LONDON') ;
echo "\n";
//Дана строка 'html css php'. Найдите количество символов в этой строке.

$str = 'html css php'; 
for ($i = 0; $i < strlen($str); $i++){ //можно найти перебором в цикле
    
}
echo $i;
echo "\n";
echo strlen($str);//можно найти функцией
echo "\n";
$password = 'ddgtrgygyjkkh';
if (strlen($password) > 5 and strlen($password) < 10){
    echo "пароль верный";
} else {
    echo " пароль не верный";
}
echo "\n";
//Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', 
// слово 'css' и слово 'php'.
$str = 'html css php';
 echo substr($str, 0 ,-7)."\n";//html
 echo substr($str, 5 ,-4) . "\n";//css
 echo substr($str, -4 , 4) ."\n";//php

echo substr('hello',-3,3) ."\n";//llo

//Дана строка. Проверьте, что она начинается на 'http://'.
$str = 'http://www.go';
if (substr( $str , 0 , -6 ) == 'http://'){
    echo "yes";
}else {
    echo "no";
}
echo "\n";
//Дана строка. Проверьте, что она начинается на 'http://' или на 'https://'.
$str = 'https://www.go';
if (substr( $str , 0 , -7 ) == 'http://' or 
    substr( $str , 0 , -6 ) == 'https://' )
    {
    echo "yes";
}else {
    echo "no";
}
echo "\n";
//Дана строка. Проверьте, что она заканчивается на '.png'.
$str = 'sholck.png';
if (substr( $str , -4) ==  '.png'){
    echo "yes";
}else {
    echo "no";
}
echo "\n";
// Дана строка. Если в этой строке более
//  5-ти символов - вырежьте из нее первые 5 символов,
//   добавьте троеточие в конец и выведите на экран.
//   Если же в этой строке 5 и менее символов - просто
//    выведите эту строку на экран.
$str = 'hello world';
if (strlen($str) > 5){
    echo substr($str, 5)."...";
} else if(strlen($str) < 5){

    echo $str;
}
echo "\n";
echo str_replace(['.','.','.'],['-', '-', '-'],'31.12.2013');
echo "\n";
$str ='sdrafbhcledbsac';

echo str_replace(['a','b','c'],[1, 2, 3,], $str);
echo "\n";
$str = '1a2b3c4b5d6e7f8g9h0';
echo "\n";
echo str_replace([1,2,3,4,5,6,7,8,9,0], '',$str);
// Дана строка $str. Замените в ней все 'a' на цифру 1, 
// буквы 'b' - на 2, а буквы 'c' - на 3. 
// Решите задачу двумя способами работы с функцией strtr 
// (массив замен и две строки замен).
echo "\n";
$str = '1a2b3c4b5d6e7f8g9h0';
echo strtr($str, ['a'=> 1, 'b'=> 2, 'c'=> 3]);//первый способ
echo "\n";
echo strtr($str, 'def', 123);
echo "\n";
//substr_replace(где меняем, на что меняем, 
	// с какого символа, [сколько символов]); 
 echo substr_replace($str, '!!!', 3,5);
 echo "\n";   
//strpos(где ищем, что ищем, [откуда искать]);
//Дана строка 'abc abc abc'. Определите позицию первой буквы 'b'
$str = 'abc abc abc';
echo strpos($str, 'b');
echo "\n";
//Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
echo strrpos($str, 'b');
//Дана строка 'abc abc abc'. Определите позицию первой найденной буквы 'b',
//  если начать поиск не с начала строки, а с позиции 3.
echo "\n";
echo strpos($str, 'b', 3);
//Дана строка 'aaa aaa aaa aaa aaa'. Определите позицию второго пробела.
echo "\n";
$str = 'aaa aaa aaa aaa aaa';
echo strpos($str, '', 2);
echo "\n";
//Проверьте, что в строке есть две точки подряд
$str = 'abc abc.. abc';
echo strpos($str, '..');
echo "\n";
//Проверьте, что строка начинается на 'http://'.
$str = 'http://wwww.k';
echo strpos($str,'http://' );
echo "\n";
//Функция explode разбивает строку в массив по определенному разделителю.
//explode(разделитель, строка);
//Функция implode сливает массив в строку с указанным разделителем.
//implode(разделитель, массив);
$str ='html css php'; 
$arr = explode(' ', $str );//перемещение строки в массив
var_dump($arr) ;
$str = implode(',', $arr);//извлечение из массива в строку
echo $str;
echo "\n";
//В переменной $date лежит дата в формате год-месяц-день. 
// Преобразуйте эту дату в формат день.месяц.год.
$date = '2024-01-19';
$arr = explode('-',$date);
echo $arr[2]. '.'.$arr[1]. '.' .$arr[0];
echo "\n";
//Работа с str_split
// Дана строка '1234567890'. Разбейте ее на массив 
// с элементами '12', '34', '56', '78', '90'.
$str = '1234567890';
$arr = str_split($str, 2);//Функция str_split разбивает строку в массив.
var_dump($arr);
//Дана строка '1234567890'. Разбейте ее на массив
// с элементами '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'.
$srt = '1234567890';
$arr = str_split($str, 1);
var_dump($arr). ',';
echo "\n========\n";
//Дана строка '1234567890'. Сделайте из 
//нее строку '12-34-56-78-90' не используя цикл.
$str = '1234567890';
$arr = str_split($str, 2);//перевод строки в массив
$arr1 = implode('-', $arr);// перевод массива в строку
echo $arr1;
//Работа с trim, ltrim, rtrim //Функция trim удаляет пробелы с начала и конца строки. 
//Может также удалять другие символы, если их указать вторым параметром.
echo "\n";
//Дана строка. Очистите ее от концевых пробелов.
$str = ' 1234567890 ';
echo trim($str);
echo "\n";
//Дана строка '/php/'. Сделайте из нее строку 
//'php', удалив концевые слеши.
$st = '/php/';
echo trim($st, '/');
echo "\n";
// Дана строка 'слова слова слова.'. В конце этой строки 
// может быть точка, а может и не быть. Сделайте так, 
// чтобы в конце этой строки гарантировано стояла точка. 
// То есть: если этой точки нет - ее надо добавить, 
// а если есть - ничего не делать. Задачу решите через 
// rtrim без всяких ифов.
$str = 'слова слова слова.';
echo trim($str, '.').'.';
echo "\n";
//Работа с strrev
//Дана строка '12345'. Сделайте из нее строку '54321'.
$str = '12345';
echo strrev($str);
echo "\n";
//Работа с str_shuffle
//Дана строка. Перемешайте символы этой строки в случайном порядке.
echo str_shuffle($str);
for ($i = 0; $i < 10; $i++){
    echo str_repeat('x',$i) . "\n";
}
echo "\n";
$str = 0;
for ($i = 0; $i < 10; $i++){
    echo str_repeat($str++,$i) . "\n";
}
echo "\n";
//Работа с strip_tags и htmlspecialchars
//Дана строка 'html, <b>php</b>, js'. Удалите теги из этой строки.
$str =  'html, <b>php</b>, js';
echo htmlspecialchars($str);
echo "\n";
//Работа с chr и ord
//Узнайте код символов 'a', 'b', 'c', пробела.
echo ord('a');//97
echo chr(97);//'a'
echo "\n";
echo chr(33);//!
echo "\n";
echo chr(66);//B
echo "\n================\n";
$str = 'B';
$r = (ord($str) >= 65 && ord($str) <= 90)? 'большая':((ord($str) >= 97 && ord($str) <= 122)? 'маленькая' : 'не является буквой');
echo $r;
echo "\n";
$letter = 'd';
$answer = (ord($letter) >= 65 && ord($letter) <= 90) ? 'Большая' : ((ord($letter) >= 97 && ord($letter) <= 122) ? 'Маленькая' : 'Не является буквой латинского алфавита');
echo $answer;
echo "\n";
//Работа с strchr, strrchr
//Дана строка 'ab-cd-ef'. С помощью 
//функции strchr выведите на экран строку '-cd-ef'.
$rt = 'ab-cd-ef';
echo strchr('ab-cd-ef', '-');
echo "\n";
//Дана строка 'ab-cd-ef'. С помощью
// функции strrchr выведите на экран строку '-ef'.
echo strrchr('ab-cd-ef', '-');
echo "\n";
//Работа с strstr
//Дана строка 'ab--cd--ef'. С помощью 
//функции strstr выведите на экран строку '--cd--ef'.
$r = 'ab--cd--ef';
echo strstr('ab--cd--ef', '--');