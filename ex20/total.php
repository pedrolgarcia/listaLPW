<?php

    require_once 'Carro.php';
    session_start();

    //Contadores de carros
    $contTotal = 0;
    $cont2000 = 0; 

    //Exibindo todos os carros
    foreach ($_SESSION['carro'] as $key => $value) { //Percorre o array de sessão
        echo "<h2>Carro " . ($key + 1) . "</h2>";
        foreach ($value as $chave => $valor) { //Percorre o array de carro
            if($chave === "ano" && $valor <= 2000){
                $cont2000++; //Conta os carros até o ano 2000
            }
            echo "<strong>" . $chave . "</strong>: " . $valor . "<br>"; //Exbibe os carros do array
        }
        $contTotal++; //Conta o total de carros
        echo "-----------------------------------------------------------";
    }

    echo "<h1>Total de carros até o ano 2000: $cont2000</h1>";
    echo "<h1>Total de carros: $contTotal</h1>";

?>