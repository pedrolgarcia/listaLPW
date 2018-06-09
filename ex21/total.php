<?php

    require_once 'Pessoa.php';
    session_start();

    $contTotal = 0;
    $contApto = 0; 

    foreach ($_SESSION['pessoa'] as $key => $value) { 
        echo "<h2>Pessoa " . ($key + 1) . "</h2>";
        foreach ($value as $chave => $valor) { 
            if($chave === "Status" AND $valor === "Apto"){
                $contApto++;
            }
            echo "<strong>" . $chave . "</strong>: " . $valor . "<br>"; 
        }
        $contTotal++; 
        echo "-----------------------------------------------------------";
    }

    echo "<h1>Total de pessoas cadastradas: $contTotal</h1>";
    echo "<h1>Total de pessoas aptas: $contApto</h1>";
    echo "<a href='exercicio21.html'><button>Voltar</button></a>";
?>