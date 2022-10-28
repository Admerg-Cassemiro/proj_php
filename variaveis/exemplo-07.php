<?php

$a = 50;
$b = 45;
$c = 50;
$d = 60;
$e = NULL;
$f = NULL;
$g = NULL;
$i = NULL;
$x = 10;
$y = 10;
$z = 10;

//opadores especiais
//se a > b = 1 -- se a==b = 0 --- se a < b = -1
var_dump($a<=>$b);
var_dump($a<=>$c);
var_dump($a<=>$d);

// se se for NULL ele vai para o proximo ate chegar em um valor diferente de NULL;

echo "<br>";
echo $e ?? $f ?? $a;
echo "<br>";
echo $e ?? $f ?? $g ?? $b;
echo "<br>";
echo $e ?? $f ?? $g ?? $i ?? $d;
echo "<br>";
echo "-------------------------------------------";
echo "<br>";
//Operadores Incrementais

echo $x;
echo "<br>";
echo ++$y;
echo "<br>";
echo $z++;
echo $z++;

echo "<br>";
echo "-------------------------------------------";
echo "<br>";
?>