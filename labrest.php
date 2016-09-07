<?php  
	$dias= array('lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo');

$dias[7]= 'Jonhjonh';

// echo $semana[0] . '<br>';
// echo $semana[1] . '<br>';
// echo $semana[2] . '<br>';
// echo $semana[3] . '<br>';
// echo $semana[4] . '<br>';
// echo $semana[5] . '<br>';
// echo $semana[6] . '<br>';
?>

<h1>Dia de la semana</h1>
<?php for ($i=5; $i < count($dias) ; $i++); { } ?>
<p> El dia <? php echo $dias[$i] ; ?> es...</p>

?>
