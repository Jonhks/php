<?php 

$meses = array(
			 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre',
		);

	//echo count($meses)
	/*	$ultimo_mes = count($meses) - 1;
	echo $meses[$ultimo_mes];
*/
								// Recorrer Arreglos



 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Mese del año</title>
 </head>
 <body>
 	<h1>Meses del año</h1>
	<ul>	
			<!-- no tan funcional
			<li> <?php  //echo  $meses [0]; ?></li>
			<li> <?php  //echo  $meses [1]; ?></li>
			<li> <?php  //echo  $meses [2]; ?></li>
			-->

			<?php 
				foreach($meses as $mes){
					//ejecutar
					echo '<li>' . $mes . '</li>';
				}
			 ?>
	</ul>

 </body>
 </html>