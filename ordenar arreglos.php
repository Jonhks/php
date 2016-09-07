<?php 

	$meses = array(
			 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre',
		);

	//sort($meses); Ordenar decendente
	rsort($meses);  // acendente
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
			<?php 
				foreach($meses as $mes){
					//ejecutar
					echo '<li>' . $mes . '</li>';
				}
			 ?>
	</ul>

 </body>
 </html>