<?php 

	$meses = array(
			 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre',
		);

	$amigo = array('telefono' => 545454545454, 'edad' => 89, 'pais' => 'mexico');
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<h1>Meses</h1>
	<ul>
		<?php 

			foreach ($meses as $mes) {
				echo '<li>' . $mes . '</li>';				
			}
			foreach ($amigo as $datos => $valor) {
				echo '<li>' . $datos . ': ' . $valor . '</li>';
			}

		 ?>
	</ul>

 </body>
 </html> 