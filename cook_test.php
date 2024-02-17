Введение в работу с куками в PHP
<?php
setcookie('test','adcb');
?><br>
В одном файле запишите куку, а в другом файле выведите ее на экран.
<?php

setcookie('hello', 'hello world');
?><br>

Проблема установки кук в PHP
при первом заходе в $_COOKIE для нашей куки будет null,
 а при уже обновлении страницы - значение куки

 <?php
 setcookie('test2', 'alexey');
 
 ?><br>
 Мгновенная установка кук в PHP<br>
<?php 
if(!isset($_COOKIE['test3'])){
    setcookie('test3', 'hello cookies');
    $_COOKIE['test3'] = 'hello cookies';
}else {
    echo $_COOKIE['test3'];
}

?><br>
Пример еще 2 <br>
<?php
if(!isset($_COOKIE['name'])){
    setcookie('name', 'anastasia');
    $_COOKIE['name'] = 'anastasia';
}
echo $_COOKIE['name'];
?><br>
Счетчик обновления страницы на куках в PHP<br>
<?php
if(!isset($_COOKIE['count'])){
    setcookie('count' ,1);
$_COOKIE['count'] = 1;
}else{
    setcookie('count', $_COOKIE['count'] + 1);
    $_COOKIE['count'] = $_COOKIE['count'] +1;
}
echo $_COOKIE['count'];

?><br>
Запишите в куку момент времени захода пользователя на страницу. 
При обновлении страницы выведите на экран, 
сколько времени прошло с момента первого захода на страницу.<br>


<?php
if(!isset($_COOKIE['tame'])){
    setcookie('tame', time());
    $_COOKIE['tame'] = time();
}
echo time() - $_COOKIE['tame'];
?><br>

Время жизни куки в PHP.
куки долго не живут - только до закрытия браузера. 
Продлить время жизни куки можно с помощью третьего параметра, 
который принимает момент времени в формате timestamp.
 Как только этот момент наступит - кука автоматически будет удалена браузером

 Установите какую-нибудь куку на месяц.<br>
 <?php
 if(!isset($_COOKIE['test5']))
{
    setcookie('test5', 'ivan', time()+60*60*24*30);
    $_COOKIE['test5'] = 'ivan';
}
 echo $_COOKIE['test5'];
 
 ?><br>
<?php
if(!isset($_COOKIE['test6'])){
    setcookie('test6', 'natasha', time()+60);//установление куки на 1 мин
    $_COOKIE['test6'] = 'natasha';
}
echo $_COOKIE['test6'];
?><br>

Удаление кук в PHP
<?php
setcookie('test6', '', time()); //удаление куки
var_dump($_COOKIE['test6']);
?><br>
Мгновенное удаление кук в PHP<br>

<?php
if(!isset($_COOKIE['firstname'])){ //создаем куку
    setcookie('firstname', 'krasnopeptsev');
    $_COOKIE['firstname'] = 'krasnopevtsev';
}
echo $_COOKIE['firstname'];
?><br>
<?php
if(isset($_COOKIE['firstname'])){
    setcookie('firstname', '', time());
    unset($_COOKIE['firstname']);//мгновенное удаление куки
}
var_dump($_COOKIE['firstname']);//null
?>


