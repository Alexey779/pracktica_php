<?php
	session_start();
	$_SESSION['test'] = 'abcde'; // пишем в сессию 
?>
Сделайте два файла. При запуске первого файла запишите в сессию два числа, 
а при запуске второго файла - выведите на экран сумму этих чисел.<br>
///////////////////////////////////////
<?php
session_start();
$s = 23;
$r = 25;
$_SESSION['test2'] = $s + $r;

?>


<?php
	session_start();
?>

<?php
	session_start();
	
	if (!isset($_SESSION['counter1'])) {
		$_SESSION['counter1'] = 1; // первый заход на страницу 
	} else {
		$_SESSION['counter1']++;   // последующие заходы 
	}
	
	echo $_SESSION['counter1'];
?><br>
Запишите в сессию время захода пользователя на сайт. При обновлении страницы
 выводите сколько секунд назад пользователь зашел на сайт.<br>
<?php
session_start();
 
 if (empty($_SESSION['time'])) {
     $_SESSION['time'] = time();
 }
  
 echo time() - $_SESSION['time'];

 ?>
 <?php unset($_SESSION['time']) ?> удаление сессии<br>
 Удаление сессий в PHP

 Модифицируйте  код так, чтобы при достижении счетчиком значения 10, 
 отсчет начинался сначала.<br>
 <?php
	session_start();
	
	if (!isset($_SESSION['counter'])) {
		$_SESSION['counter'] = 1;
	} else {
		$_SESSION['counter']++;
	}
    if($_SESSION['counter'] > 10){
 unset($_SESSION['counter']);
    }

	echo $_SESSION['counter'] .'-' . 'заходов на сайт';
	
?><br>
Сессии и формы в PHP

<form method="GET">
	<input name="num1">
	<input name="num2">
	<input type="submit">
</form>
<?php
	session_start();
	
	if (!empty($_GET)) {
		$_SESSION['num1'] = $_GET['num1'];
		$_SESSION['num2'] = $_GET['num2'];
	}
?><br>
На одной странице с помощью формы спросите у пользователя фамилию, 
имя и возраст. Запишите эти данные в сессию. При заходе на другую страницу выведите эти данные на экран.<br>
<form action = "" method = "GET">
    <input type="text" name="name" placeholder="ваше имя ?">
    <input type="text" name="firstname" placeholder="ваша фамилия ?">
    <input name="age" placeholder="ваш возраст?">
    <input type="submit">
</form>

<?php 
session_start();
if (!empty($_GET)) {
   
    $_SESSION['name'] = $_GET['name'];
    $_SESSION['firstname'] = $_GET['firstname'];
    $_SESSION['age'] = $_GET['age'];
}
 

?><br>
<!-- <?php ?> -->
Запись массивов в сессии PHP<br>

На одной странице с помощью формы спросите у пользователя имя, 
возраст, зарплату и еще что-нибудь. 
Запишите эти данные в одну переменную сессии в виде массива.
 При заходе на другую страницу переберите сохраненные данные циклом 
 и выведите каждый элемент массива в своем теге li тега ul.<br>


 


<form  method = "GET">
    <input  name="name1" placeholder="ваше имя ?">
    <input  name="salary" placeholder="ваша зарплата ?">
    <input name="age1" placeholder="ваш возраст?">
    <input type="submit">
</form>


<?php 
session_start();
if (!empty($_GET)) {
   
    
    $_SESSION['name1'] = $_GET['name1'];
    $_SESSION['salary'] = $_GET['salary'];
    $_SESSION['age1'] = $_GET['age1'];
    
}
?><br>
