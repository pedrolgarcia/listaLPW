<?php
	/* Pedro Lopes Garcia 
	   10/04/2018
	   Escrever um algoritmo que leia o nome e o sexo de 56 pessoas e informe o nome e se ela é homem ou mulher. No
       final informe total de homens e de mulheres.*/
    session_start();

    $_SESSION['nome'][] = $_POST["nome"];
    if($_POST["sexo"] == "F"){
        $_SESSION['sexo'][] = " é mulher";
    }else{
        $_SESSION['sexo'][] = " é homem";
    }
        
    foreach(array_combine($_SESSION['nome'], $_SESSION['sexo']) as $aux => $aux2){
        echo $aux . $aux2. "<br>";
    }
    
    echo "<a href='exercicio19.html'><input type='button' value='voltar'></a>";
?>
