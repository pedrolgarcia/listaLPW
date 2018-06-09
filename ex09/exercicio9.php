<?php
	/* Pedro Lopes Garcia 
	   27/03/2018
	   Faça um algoritmo que receba um valor que foi depositado e exiba o valor com rendimento após um mês.
	   Considere fixo o juro da poupança em 0,70% a. m.*/
	$vd = $_POST["vd"];
	$vr = $vd + ($vd * 0.70/100);
	
	echo "Valor com rendimento após um mês: $vr";

?>
