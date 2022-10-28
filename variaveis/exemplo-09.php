<?php
$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";


$q = strpos($frase, $palavra); //localizar texto

$texto = substr($frase, 0, $q);//vai até antes da pavra pesquisada

$texto2 = substr($frase, 0, $q + strlen($palavra));//vai ate a palvra e adiciona ela na pesquisa

var_dump($q);
echo "<br>";
var_dump($texto);
echo "<br>";
var_dump($texto2);
?> 