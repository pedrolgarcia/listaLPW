<?php
    /*Pedro Lopes Garcia - 17/05/2018
    Faça um algoritmo que receba um número e mostre uma mensagem caso este número sege maior que 80, menor
    que 25 ou igual a 40.*/

    session_start();

    $num = $_POST["num"];
    
    if($num > 80){
        echo "O número é maior que 80";
    }elseif ($num == 40){
        echo "O número é igual a 40";
    }else if($num < 25){
        echo "O número é menor que 25";
    }

    echo "<a href='exercicio23.html'><button>Voltar</button></a><br>";
?>