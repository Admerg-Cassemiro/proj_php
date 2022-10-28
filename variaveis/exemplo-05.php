<?php

$nome = "Admerg----";

function teste(){

	global $nome; //a função agor enxerga a variavel $nome de fora da função
	echo $nome;


}

function teste2(){

	$nomeTeste2 = "João"; //variavel apenas local da função
	echo $nomeTeste2.":Agora no teste 2";
	unset($nomeTeste2);
	
}

teste();

teste2();


?>