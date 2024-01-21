<?php
$a = 70;
// < > >= <= == === !== !=== 
if ($a > 70) {
    echo 'верное решение', "\n";
}

echo $a;
echo "\n";
if ($a % 2 === 0) {
    echo 'Переменная четная', "\n";
} else echo 'false', "\n";

$pass = "dffhhkyuub";
$mail = "alex@.ru";

if (strlen($pass) > 90) {
    echo "true", "\n";
} else {
    echo "false", "\n";
}

if (strripos($mail, "@") and strlen($pass) > 9) {

    echo "true", "\n";
} else {
    echo "false", "\n";
}

$tem = 47; // температура воды

if ($tem >= 36 and $tem < 45) {
    echo "теплая вода", "\n";
} else echo "нельзя мыться ", "\n";



// если несколько условий

$s = 160;

if ($s <= 40) echo "brohze", "\n";
elseif ($s < 60) echo "silver", "\n";

elseif ($s < 80) echo "gold", "\n";
else echo "vip", "\n";


// swich case проверка конструкция нужна для заранее известным результатом

$tor = 56;

switch ($tor) {
      
    case ($tor < 12):
        echo "еще рано", "\n";
        break;
    case ($tor < 55):
        echo "самый раз", "\n";
        break;
    case ($tor > 55):
        echo "слишком поздно", "\n";
        break;
    default: 
        echo "иди спать","\n";
     
}

//тернарный оператор

$result = 7;
$res;

$res = ($result === 6) ? 100 : 120;
echo $res, "\n";
$date = [ 'year' => 2024, 'month' => "01", 'day' => "04" ];
echo $date['year'] ,"-", $date['month'], "-", $date['day'];
echo "\n";
$user = ['name' => "Алексей", 'surname' => "Юрьевич", 'patronymic' => "Краснопевцев"];

echo $user['name'] ," ", $user['surname'] ," ", $user['patronymic'];