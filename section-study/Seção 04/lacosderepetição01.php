<?php 

	# For -> Contador:

	for ($i = 0; $i < 10; $i++) {

		echo $i."<br>";
	}

	for ($j = 0; $i < 1000; $i += 5) {

		if ($i > 200 && $i < 800) continue; # continue ele pula a partir da condição;

		if ($i > 800 && $i < 900) break; # If com apenas uma condição;

		echo $i."<br>";
	}

 ?>