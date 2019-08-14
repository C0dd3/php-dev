<?php 

	# Switch & Case: valores já definidos;

	$diaDaSemana = date("w");

	echo $diaDaSemana;

	switch ($diaDaSemana) {
		case '1':
			echo "Segunda";
			break;
		case '2':
			echo "Terça";
			break;
		case '3':
			echo "Quarta";
			break;
		case '4':
			echo "Quinta";
			break;
		case '5':
			echo "Sexta";
			break;
		case '6':
			echo "Sábado";
			break;
		default:
			echo "Domingo";
			break;
	}

 ?>