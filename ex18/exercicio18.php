<?php
	/* Pedro Lopes Garcia 
	   10/04/2018
	   Faça um algoritmo que receba a idade de 75 pessoas e mostre mensagem informando “maior de idade” e “menor de
	   idade” para cada pessoa. Considere a idade a partir de 18 anos como maior de idade.*/
	$idades = array();

	for($i=0; $i<75; $i++){
		array_push($idades, rand(1, 100));
	}

	foreach($idades as $aux){
		if($aux < 18){
			echo $aux ." - Menor de idade";
			echo "<br>";
		}else {
			echo $aux ." - Maior de idade";
			echo "<br>";	
		}
	}

?>
