<?php 

	# Funções de usuários: funnções que são necessário repeti-las, geralmente são específicas.

	# Funções necessitam retorna um valor, caso contrário as mesma se tornam sub-rotinas.

	# Comandos return é necessário numa função.

	# Sub-Rotina:

	function ola() {

		echo "Olá jovens!<br>";

	}

	ola();
	///////////////////////////////////

	# Função: Torna-se abstrato.

	function ola1() {

		return "Olá jovens!<br>";

	}

	echo ola1();

	$frase = ola1();

	echo strlen($frase);
 ?>