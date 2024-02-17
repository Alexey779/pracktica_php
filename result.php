<?php
var_dump($_GET);
echo "\n";
var_dump(($_POST));
echo "\n";
var_dump($_REQUEST);

echo 'alex';
echo $_GET['test1'];

echo $_GET['test1'] . ' ' . $_GET['test2'];
echo "\n================\n";
echo $_GET['int'] . ' ' . $_GET['age'] . ' ' . $_GET['id'];
echo $_POST['name'] . ' ' .'=>'   . $_POST['age'];
//проверка пороля
$pass = '12345';
if($pass === $_POST["pass"] ){
    echo $_POST["pass"]. 'ok';
}else{
    echo 'не правильно ввели пароль!';
}
echo date("w",mktime($_POST['year'].$_POST['week'].$_POST['day']));
//echo ($_REQUEST);

