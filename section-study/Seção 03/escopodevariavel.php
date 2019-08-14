<?php 

	# Escopo de Variável:

	$nome = "Vicente";

	function teste() {

		# Escopo da função: variávies aqui dentro não são vistas;

		global $nome; # Indica que o que ta fora também é o que há dentro.

		echo $nome;

	}

	function test02() {

		$nome = "Minha pica";

		echo $nome." agora no teste02";

	}

	teste();

	test02();

 ?>