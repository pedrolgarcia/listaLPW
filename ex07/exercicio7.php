<?php
	/* Pedro Lopes Garcia 
	   27/03/2018
	   Ler uma temperatura em graus Celsius e apresentá-la convertida em graus Fahrenheit. A fórmula de conversão é:
	   F=(9*C+160) / 5, sendo F a temperatura em Fahrenheit e C a temperatura em Celsius.*/
	$c = $_POST["t"];
	$f = (9 * $c + 160)/5;
	
	echo "A temperatura em graus Celsius é de $c<br>";
	echo "A temperatura em graus Fahrenheit é de $f";

?>
