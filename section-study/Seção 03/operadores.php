<?php 

	# Operadores de Atribuição:
	
	$nome = "Vicente"; # Atribuição;

	echo $nome." Andrade<br>"; # Concatenação;

	$nome .= " e Fernanda"; # Mais alguma coisa;

	echo $nome;

	$valorAtual = 200;

	$valorAtual += 100;

	$valorAtual += 25;

	$valorAtual *= .9;

	echo $valorAtual;

	# Operadores Aritiméticos:

	# +
	# -
	# *
	# /
	# %

	# Operadores Lógicos:

	$a = 30;
	$b = 55;

	var_dump($a > $b);

	echo "";

	var_dump($a < $b);

	# = atribuição
	# == comparação;
	# === comparação perfeita;
	# !== ou != negação;

	# Operadores novos:

	$a = 50;

	$b = 30;

	var_dump($a <=> $b); # resulta 1,0,-1 - spaceship;

	#nullcollecion:

	$a = NULL;
	$b = NULL;
	$c = 10;

	echo $a ?? $b ?? $c;

	# Operadores de incremento:

	# ++ antes ou depois;
	# -- antes ou depois;
	# || = ou;
	# && = e;









 ?>