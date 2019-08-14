<?php 

	# Função anonima: não possui nome e nem return.


	function teste($callback) { # Quando o tempo de processo é demorado usa-se callback.

		// Processo Lento

		$callback();

	}


	teste(function() {

		echo "Terminou!";

	});


 ?>