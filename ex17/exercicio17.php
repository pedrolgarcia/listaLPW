<?php 
	/* Pedro Lopes Garcia 
		 27/03/2018
		 Ler 80 números e ao final informar quantos número(s) est(á)ão no intervalo entre 10 (inclusive) e 150 
		 (inclusive).*/
	$num = array();
	$count = 0;
	
	for($i=0; $i<80; $i++){
		array_push($num, rand(0,300));
	}

	foreach($num as $aux){
		if($aux >= 10 and $aux <=150){
			$count++;
		}
	}
	
	print_r($num);
	echo "<br>";
	echo $count;

?>