<?php
//while
$s = 0;
while ($s< 20) {
    echo $s, " ";
    $s= $s + 5;

}
echo "\n";
$t = 0;
while ($t< 30) {
    echo $t, " ";
    $t= $t + 5;

}

echo "\n";
$w = 70;
while ($w > 0) {
    
    $w= $w - 5;
    
    echo $w, " ";
if($w === 55) break; //мы можем остановить цикл в этом месте
}
echo "\n";
$v = 100;
while ($v > 10){
    if($v === 60 ) break; //прерывание операции
    $v = $v - 5;
    echo $v, " ";
}
echo "\n\n";
 $sum = 0;
//сумма всех чисел до 10
 for( $i = 0; $i <= 10; $i++){
    $sum = $sum + $i;
    echo $sum." ";
 }
 echo "\n";
echo $sum." ";
 echo"\n";//произведение чисел до 5
 $n = 1;
for ( $i = 1; $i  <  5; $i= $i*2 ){
    $n = $n * $i;
    
}
echo $n, " ";

$j = 0;
$i = 0;
while ($i < 10) {
   $i++;
    $j = $j + $i;



}
echo $j;
echo "\n";
$foo = 0;

for ($i = 0; $i <= 5; $i++) {
    $foo;
     $foo = $i;
    echo $foo. "_";
}

$foo1 = 3;
echo "\n";
for ($i = 3; $i >= 0; $i--){
    $out;
    $out = $i;
    echo $out."_";
}
