<?php
	/* Pedro Lopes Garcia 
	   27/03/2018
	   A Loja Mamão com Açúcar está vendendo seus produtos em 5 (cinco) prestações sem juros. Faça um algoritmo que
	   receba um valor de uma compra e mostre o valor das prestações.*/
	$vc = $_POST["compra"];
	$p = $vc / 5;
	
	echo "Valor da compra: $vc<br>";
	echo "5x R$$p sem juros";

?>
