<?php 


	function soma(int ...$valores):string { 
	# ... indica que todos os valores serão daquele tipo.
 	# : indica que o resultado após o uso da função será do tipo indicado.

		return  array_sum($valores); # Função que soma todos os valores de uma array ou função.

	}

	var_dump(soma(2, 3));
	echo soma(1, 2);
	echo "<br>";
	echo soma(15, 30);
	echo "<br>";
	echo soma(1/2, 3/4);

 ?>