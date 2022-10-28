<?php
	
$meses = array(
	"Janeiro","Fevereiro","Março","Abril","Maio",
	"Junho","julho","Agosto","Setembto","Outubro","Nvembro","Dezembro"
	);

foreach ($meses as $index => $mes) {
	// code...
	echo "O Mês é:".($index + 1)." ".$mes."<br>";
}

?>