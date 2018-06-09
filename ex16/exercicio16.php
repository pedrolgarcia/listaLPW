<?php
	/* Pedro Lopes Garcia 
	   27/03/2018
	   Escrever um algoritmo que leia o nome e as três notas obtidas por um aluno durante o semestre. Calcular a sua
	   média (aritmética), informar o nome e sua menção aprovado (media >= 7), Reprovado (media <= 5) e Recuperação
	   (media entre 5.1 a 6.9).*/
	$nome = $_POST["nome"];
	$n1 = $_POST["n1"];
	$n2 = $_POST["n2"];
	$n3 = $_POST["n3"];
	$media = ($n1 + $n2 + $n3)/3;
	
	if($media >= 7){
		$sit = "APROVADO";
	}elseif($media <= 5){
		$sit = "REPROVADO";
	}else{
		$sit = "DE RECUPERAÇÃO";
	}
	
	echo "O aluno $nome tem média ". number_format($media,2)." e está $sit";

?>
