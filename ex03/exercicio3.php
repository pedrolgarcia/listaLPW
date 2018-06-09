<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php
	#Escrever um algoritmo para determinar o consumo médio de um automóvel sendo fornecida a distância total percorrida pelo automóvel e o total de 
	#combustível gasto.
	$dis = $_POST["dis"];
	$com = $_POST["com"];
	$media = $dis / $com;
	
	echo "O consumo médio de um automóvel que percorreu $dis KM/h e gastou $com litros de combustível é de $media KM/L";
?>