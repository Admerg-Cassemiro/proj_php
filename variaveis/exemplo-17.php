<?php

//array simples - vetor -----------------------
$frutas = array("abacaxi","melancia","laranja");

print_r($frutas); //print_r para imprimir array
//---------------------------------------------

//matriz bi-dimensional 
$carro[0][0] = "Ford";
$carro[0][1] = "Chevrolet";
$carro[0][2] = "Volkswagen";
$carro[0][3] = "Fiat";
$carro[1][0] = "Focus";
$carro[1][1] = "Onix";
$carro[1][2] = "Golf";
$carro[1][3] = "Bravo";

echo "<br>";
//print_r($carro);
echo $carro[0][0]." ".$carro[1][0]."<br>";
echo $carro[1][0]." ".$carro[1][1]."<br>";

echo end($carro[1]);//puxa o ultimo dado nessa linha 

?>