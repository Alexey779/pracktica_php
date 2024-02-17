//Основы работы с формами в PHP
//Формы создаются с помощью тега form, тегов input и кнопок submit:
<form>
    <input>
    <input>
    <input type="submit">
    //////
</form>
Сделайте форму с тремя инпутами,
в которые можно ввести имя, возраст и зарплату пользователя.
<form action="/result.php">
    <input type="submit">
    <input name="введите имя">
    <input age="ваш возраст">
    <input salary="ваша заработная плата">
</form>
Метод отправки формы в PHP
С помощью атрибута method мы
указываем метод отправки формы. Он может быть GET или POST.
<form action="/result.php" method="GET">
    <input name="test1">
    <input name="test2">
    <input type="submit">
</form>
<form action="/result.php" method="POST">
    <input name="test1">
    <input name="test2">
    <input type="submit">
</form>
На странице index.php сделайте форму.
Отправьте ее на страницу result.php. Проверьте оба метода отправки формы.
<form action=".\index.php" method="GET">
    <input age="">
    <input type="submit" name="text">
</form>
<form action=".\index.php" method="POST">
    <input salary="">
    <input type="submit" name="text2">
</form>
Получение данных форм в PHP
мы можем получить данные формы
с помощью специальных переменных $_GET, $_POST и $_REQUEST.
//////////////////////////////////////////
Получение данных форм методом GET в PHP
<form action="/result.php" method="GET">
    <input name="test1">
    <input name="test2">
    <input type="submit">
</form>
Сделайте форму с тремя инпутами. Пусть в эти инпуты вводятся числа.
После отправки формы выведите на экран сумму этих чисел.
<form action="/result.php" method="GET">
    <input name="int">
    <input name="age">
    <input name="id">
    <input type="submit">
</form>

Получение данных форм методом POST в PHP<br>
Ваше имя и возраст
<form action="/result.php" method="POST">
    <input name="name" placeholder="как ваше имя?">
    <input name="age" placeholder="сколько вам лет?">
    <input type="submit">
</form>
<form action="/result.php" method="POST">
    <input type="password" name="pass">
    <input type="submit">
</form>
С помощью трех инпутов спросите у пользователя год, месяц и день рождения
пользователя. После отправки формы определите день недели, в который родился пользователь.

<form action="/result.php" method="POST">
    <input name="year" placeholder="введите год">
    <input name="week" placeholder="введите месяц">
    <input name="day" placeholder="введите день">
    <input type="submit">
</form>

Обработка формы в одном файле PHP

<form action="" method="GET">
    <input name="test3">
    <input name="test4">
    <input type="submit">
</form>

<?php
if (!empty($_GET)) {
    echo $_GET['test3'] . $_GET['test4'];
}
?>
<form action="" method="GET">
    <input name="surname">
    <input name="firstname">
    <input name="lastname">
    <input type="submit">
</form>
<?php
if (!empty($_GET)) {
    echo $_GET['surname'] . ' ' . $_GET['firstname'] . ' ' . $_GET['lastname'];
}
?>
Скрытие формы после отправки в PHP
<?php if (empty($_POST)) : ?>
    <form action="" method="post">
        <input name="test1" placeholder="val">
        <input name="test2" placeholder="val2">
        <input type="submit">
    </form>

<?php else : ?>

    <p><?php echo $_POST['test1'] . $_POST['test2']; ?></p>
<?php endif; ?>



<?php if (!empty($_POST)) : ?>
    <!-- <p>Фамилия <?php echo $_POST['surname']; ?></p>   -->
    <p>Приветствую вас <?php echo $_POST['name'] . '!'; ?></p>
    <!-- <p>Отчество <?php echo $_POST['middle_name']; ?></p> -->
<?php else : ?>
    <form method="post">
        <input type="text" <?php if (isset($_POST['surname']))
                                echo $_POST['surname'] ?> name="surname" placeholder="Фамилия">
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="middle_name" placeholder="Отчество">
        <button type="submit">Отправить</button>
    </form>
<?php endif; ?>


<?php if (!empty($_POST)) : ?>
    <p>hello<?php echo $_POST['name1'] . '!'; ?></p>
<?php else : ?>
    <form action="" method="POST">
        <input name="name1" placeholder="what is your name?">
        <input type="submit">
    <?php endif; ?>












    <p>Сохранение значений формы после отправки в PHP</p>

    <form action="" method="post">
        <p><input name="test" value="<?php if (isset($_POST['test']))
                                            echo $_POST['test'] ?>" placeholder="send"></p>

        <input type="submit">
    </form>
    С помощью формы спросите город и страну пользователя.
    После отправки формы выведите введенные данные на экран.
    Сделайте так, чтобы введенные данные не пропадали из инпутов после отправки формы.

    <?php if (empty($_POST)) : ?>
        <p>ваш город <?php echo $_POST['city'] . ' ' ?></p>
        <p>ваша страна <?php echo $_POST['contry'] ?></p>
    <?php else : ?>
        <form action="" method="post">
            <input type="text" name="city" value="<?php if (isset($_POST["city"]))
                                                        echo $_POST['city'] ?>" placeholder="city">

            <input type="text" name="contry" value="<?php if (isset($_POST['contry']))
                                                        echo $_POST['contry'] ?>" placeholder="contry">

            <input type="submit">
        </form>

    <?php endif; ?>
    <?php if (!empty($_POST)) : ?>
        <p> это ваш город ? <?php echo $_POST['city'] ?> </p>
    <?php endif; ?>
    Спросите город пользователя с помощью формы. Результат запишите в
    переменную $city. Выведите на экран фразу 'Ваш город: %Город%'


    GET это получить, а POST отправить или разместить


    <form action="" method="GET">
        <input type="text" value="<?php if (isset($_GET['city'])) // значение остается в форме после отправки
                                        echo $_GET['city'] ?>" name="city">
        <input type="submit">
    </form>
    <?php
    //Если форма была отправлена и город не пустой:
    if (!empty($_REQUEST['city'])) {
        $city = $_REQUEST['city'];
        echo 'Ваш город: ' . $city;
    }
    ?>
    Сохранение значения по умолчанию формы в PHP

    Пусть мы хотим сделать так, чтобы по при заходе
    на страницу в инпуте уже был какой-то текст.
    Пользователь может поредактировать этот текст,
    а может оставить его без изменения. А после отправки формы
    в инпуте должен остаться тот текст, который был на момент отправки.


    <form action="" method="GET">
        <input name="test" value="<?php
                                    if (isset($_GET['test']))
                                        echo $_GET['test'];
                                    else echo 'default'
                                    ?>">
        <input type="submit">
    </form>
    С помощью формы спросите у пользователя год.
    После отправки определите, этот год високосный или нет.
    Сделайте так, чтобы при первом заходе на страницу в инпуте уже стоял текущий год.

    <form action="" method="GET">
        <input name="text" value="<?php if (isset($_GET['text'])) // если существует переменная
                                        echo $_GET['text'];
                                    else echo date('Y');
                                    ?>">
        <input type="submit">
    </form>

    <?php
    $dat = $_GET['text'];
    if ($dat % 4 === 0) {
        echo 'Високосный год' . ':' .  $_GET['text'];
    } else {
        echo 'не високосный год' . ':' .  $_GET['text'];
    }

    ?><br>
    Сокращенный код для сохранения значений по умолчанию в PHP<br>
    /////////////////////////////////////////////////////////
    С помощью трех инпутов спросите у пользователя год, месяц и день.
    После отправки формы выведите на экран, сколько дней осталось
    от введенной даты до Нового Года. По заходу на страницу сделайте так,
    чтобы в инпутах стояла текущая дата.

    <form action="" method="GET">
        <input name="year" value="<?php if (isset($_GET['year']))
                                        echo date('Y');
                                    ?>">
        <input name="mother">
        <input name="day" value="<?php if (isset($_GET['day']))
                                        $day = date('d');
                                    echo $day;
                                    ?>">
        <input type="submit">
    </form>
    <?php
    $date = date('L');
    if (isset($_GET['day'])) {
        $endYear = 366 - $day;
        echo 'До конца года осталось ' . $endYear . ' дней.';
    } else {
        $endYear = 365 - $day;
        echo 'До конца года осталось ' . $endYear . ' дней.';
    }
    ?>
    <?php if (isset($_GET)) ?>
    <?= $_GET['year'] ?><br>

    <?php echo date('L') ?><br>
    <?= date('z') ?>
    //////////////////////////////////////////////////
    Элемент textarea в PHP
    Попросите пользователя оставить отзыв на сайт.
    После отправки формы выведите этот отзыв на экран.

    <form action="" method="GET">
        <textarea name="test" placeholder="Пожалуйста оставьте отзыв"></textarea>
        <input type="submit">
    </form>
    <?php if (isset($_GET['test']))
        echo $_GET['test'];
    ?>

    Сохранение значения textarea после отправки в PHP<br>

    <form action="" method="GET">
        <textarea name="test"><?php if ($_GET['test'])
                                    echo $_GET['test'] ?></textarea>
        <input type="submit">
    </form>

    Чекбокс в PHP

    <form action="" method="GET">
        <input type="checkbox" name="flag">
        <input name="text">
        <input type="submit">
    </form>

    <?php
    if (!empty($_GET)) { // если форма была отправлена 
        if (isset($_GET['flag'])) { // если флажок отмечен 
            echo 'отмечен';
        } else {
            echo 'не отмечен';
        }
    }
    ?><br>
    Сделайте форму с инпутом и флажком. С помощью инпута спросите у пользователя имя.
    После отправки формы, если флажок был отмечен, поприветствуйте пользователя,
    а если не был отмечен - попрощайтесь.


    <form action="" method="GET">
        <input type="checkbox" name="flag">
        <input name="age" placeholder="ваше имя?">
        <input type="submit">
    </form>
    <?php if (!empty($_GET)) {
        if (isset($_GET['flag'])) {
            echo 'Приветствую вас' . ' ' . $_GET['age'];
        } else {
            echo 'До свидание';
        }
    }
    ?><br>
    Нюансы использования чекбоксов в PHP
    <form action="" method="GET">
        <input type="hidden" name="check" value="0">
        <input type="checkbox" name="check" value="1">

        <input type="submit">
    </form>
    <?php if (!empty($_GET)) { //
        if ($_GET['check'] === '1') {
            echo "yes";
        } else {
            echo "no";
        }
    }

    ?>
    <form action="" method="GET">
        <input type="hidden" name="flag1" value="0">
        <input type="checkbox" name="flag1" value="1">
        <input type="submit">
    </form>
    <?php
    if (!empty($_GET)) {
        if ($_GET['flag1'] === '1') {
            echo 'отмечен';
        } else {
            echo 'не отмечен';
        }
    }
    ?>


    <form action="" method="GET">
        <input type="hidden" name="flag" value="0">
        <input type="checkbox" name="flag" value="1">
        <input type="submit">
    </form>

    <?php if (!empty($_GET)) {
        if ($_GET['flag'] === '1') {
            echo 'hello !';
        } else {
            echo 'bay';
        }
    }
    ?><br>
    С помощью флажка спросите у пользователя,
    есть ему уже 18 лет или нет. Если есть,
    разрешите ему доступ на сайт, а если нет - не разрешите.
    <form action="" method="GET">
        <input type="hidden" name="age" value="0">
        <input type="checkbox" name="age" value="1">
        <input type="submit">
    </form>
    <?php if (!empty($_GET)) {
        if ($_GET['age'] === "1") {
            echo 'вам есть 18 лет';
        } else {
            echo 'вам нет 18 лет';
        }
    }

    ?><br>
    Сохранение выбранного значения в чекбоксе после отправки в PHP

    <form action="" method="GET">
        <input type="hidden" name="flag2" value="0">
        <input type="checkbox" name="flag2" value="1" <?php if (!empty($_GET['flag2']))
                                                            echo 'checked'
                                                        ?>>
        <input type="submit">
    </form><br>
    Сделайте три чекбокса,
    которые будут сохранять свое значение после отправки.

    <form action="" method="GET">
        <input type="hidden" name="sale" value="0">
        <input type="checkbox" name="sale" value="1" <?php
                                                        if (!empty($_GET['sale']))
                                                            echo 'checked';
                                                        ?>>
        <input type="checkbox" name="sale" value="1" <?php if (!empty($_GET['sale']))
                                                            echo 'checked';
                                                        ?>>
        <input type="checkbox" name="sale" value="1" <?php if (!empty($_GET['sale']))
                                                            echo 'checked';
                                                        ?>>

        <input type="submit">
    </form><br>
    Радиокнопки в PHP
    <form action="" method="GET">
        <input type="hidden" name="radio" value="0">
        <input type="radio" name="radio" value="1">
        <input type="radio" name="radio" value="2" checked> по умолчанию будет активна эта радиокнопка
        <input type="radio" name="radio" value="3">
        <input type="submit">
    </form>
    С помощью двух переключателей спросите у пользователя его пол.
    Выведите результат на экран.
    <h3>Пожалуйста укажите свой пол</h3>
    <form action="" method="GET">
        <input type="hidden" name="name3" value="0">
        <p>men<input type="radio" name="name3" value="men" <?php
                                                            if (!empty($_GET['name3']) and $_GET['name3'] === 'men')
                                                                echo 'checked';
                                                            ?>></p>
        <p>women<input type="radio" name="name3" value="women" <?php
                                                                if (!empty($_GET['name3']) and $_GET['name3'] === 'women')
                                                                    echo 'checked';
                                                                ?>></p>
        <input type="submit">
    </form>
    <?php
    if (!empty($_GET['name3'])) {
        echo 'спасибо!' . ' ' . $_GET['name3'];
    }
    ?>
    /////////////////////////////////////////////
    Сохранение выбранного значения в радиокнопках после отправки в PHP

    <form action="" method="GET">
        <p>country<input type="radio" name="radio" value="country" <?php
                                                                    if (
                                                                        !empty($_GET['radio']) and $_GET['radio']
                                                                        === 'country'
                                                                    ) {
                                                                        echo 'checked';
                                                                    }
                                                                    ?>></p>
        <p>world<input type="radio" name="radio" value="world" <?php
                                                                if (
                                                                    !empty($_GET['radio']) and $_GET['radio']
                                                                    === 'world'
                                                                ) {
                                                                    echo 'checked';
                                                                }
                                                                ?>></p>
        <p>hello<input type="radio" name="radio" value="hello" <?php
                                                                if (
                                                                    !empty($_GET['radio']) and $_GET['radio']
                                                                    === 'hello'
                                                                ) {
                                                                    echo 'checked';
                                                                }
                                                                ?>></p>
        <input type="submit">
    </form>
    <?php if (!empty($_GET['radio']))
        echo 'Спасибо !' . ' ' . $_GET['radio'];
    ?>

    С помощью переключателей попросите пользователя выбрать его язык.
    Сделайте так, чтобы выбор не пропадал после отправки формы.
    <h4>Выберите язык</h4>
    <form action="" method="GET">
        <input type="hidden" name="lang" value="0">
        <p>english<input type="radio" name="lang" value="english" <?php
                                                                    if (!empty($_GET['lang']) and $_GET['lang'] === 'english')
                                                                        echo 'checked'; //сохраняем кнопку после вывода                                                          ?>></p>
        <p>russan<input type="radio" name="lang" value="russan" <?php
                                                                if (!empty($_GET['lang']) and $_GET['lang'] === 'russan')
                                                                    echo 'checked';                                                   ?>>
            <input type="submit">
    </form>
    <?php if (!empty($_GET['lang']))
        echo 'Выбран' . ':' . ' ' . $_GET['lang'] . '!' . ' ' . 'язык';
    ?>
    ///////////////////////////////////////////////////////
    Селекты в PHP
    <form action="" method="GET">
        <select name="test">
            <option>item1</option>
            <option>item2</option>
            <option>item3</option>
        </select>
        <input type="submit">
    </form>

    <?php if (!empty($_GET['test']))
        echo $_GET['test'];
    ?>

    С помощью выпадающего списка предложите пользователю выбрать страну, в которой он живет.

    <h3>Выберите из списка город</h3>
    <form action="" method="GET">
        <select name='city'>
            <option>Москва</option>
            <option>Санкт-Питербург</option>
            <option>Кемерово</option>
        </select>
        <input type="submit">
    </form>
    <?php if (!empty($_GET['city']))
        echo 'Ваш город' . ':' . ' ' . $_GET['city'];
    ?><br>

    Атрибут value в селектах в PHP<br>

    С помощью выпадающего списка
    попросите пользователя выбрать его язык.
    <h3>Выберите язык</h3>
    <form action="" method="GET">
        <select name="lang2">
            <option value="english">Ehglish</option>
            <option value="russan">Russan</option>
            <option value="china">China</option>
        </select>
        <input type="submit">
    </form>
    <?php
    if (!empty($_GET['lang2']))
        echo 'Спасибо, Ваш' . ':' . $_GET['lang2'] . ' ' . 'язык';
    ?><br>
    /////////////////////////////////////////
    Сохранение значения в селектах после отправки в PHP

    <h3>Выберите язык</h3>
    <form action="" method="GET">
        <select name="lang2">
            <option value="english" <?php
                                    if (!empty($_GET['lang2']) and $_GET['lang2'] === 'english') //сохраняем значения в селектах
                                        echo 'selected';
                                    ?>>Ehglish</option>
            <option value="russan" <?php
                                    if (!empty($_GET['lang2']) and $_GET['lang2'] === 'russan') //сохраняем значения в селектах
                                        echo 'selected';
                                    ?>>Russan</option>
            <option value="china" <?php
                                    if (!empty($_GET['lang2']) and $_GET['lang2'] === 'china')
                                        echo 'selected';
                                    ?>>China</option>
        </select>
        <input type="submit">
    </form>
    <?php
    if (!empty($_GET['lang2']))
        echo 'Спасибо, Ваш' . ':' . $_GET['lang2'] . ' ' . 'язык';
    ?><br>
///////////////////////////////////
пример из книги
    <form action="" method="GET">
        <select name="test">
            <option value="1" <?php
                                if (!empty($_GET['test']) and $_GET['test'] === '1') {
                                    echo 'selected';
                                }
                                ?>>item1</option>
            <option value="2" <?php
                                if (!empty($_GET['test']) and $_GET['test'] === '2') {
                                    echo 'selected';
                                }
                                ?>>item2</option>
            <option value="3" <?php
                                if (!empty($_GET['test']) and $_GET['test'] === '3') {
                                    echo 'selected';
                                }
                                ?>>item3</option>
        </select>
        <input type="submit">
    </form>

    GET запросы в PHP<br> 

<?php
	var_dump($_GET); // ['par1' => '1', 'par2' => '2'] 
?>
Отправьте с помощью GET-запроса число. Выведите его на экран.<br>
<?php
	echo $_GET['par2']; // выведет array(1) { ["par2"]=> string(2) "30" } 30 
?>

Отправьте с помощью GET-запроса число. 
Выведите его на экран квадрат этого числа.<br>

<?php


	echo $_GET['par3']; // выведет 
?><br>
GET запросы с помощью ссылок в PHP
////////////////////////////////////
<a href="result.php?par1=1&par2=2">ссылка</a>
<a href="?par1=1">1</a><br>
Сделайте три ссылки. Пусть первая передает число 1,
 вторая - число 2, третья - число 3. Сделайте так, 
 чтобы по нажатию на ссылку на экран выводилось ее число.

 <a href="?param=1">ссылка 1</a><br>
 <?php echo $_GET['param']?>
<a href="?param2 = 2"> ссылка 2</a><br>
<?php echo $_GET['param2']?>
<a href= "?param3=3">ссылка 3</a><br>
<?php echo $_GET['param3']?>

Сформируйте в цикле 10 ссылок. Пусть каждая ссылка передает свое число. 
Сделайте так, чтобы по нажатию на ссылку на экран выводилось ее число.<br>
<?php
for($i=1; $i<=10; $i++){ ?>

    <a href= "?papams =<?=$i?>"><?=$i?></a><br>
 <?php echo $_GET['papams'] ?>
<?php } ?>
 
   


<?php 
$arr = ['a', 'b', 'c', 'd', 'e'];
if (isset($_GET['element'])) {
  $element = $_GET['element'];
  if (in_array($element, $arr)) {
    echo "Выбранный элемент: $element";
  } else {
    echo "Выбранный элемент не найден";
  }
}
foreach($arr as $elem) { 
?>
  <a href="?element=<?=$elem?>"><?=$elem?></a>
<?php 
} 
?><br>
Сделайте так, чтобы с помощью GET запроса можно было 
вывести любой элемент этого массива. Для этого 
с помощью цикла foreach сделайте ссылку для каждого элемента массива.<br>
<?php $arr = ['a', 'b', 'c', 'd', 'e']; 
foreach($arr as $elem) { ?>
<a href="?element=<?=$elem?>"><?=$elem?></a>
<?php } ?><br>
<?php var_dump($_GET) ?>

Практика на формы в PHP

Напишите скрипт, который будет преобразовывать 
температуру из градусов Цельсия в градусы Фарингейта. 
Для этого сделайте инпут и кнопку
(0 °C × 9/5) + 32 = 32 °F

///////////////////////////////////












