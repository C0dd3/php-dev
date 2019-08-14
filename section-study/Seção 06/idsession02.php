<?php 

	# Criar outro id de sessão:
	
	session_id('39qc0990dq2pl1nupeptk987nbarray');

	require_once("configuration.php");

	session_regenerate_id();


	echo session_id();

	var_dump($_SESSION);


 ?>