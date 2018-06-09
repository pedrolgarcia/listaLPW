<?php

    require_once "Pessoa.php";

    session_start();

    $pessoa = new Pessoa($_POST['nome'], $_POST['sexo'], $_POST['idade'], $_POST['saude']);
    $pessoa->verificarAptidao();
    $_SESSION['pessoa'][] = $pessoa->exibir();

    foreach($pessoa->exibir() as $key => $value){
        echo "<strong>" . $key . "</strong>: " . $value . "<br>"; 
    }

    echo "<br>Deseja continuar cadastrando?<br>";
    echo "<a href='exercicio21.html'><button>Sim</button></a><br>";
    echo "<a href='total.php'><button>Não</button></a><br>";

?>