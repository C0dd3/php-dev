<?php 

	$a = 10;

	function troca_valor($b) {

		$b += 50;

		return $b;

	}

	# Não muda na variável, mesmo após o uso da função.

	echo troca_valor($a);

	echo "<br>";

	echo $a;

	echo "<br>";

	function troca_valor1(&$b) { # Passagem de paramentro por referencia.

		$b += 50;

		return $b;

	}

	echo troca_valor1($a);

	echo $a;
 ?>