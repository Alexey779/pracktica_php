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


