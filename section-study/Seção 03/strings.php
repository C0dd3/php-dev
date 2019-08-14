<?php 


	$nome = "Vicente"; # Indica que é uma string;

	$nome2 = 'Fernanda'; # Indica que é string;

	echo "ABC $nome";

	echo "<br>";

	echo 'ABC $nome02';

	# Funções nativas para Strings:

	# strtoupper -> coloca o texto em maiuscula.
	# strtolower -> coloca o texto em minuscula.
	# ucwords -> primeiras letras maiusculas.
	# ucfirts -> primeiras de cada oração é maiusculas.
	# str_replace -> mudar alguns caracteres.
	# strpos -> encontrar a palavra.
	# substr -> retirar do texto de onde até onde.
	# strlen -> o tamanho da palavra.

	$name = "franscico";

	echo strtoupper(name);

	$empresa = "Consult";

	$empresa = str_replace("o", "0", $empresa);

	echo $empresa;

	$frase = "A repetição é a mãe da retenção."

	$q = strpos($frase, "mãe");

	var_dump($q);
 ?>