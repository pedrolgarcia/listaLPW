<?php

    require_once 'Produto.php';

    session_start();

    $totalC = 0;
    $totalV = 0;

    foreach ($_SESSION['produto'] as $key => $value) { 
        echo "<h2>Produto " . ($key + 1) . "</h2>";
        foreach ($value as $chave => $valor) { 
            if($chave == "Preço de custo"){
                $totalC += $valor;
            }
            if($chave == "Preço de venda"){
                $totalV += $valor;
            }
            echo "<strong>" . $chave . "</strong>: " . $valor . "<br>"; 
        }
        echo "-----------------------------------------------------------";
    }

    $mediaC = $totalC/(count($_SESSION['produto']));
    $mediaV = $totalV/(count($_SESSION['produto']));

    echo "<h1>Média de preço de custo: R$". number_format($mediaC, 2)."</h1>";
    echo "<h1>Média de preço de venda: R$". number_format($mediaV, 2)."</h1>";
    session_destroy();
    echo "<a href='exercicio22.html'><button>Voltar</button></a>";
?>