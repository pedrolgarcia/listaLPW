<?php
	/* Pedro Lopes Garcia 
	   27/03/2018
	   O custo ao consumidor de um carro novo é a soma do custo de fábrica com a percentagem do distribuidor e dos
	   impostos (aplicados, primeiro os impostos sobre o custo de fábrica, e depois a percentagem do distribuidor sobre o
	   resultado). Supondo que a percentagem do distribuidor seja de 28% e os impostos 45%. Escrever um algoritmo que
	   leia o custo de fábrica de um carro e informe o custo ao consumidor do mesmo.*/
	$custo = $_POST["custo"];
	$cc = ($custo + ($custo * (45/100))) + ($custo * (28/100));
	
	echo "O custo ao consumidor do carro é R$$cc"; 

?>
