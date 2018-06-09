<?php
    /*Pedro Lopes Garcia - 17/05/2018
    Faça um algoritmo que receba o preço de custo e o preço de venda de 40 produtos. Mostre como resultado se
    houve lucro, prejuízo ou empate para cada produto. Informe media de preço de custo e do preço de venda.*/
    require_once "Produto.php";

    session_start();

    $produto = new Produto($_POST['nome'], $_POST['pc'], $_POST['pv']);
    $produto->calcular();
    $_SESSION['produto'][] = $produto->exibir();

    foreach($produto->exibir() as $key => $value){
        echo "<strong>" . $key . "</strong>: " . $value . "<br>"; 
    }

    echo "<br>Deseja continuar cadastrando?<br>";
    echo "<a href='exercicio22.html'><button>Sim</button></a><br>";
    echo "<a href='total.php'><button>Não</button></a><br>";

?>