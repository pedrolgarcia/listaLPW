<?php
	/* Pedro Lopes Garcia 
	   27/03/2018
	   Elaborar um algoritmo que efetue a apresentação do valor da conversão em real (R$) de um valor lido em dólar
	   (US$). O algoritmo deverá solicitar o valor da cotação do dólar e também a quantidade de dólares disponíveis com o
	   usuário.*/
	$d = $_POST["d"];
	$c = $_POST["cot"];
	$r = $d * $c;
	
	echo "US$".number_format($d,2). " >>> R$$". number_format($r,2);

?>
