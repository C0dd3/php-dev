<?php 


	function ola() {

		$argumentos = func_get_args(); # Função que verificar os dados adicionados nas funções.

		return $argumentos;

	}



	var_dump(ola("Bom dia"));


 ?>