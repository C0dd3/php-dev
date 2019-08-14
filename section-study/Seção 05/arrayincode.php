<?php 


 	$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Vicente","idade":21}]';

	$data = json_decode($json, true); # tranforma json em array;

	var_dump($data);
	
 ?>