<?php 

	$pessoas = array();


	array_push($pessoas, array( # array_push: pedi que coloque informações dentro de uma array, podendo ser até mesmo uma outra array(Array Bidimensional).

		'nome' => 'João',
		'idade' => 20

	));

	array_push($pessoas, array(

		'nome' => 'Vicente',
		'idade' => 21

	));

	print_r($pessoas[0]['nome']);

	echo json_encode($pessoas)
	

	
 ?>