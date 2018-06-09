<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php
	#Escrever um algoritmo que leia o nome de um vendedor, o seu salário fixo e o total de vendas efetuadas por ele no mês (em dinheiro). 
	#Sabendo que este vendedor ganha 15% de comissão sobre suas vendas efetuadas, informar o seu nome, o salário fixo e salário no final do mês.
	$nome = $_POST["nome"];
	$sf = $_POST["salario"];
	$v = $_POST["vendas"];
	$st = $sf + ($v * (15/100));
	
	echo "<h1>Informações do vendedor:</h1>";
	echo "Nome: $nome<br>";
	echo "Salário fixo: R$". number_format($sf, 2). "<br>";
	echo "Salário no final do mês: R$". number_format($st, 2). "<br>";
?>