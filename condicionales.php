<?php 

	$edad= 30;
	$nombre = 'jonh';

	if ($edad >= 18 && $nombre== 'jonh') {
		# code...
		echo '<h1> Bienvenido </h1>';
	}

	if ($edad < 17 or $nombre != 'jonh') {
		# code...
		echo '<h1> Llegale chamaco o no eres yo </h1>';
	}
 ?> 