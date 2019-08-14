<?php 

	require_once("configuration.php");

	session_unset($_SESSION['nome']); # Apaga uma variável no session. Ele limpa ariáveis de sessão, porém continua entendendo voce como pessoa.



	echo $_SESSION['nome'];

	session_destroy(); # Apaga tudo e até mesmo a sessão do Usuário.

 ?>