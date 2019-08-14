<?php 


	function ola($texto = "Mundo", $periodo = "Bom dia") { # Um parâmetro pode ter um valor ja definido.

		return "Ola $texto, $periodo<br>!";

	}

	echo ola("Mundo");
	echo ola("Vicente","Boa noite");
	echo ola("Andrade","Boa tarde");

 ?>