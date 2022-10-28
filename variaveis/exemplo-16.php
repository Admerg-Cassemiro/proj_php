<?php

$condicao = true;

$iteracao = 0;
while ($condicao){
	$numero= rand(1,100);
	if ($numero == 3){

		echo"<br>"."Numero: ".$numero." Iterações= ".$iteracao."<br>";
		$condicao = false;

	} else{
		echo $numero." ";
		$iteracao++;
	}
}

?>