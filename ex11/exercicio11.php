<?php
	/* Pedro Lopes Garcia 
	   27/03/2018
	   Faça um algoritmo que receba o preço de custo de um produto e mostre o valor de venda. Sabe-se que o preço de
	   custo receberá um acréscimo de acordo com um percentual informado pelo usuário.*/
	$custo = $_POST["custo"];
	$ac = $_POST["ac"];
	$custo = $custo + ($custo * $ac/100);
	
	echo "O valor de venda com um acréscimo de $ac% é de $custo"; 

?>
