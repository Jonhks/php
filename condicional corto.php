<?php 	

	$edad = 18;

	$edad = (isset($edad)) ? $edad : "el ususario no establecio la edad" ;

	echo 'Edad:' . $edad;

	if (isset($edad)) {
		$edad = $edad;
	}  else {
		$edad = 'el ususario no establecio la edad'
	}


 ?>