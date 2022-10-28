<?php

$suaIdade = 1000;
$idCrianca = 12;
$idAdolescente = 13;
$idAdulto = 18;
$idMelhor = 65;
$idIdoso = 80;

// If Ternário
// echo ($idade < $maior):"Idade Menor":"Idade Maior";

if($suaIdade <= $idCrianca && $suaIdade >= 0){
	echo "Criança";
}else if($suaIdade < $idAdulto && $suaIdade >= $idAdolescente){
	echo "Adolescente";
}else if($suaIdade < 50 && $suaIdade >= $idAdulto ){
	echo "Adulto";
}else if ($suaIdade >= 50 && $suaIdade < $idIdoso){
	echo "Melhor idade";
} else 
	echo "Idoso";


?>