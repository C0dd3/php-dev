<?php 

	# Include: você requer uma biblioteca ou arquivo no php. Ele copia o arquivo total do arquivo ou biblioteca. include_path(diretório). configurações no php.ini, permitir também um arquivo de site(include dinâmico c/ URL) ! pessíma ideia.

	# é possível criar um servidor para que arquivo /inc sejam iniciadas corretamente para todos desenvolvedores, para isso configura-se o include_path.

	# Require: Obriga que o arquivo exista, e que o arquivo esteja funcionando. Geralmente muito utilizado.

	# Require_once ou Include_once: permitir chamar um arquivo uma única vez, evitando error. 
	
	// include "include&require.php";
	// require "include&require.php";

	require_once "include&require.php";

	$resultado = somar(10, 25);

	echo $resultado;
	
 ?>