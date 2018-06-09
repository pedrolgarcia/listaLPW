<?php
	/* Pedro Lopes Garcia 
	   27/03/2018
	   Escrever um algoritmo que leia dois valores inteiro distintos e informe qual é o maior.*/
	$n1 = $_POST["num1"];
	$n2 = $_POST["num2"];
	
	echo "Valor 1: $n1<br>";
	echo "Valor 2: $n2<br>";
	
	if($n1 > $n2){
		echo "O valor 1 é maior que o valor 2";
	}elseif($n1 < $n2){
		echo "O valor 2 é maior que o valor 1";
	}else{
		echo "Os valores são iguais";
	}

?>
