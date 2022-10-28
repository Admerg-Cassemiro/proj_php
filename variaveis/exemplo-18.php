<?php

//http://127.0.0.1/variaveis/exemplo-18.php
$pessoas = array();

array_push($pessoas, array(
	'nome' => 'João',
	'idade' => 20
)); 

array_push($pessoas, array(
	'nome' => 'Jessica',
	'idade' => 28
)); 

array_push($pessoas, array(
	'nome' => 'Ademberg',
	'idade' => 37
)); 

array_push($pessoas, array(
	'nome' => 'Alexsandra',
	'idade' => 46
)); 

//transforma o array em Json
echo json_encode($pessoas);


?>