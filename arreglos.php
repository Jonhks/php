<?php 
							// arreglo indexado 

/*	$semana= array('lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo');

$semana[7]= 'Jonhjonh';

echo $semana[0] . '<br>';
echo $semana[1] . '<br>';
echo $semana[2] . '<br>';
echo $semana[3] . '<br>';
echo $semana[4] . '<br>';
echo $semana[5] . '<br>';
echo $semana[6] . '<br>';

*/

							//Arreglo asociativo


/*$jonh = array ('telefono' => '555555555', 'edad' => '23', 'apellido' => 'Zavala', 'mexico' => 'DF');

echo $jonh['telefono']	. 	'<br>';
echo $jonh['apellido']	. 	'<br>';
echo $jonh['edad']		. 	'<br>';
echo $jonh['mexico']	. 	'<br>';
*/

								// Arreglos multidimencionales

	$amigos = array(
		array('Tambo', 40), 
		array('Pestañas', 25), 
		array('Ra', 32),
);

echo $amigos[0][0] . '<br>';
echo $amigos[1][0] . '<br>';
echo $amigos[2][0] . '<br>';    
	
	<?php  
$dias = array('lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo');

$otros_dias = [
'lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo'
]

?>
<h1>Dia de la semana</h1>
<?php for ($i=5; $i < count($dias) ; $i++) { 
} ?>
<p>El dia <?php echo $dias[$i]; ?> es...</p>
<?php  ?>
 ?>