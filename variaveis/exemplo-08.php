<?php

$nome = "Hcode"; //Aspas dupla mostra o valor da variavel dentro do echo sem concatenar - interpolação da variável

$nome2 = 'treinamentos sempre'; //Aspas simples entende que tudo é texto 

echo "Nome: $nome";//Aspas dupla mostra o valor da variavel dentro do echo sem concatenar - interpolação da variável
echo "<br>";
echo 'Nome: $nome';//Aspas simples entende que tudo é texto 

echo "----------------------------------------------";
echo "<br>";
echo strtoupper($nome2);//todas MAIUSCULAS
echo "<br>";
echo strtolower($nome2);//Todas MINUSCULAS
echo "<br>";
echo ucfirst($nome2);// Apenas a primeira letra da primeira palavra MAIUSCULA
echo "<br>";
echo ucwords($nome2);//A primeira letra de cada palavra MAIUSCULA
echo "<br>";
echo "----------------------------------------------";
echo "<br>";
$nome2 = str_replace("e","&", $nome2); //procura e substitui 
echo($nome2);
echo "<br>";
$nome2 = strtoupper(str_replace("e","&", $nome2));
echo($nome2);

?>