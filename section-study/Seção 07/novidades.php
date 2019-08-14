<?php 


	function soma(int ...$valores) { # ... indica que todos os valores serão daquele tipo.

		return  array_sum($valores); # Função que soma todos os valores de uma array ou função.

	}


	echo soma(1, 2);
	echo "<br>";
	echo soma(15, 30);
	echo "<br>";
	echo soma(1/2, 3/4);

 ?>