<?php
	/* Pedro Lopes Garcia 
	   27/03/2018
	   Escrever um algoritmo que leia o nome de um aluno e as notas das três provas que ele obteve no semestre. No final informar o nome do aluno e a 
	   sua média (aritmética).*/
	$nome = $_POST["nome"];
	$n1 = $_POST["n1"];
	$n2 = $_POST["n2"];
	$n3 = $_POST["n3"];
	$media = ($n1+$n2+$n3)/3;
	
	echo "A média do aluno $nome é $media";

?>
