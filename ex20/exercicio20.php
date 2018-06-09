<?php
	/* Pedro Lopes Garcia 
	   06/05/2018
	   A concessionária de veículos “CARANGO VELHO” está vendendo os seus veículos com desconto. Faça um
       algoritmo que calcule e exiba o valor do desconto e o valor a ser pago pelo cliente de vários carros. O desconto
       deverá ser calculado de acordo com o ano do veículo. Até 2000 - 12% e acima de 2000 - 7%. O sistema deverá
       perguntar se deseja continuar calculando desconto até que a resposta seja: “(N) Não” . Informar total de carros com
       ano até 2000 e total geral.*/

    //Constante
    define("DIR", "Carro.php");
    require_once DIR;
    //Sessão
    session_start();
    
    //Criando novo carro
    $carro = new Carro($_POST['carro'], $_POST['ano'], $_POST['valor']);
    $carro->calcularDesc();
    $carro->setTotalPagar();
    $_SESSION['carro'][] = $carro->exibir(); //Guarda o carro no array de sessão

    //Exibindo o carro cadastrado
    foreach($carro->exibir() as $key => $value){
        echo "<strong>" . $key . "</strong>: " . $value . "<br>"; 
    }

    echo "<br>Deseja continuar calculando desconto?<br>";
    echo "<a href='exercicio20.html'><button>Sim</button></a><br>";
    echo "<a href='total.php'><button>Não</button></a><br>";

?>
