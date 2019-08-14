<?php

	# While: pode ser usado em qual situação, porém usado mais em banco de dados.

	$condicao = true;

	while ($condicao) {
		
		$numero = rand(1, 10);

		if ($numero === 3) {

			echo "TRÊS!!!";
			$condicao = false;

		}

		echo $numero." ";
	}

 ?>