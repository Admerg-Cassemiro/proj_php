<?php
////////////////////////////////
$nome = "Hcode";
$site = 'www.hcode.com.br';
$ano = 1992;
$salario = 5500.99;
$bloqueado = false;
///////////////////////////////

$frutas = array("abacaxi","laranja","manga");

//echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);

$arquivo = fopen("exemplo-02.php","r");

var_dump($arquivo);

?>