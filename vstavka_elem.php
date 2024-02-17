<?php
//Вставка переменных в строки в PHP
$str = 'aaa';
echo 'xxx ' . $str . ' yyy';
echo "\n";
$str = 'aaa';
	echo "xxx $str yyy";
    echo "\n";
//Упростите следующий код
$name = 'user';
	echo "hello, $name !";
echo "\n";
//Вставка элементов массива в PHP
//Упростите следующий код
$arr = ['1', '2', '3'];
	echo "aaa $arr[0] bbb $arr[1]"; 
echo "\n";
//Вставка элементов ассоциативных массивов в PHP
//1Для вставки таких элементов их необходимо обернуть в фигурные скобки:
//2Либо можно снять одинарные кавычки с ключа при вставке
//3Иногда имеет смысл тупо записать элемент массива в переменную, чтобы затем без проблем выполнить вставку переменной в строку:
//Упростите следующий код:
$arr = ['a' => 1, 'b' => 2, 'c' => 3]; 
echo 'text ' . $arr['a'] . ' text ' . $arr['b'] . ' text'; 
echo "\n";
//========================//
$arr = ['a' => 1, 'b' => 2, 'c' => 3]; 
echo "text {$arr['a']} text {$arr['b']} text";//1 
echo "\n";
$arr = ['a' => 1, 'b' => 2, 'c' => 3]; 
echo "text $arr[a] text $arr[b] text";//2 
echo "\n";
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$s= $arr['a'];
$f = $arr['b']; 
echo "text $s text $f text";//3 
echo "\n";
//Цикл и вставка переменных в PHP
//Упростите следующий код:
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "nums: $i $j"."\n"; 
    }
}
echo "\n";
//Вставка элементов массивов в цикле в PHP
//Можно также вставлять элементы при переборе массивов циклом
$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		echo "xxx $elem yyy";
	}
echo "\n";
$arr = ['a' => 1, 'b' => 2, 'c' 
		=> 3]; 

	foreach ($arr as $key => $elem) {
		echo "pair: $elem = $key" ."\n"; 
	}
echo "\n";
//Вставка элементов многомерных массивов в цикле в PHP
//Выведите с помощью этого массива столбец продуктов в каком-нибудь придуманном вами формате.
$products = [
    [
        'name'   => 'product1',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'product2',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'product3',
        'price'  => 300,
        'amount' => 7,
    ],
];
foreach($products as $d){
    echo "$d[name] = $d[price] : $d[amount]". "\n";
}
echo "\n";
//Генерация тегов в PHP
//Выведите каждую из этих переменных в отдельном абзаце.
$text1 = 'aaa';
$text2 = 'bbb';
$text3 = 'ccc';
echo "<p>$text1</p><br><p>$text2</p><br><p>$text3</p>";
echo "\n";
//Генерация тегов с атрибутами в PHP
$text = 'link';
$href = 'index.html';
echo '<a href= "'. $href.'">' . $text . '</a>';//как было
echo "\n";
echo "<a href=\"$href\"> $text </a>"; //как стало
echo "\n";
//Даны три переменные:
//Сформируйте с помощью этих переменных три тега img.
$src1 = '1.png';
$src2 = '2.png';
$src3 = '3.png';
echo "<img src= \"$src1\" alt=\"\"/>"."<img src= \"$src2\" alt=\"\"/>"."<img src= \"$src3\" alt= \"\"/>";
//Цикл и генерация тегов в PHP
echo "\n";

echo "<ul>"."\n";
for($i= 1; $i<= 5; $i++){
    
    echo "<li>$i</li>"."\n"; 
}
echo "</ul>";
//Цикл и генерация тегов из массивов в PHP
echo "\n";
$arr = [1, 2, 3, 4, 5];
	echo "<select>". "\n";
	foreach ($arr as $elem) {
    
		echo "<p>$elem</p>"."\n";
	}
    echo "</select>";
echo "\n";
//Цикл и генерация тегов и атрибутов в PHP
//Дан следующий массив:
$arr = [
    ['href'=>'page1.html', 'text'=>
        'text1'], 
    ['href'=>'page2.html', 'text'=>
        'text2'], 
    ['href'=>'page3.html', 'text'=>
        'text3'], 
];
echo "<ul>". "\n";
foreach($arr as $d){
    echo "<li><a href=\"{$d['href']}\">{$d['text']}</a></li>". "\n";
}
echo "</ul>";
echo "\n";
//Дан следующий массив:
$arr = [
    ['value' => '1', 'text' => 'text1'],
    ['value' => '2', 'text' => 'text2'],
    ['value' => '3', 'text' => 'text4'],
];
echo "<select>". "\n";
foreach($arr as $f){
    echo "<option value=\"{$f['value']}\">{$f['text']}</option><br>";
}
echo "</select><br>";
echo "\n";
//Цикл и генерация HTML таблиц на PHP
//Давайте теперь научимся формировать таблицы. 
//Пусть у нас дан следующий массив, содержащий тексты ячеек таблицы:
$arr = [
    ['name' => 'user1', 'age' => 30, 'salary' => 500], 
    ['name' => 'user2', 'age' => 31, 'salary' => 600], 
    ['name' => 'user3', 'age' => 32, 'salary' => 700], 
];
/////////////////////////////////
echo "<table>";
foreach($arr as $g){  
echo "<tr><tr><td>{$g['name']}</td></tr><br><td>{$g['age']}</td></tr><br><td>{$g['salary']}</td><br>";
    
}
echo "</table>";
///////////////////////////////////
//Генерация HTML таблицы с помощью одного цикла в PHP
echo "\n================\n";
$arr = [
    ['name' => 'user1', 'age' => 30, 'salary' => 500], 
    ['name' => 'user2', 'age' => 31, 'salary' => 600], 
    ['name' => 'user3', 'age' => 32, 'salary' => 700], 
];
echo '<table>';
	foreach ($arr as $user) {
		echo '<tr>';
		
		echo "<td>{$user['name']}</td>";
		echo "<td>{$user['age']} years</td>";
		echo "<td>{$user['salary']} dollars</td>";
		
		echo '</tr>';
	}
	echo '</table>';
echo "\n===========\n";
//Генерация HTML таблицы с помощью двух вложенных циклов в PHP
//Дан следующий массив:
$products = [
    [
        'name'   => 'product1',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'product2',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'product3',
        'price'  => 300,
        'amount' => 7,
    ],
];
//Сформируйте с его помощью HTML таблицу.

echo "<table>";
foreach($products as $f){
    echo "<tr>";
foreach($f as $key => $g){
    if($key === 'name'| $key === 'price'|$key === 'amount'){
        echo "<td> $key: $g</td>";
    }else {
        echo "<td>$g</td>";
    }
}
    echo "</tr>";
}
echo "</table>";
?>
//Вставка PHP кода в HTML
//Дан абзац. Выведите в него текущую дату в формате год-месяц-день.



<p><?php echo 'text'; ?></p>
<p><?php echo sqrt(4); ?></p>
<p><?php echo date('Y-m-d') ?></p>
Короткая команда echo в PHP
<p><?=  date('w') ?></p>
Вставка PHP переменной в HTML код
<?php
	$str1 = 'text1';
	$str2 = 'text2';
	$str3 = 'text3';
?>
<p><?=$str1?></p>
<p><?=$str2?></p>
<p><?=$str3?></p>
Вставка элементов массива в HTML код
Можно также вставлять элементы массива. 
Дан массив:
<?php
	$arr = ['a' => 1, 'b' => 2, 'c' 
		=> 3]; 
?>
Выполните вставку элементов массива в соответствующие абзацы.
<p><?= $arr['a']?></p>
<p><?=$arr['b']?></p>
<p><?=$arr['c']?></p>
Условия и разрыв PHP кода
Дана переменная:
<?php
	$show = true;
?>
Дан код:
<div>
	<p>text1</p>
	<p>text2</p>
	<p>text3</p>
</div>
Выведите приведенный HTML код, если переменная show равна true.
<?php if($show): ?>
    <div>
	<p>text1</p>
	<p>text2</p>
	<p>text3</p>
</div>

<?php endif; ?>
Блок else в условиях для разрыва PHP кода
<?php $test = true;?>
<?php if ($test): ?>
	<p>+++</p>
<?php else: ?>
	<p>---</p>
<?php endif; ?>

<?php
	$show = true;
?>
<?php if($show):?>
    <div>
	<p>text+</p>
	<p>text+</p>
	<p>text+</p>
</div>
<?php else:?>
    <div>
	<p>text-</p>
	<p>text-</p>
	<p>text-</p>
</div>
<?php endif;?>
Блок elseif в условиях для разрыва PHP кода
<?php if ($test === 1): ?>
	<p>1</p>
<?php elseif ($test === 2): ?>
	<p>2</p>
<?php else: ?>
	<p>?</p>
<?php endif; ?>
<?php $test !==true; ?>
<?php if($test):?>
<div>
	<p>text1</p>
	<p>text1</p>
	<p>text1</p>
</div>
<?php elseif($test ===false):?>
<div>
	<p>text2</p>
	<p>text2</p>
	<p>text2</p>
</div>
<?php else: ?>
<div>
	<p>text-</p>
	<p>text-</p>
	<p>text-</p>
</div>
<?php endif;?>///////
Циклы и разрыв PHP кода
Сформируйте с помощью цикла следующий HTML код:
<ul>
<?php for($i = 1; $i<=5; $i++):?>
        <li><?= $i?></li>
    <?php endfor;?>
</ul>
Циклы и вставка элементов массива в разрыв PHP кода
Дан массив:
<?php
	$arr = ['user1', 'user2', 'user3'];
?>
С помощью этого массива и цикла сформируйте следующий HTML код:
<div>
	<h2>user1</h2>
	<p>text</p>
</div>
<div>
	<h2>user2</h2>
	<p>text</p>
</div>
<div>
	<h2>user3</h2>
	<p>text</p>
</div>
////////////////////
<?php foreach($arr as $r):?>
<div>
    <h2><?=$r?></h2>
    <p><?=$r?></p>
</div>
    <?php endforeach?>
    ////////////////
    Дан массив:
    <?php
	$arr1 = [
		[
			'name' => 'user1',
			'age'  => 30,
		],
		[
			'name' => 'user2',
			'age'  => 31,
		],
		[
			'name' => 'user3',
			'age'  => 32,
		],
	];
?>
С помощью этого массива и цикла сформируйте следующий HTML код:

<div>
	<p>name: user1</p>
	<p>age: 30</p>
</div>
<div>
	<p>name: user2</p>
	<p>age: 31</p>
</div>
<div>
	<p>name: user3</p>
	<p>age: 32</p>
</div>
////////////

$arr1 = [
    [
        'name' => 'user1',
        'age'  => 30,
    ],
    [
        'name' => 'user2',
        'age'  => 31,
    ],
    [
        'name' => 'user3',
        'age'  => 32,
    ],
];

<?php foreach($arr1 as $g):?>
   <div> 
    <?php foreach($g as $key=>$arr):?>
        <?php if($key === 'name'|$key === 'age'):?>

 <p><?=$key?>:<?=$arr?></p>
     
     <?php else:?>
   
     <p><?=$key?>:<?=$arr?></p>       
  
 <?php endif;?>
    <?php endforeach;?>
</div>
<?php endforeach;?>



    
        
        





















