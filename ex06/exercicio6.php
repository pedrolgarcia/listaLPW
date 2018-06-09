<?php
	/* Pedro Lopes Garcia 
	   27/03/2018
	   Ler uma temperatura em graus Celsius e apresentá-la convertida em graus Fahrenheit. A fórmula de conversão é:
	   F=(9*C+160) / 5, sendo F a temperatura em Fahrenheit e C a temperatura em Celsius.*/
	$a = $_POST["v1"];
	$b = $_POST["v2"];
	
	echo "Variável A: $a<br>";
	echo "Variável B: $b<br>";
	
	echo "<h1>Trocando...</h1><br>";
	
	$aux = $a;
	$a = $b;
	$b = $aux;
	echo "Variável A: $a<br>";
	echo "Variável B: $b<br>";

?>
