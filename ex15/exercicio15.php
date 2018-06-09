<?php
	/* Pedro Lopes Garcia 
	   27/03/2018
	   Faça um algoritmo que receba um número e diga se este número está no intervalo entre 100 e 200.*/
	$n = $_POST["num"];
	
	echo "Número digitado: $n<br>";
	
	echo ($n > 100 && $n < 200) ? "O número está no intervalo" : "O número não está no intervalo";

?>
