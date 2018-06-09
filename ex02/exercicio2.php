<?php
	#Faça um algoritmo que receba dois números e ao final mostre a soma, subtração, multiplicação e a divisão dos números lidos.
	$a = $_GET["num1"];
	$b = $_GET["num2"];
	$soma = $a + $b;
	$sub = $a - $b;
	$mult = $a * $b;
	$div = $a / $b;
	
	echo "Calculando valores digitados...<br>";
	echo "Valores : $a e $b<br>";
	echo "Soma = $soma<br>";
	echo "Subtração = $sub<br>";
	echo "Multiplicação = $mult<br>";
	echo "Divisão = $div<br>";
?>