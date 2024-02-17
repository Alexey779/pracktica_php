<form  method = "GET">
    <input  name="name1" placeholder="ваше имя ?">
    <input  name="salary" placeholder="ваша зарплата ?">
    <input name="age1" placeholder="ваш возраст?">
    <input type="submit">
</form>


<?php 
session_start();
if (!empty($_GET)) {
   
    
        $_SESSION['user'] = $_GET; 
    // $_SESSION['name1'] = $_GET['name1'];
    // $_SESSION['salary'] = $_GET['salary'];
    // $_SESSION['age1'] = $_GET['age1'];
    
}
?><br>

