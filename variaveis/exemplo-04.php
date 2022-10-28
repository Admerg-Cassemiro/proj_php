<?php

$nomeA = $_GET["a"];
$nomeB = $_GET["b"];
$nomeC = $_GET["c"];

//http://127.0.0.1/variaveis/exemplo-04.php?a=123&b=456&c=789
var_dump($nomeA);
echo "</br>";
var_dump($nomeB);
echo "</br>";
var_dump($nomeC);
$ip = $_SERVER["REMOTE_ADDR"];
$ipL = $_SERVER["SCRIPT_NAME"];
echo "</br>";
echo "Access:";
echo $ip; //pega  ip da maquina
echo $ipL; //pega a pagina que ele ta rodando

?>