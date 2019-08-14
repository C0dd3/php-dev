<?php
	
	# Tipos básicos:

	$nome = "Vicente";
	$site = "www.vicente.com.br";

	$ano = 1998;
	$salario = 5500.99;
	$bloqueado = false;

	# Tipos Compostos:

	$frutas = array("abacaxi", "laranja", "manga");

	echo $frutas[2];

	# Objeto:

	$nascimento = new DateTime();

	// var_dump($nascimento);

	# Tipos especiais:

	$arquivo = fopen("tiposvariaveis.php", "r"); #resource;

	//var_dump($arquivo);

	$nulo = NULL; # ausência de valor;
	$vazio = ""; # vazio, mas há espaço de memoria;

?>