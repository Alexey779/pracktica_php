<?php
	session_start();
	echo $_SESSION['test']; // читаем из сессии 
?>

<?php
session_start();
echo $_SESSION['test2'];
?><br>
Возможные проблемы при работе с сессиями в PHP

нельзя делать никакого вывода в браузер до окончания работы с сессиями, в противном случае вы увидите следующую ошибку: 
Warning: Cannot send session cookie - headers already sent.<br>


<?php

    
	if (!empty($_SESSION)) {
		echo $_SESSION['num1'] + $_SESSION['num2'];
	}
?><br>
<?php 
if(!empty($_SESSION)){

echo $_SESSION['name'] . ' ' . $_SESSION['firstname'] . ' ' . $_SESSION['age'];  

}
?><br>
<?php unset($_SESSION)?>
<?php 
if(!empty($_SESSION)){

print_r($_SESSION['fur']);  

}
?>






<?php 
// if(!empty($_SESSION)){

// echo $_SESSION['name'] . ' ' . $_SESSION['firstname'] . ' ' . $_SESSION['age'];  

// }
?><br>


<?php 
if(!empty($_SESSION)){

echo $_SESSION['name1'] . ' ' . $_SESSION['salary'] . ' ' . $_SESSION['age1'];  

}
?><br>


<?php 
session_start();

// echo $_SESSION['name1'] . ' ' . $_SESSION['salary'] . ' ' . $_SESSION['age1'];  


?><br>
<?php
if (!empty($_SESSION)) {
    var_dump($_SESSION['user']);
    $t = array($_SESSION['user']);
    foreach($t as $d){?>
        <ul>
            <li>
          <p>name: <?php echo $d['name1'];?></p>
           </li>
           <li>
           <p>age: <?php echo $d['age1'];?></p>
           </li>
           <li>
            <p>solary: <?php echo $d['salary'];?></p>
           </li>
           
        </ul>
   <?php }
}?>