<?php

	# Variáveis Arrays Super-Globais:

	$nome = (int)$_GET["a"]; # get ou post faz requerimento de formulário.

	#(int) - converte um valor para inteiro;

	var_dump($nome);
	#obs: para adicionar um valor ao get ou post no site é necessário acrescentar ? e a variavel com um valor =;

	# URL -> conjunto de informação para entrar a queryString;
	# URI -> pequenos pedaços de informações de paramentros.

	# Protocolo -> Dominio -> Path(Rotas) -> QueryString -> Hash

	$ip = $_SERVER["REMOTE_ADDR"]; # Informações do cliente e do servidor do site.

	$ip2 = $_SERVER["SCRIPT_NAME"];

	echo $ip2;

	echo $ip;

?>