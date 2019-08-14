<?php 

	require_once("configuration.php");

	echo session_save_path(); # Função para diretório.

	echo "<br>";

	var_dump(session_status());

	echo "<br>";

	switch(session_status()) {

		case PHP_SESSION_DISABLED:
			echo "Função desabilitada";
			break;
		
		case PHP_SESSION_NONE:
			echo "Funções habilitadas, mas não existe nenhuma";
			break;

		case PHP_SESSION_ACTIVE:
			echo "Funções totalmente habilitadas";
			break;
	}

 ?>