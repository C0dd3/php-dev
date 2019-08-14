<?php
	
	# Busca usar o camelcase: nomeCompleto
	# Busca usar o snakecase: nome_completo(Laravel)
	
	$anoNascimento = 1950;
	$nome_completo = "Vicente Paulo Costa de Andrade";

	echo $nome_completo;

	# Não usar número ou caracteres especiais no inicio das variáveis.

	# Comentário: usar #, // ou /**/.

	# Não usar variáveis pré-definidas: $this é um exemplo.

	# Retirando o valor e verificando se há valor dentro da variável:

	echo $anoNascimento;

	unset($anoNascimento);

	if (isset($anoNascimento)) {
		echo $anoNascimento;
	}

	# Concatenar:

	$valor01 = "<br>Vicente<br>";

	$valor02 = "Andrade";

	$nomeCompleto = $valor01 . $valor02;

	echo $nomeCompleto;

?>