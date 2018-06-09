<?php
	/* Pedro Lopes Garcia 
	   27/03/2018
	   Faça um algoritmo que receba um número e mostre uma mensagem caso este número seja maior que 10.*/
	$n = $_POST["num"];
	
	echo "Número digitado: $n<br>";
	
	$res = $n > 10 ? "O número é maior que 10" : " "; 
	
	echo $res;

?>
