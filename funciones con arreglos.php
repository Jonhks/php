<?php 
// $amigo = array('telefono' => 5454545454, 'edad' => 25, 'pais'=>'mexico');

// 	extract($amigo);

// 	echo $edad;

$semana = array(
		'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'
	);
	
	// $ultimo_dia = array_pop($semana);

	// foreach ($semana as $dia) {
	// 	echo $dia . '<br />';
	// }

	// echo $ultimo_dia;


	// echo join('<br />',$semana);

	// echo count($semana);

	// rsort($semana);

	// echo join (',', $semana);

	$semana_reverse = array_reverse($semana);
	echo join (',', $semana_reverse);
 ?>