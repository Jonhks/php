<?php 

					// 127.0.0.1
	$conexion = mysql_connect('localhost', 'root', '') or die('no se pudo conecta a la bd');

	mysql_select_db('heidi_sql', $conexion);

	$resultados = mysql_query('SELECT * FROM usuarios');


												// Forma incorrecta de hacerlo

	// $fila= mysql_fetch_object($resultados);

	// echo $fila->nombre;

	// $fila= mysql_fetch_object($resultados);

	// echo $fila->nombre;

									// forma correcta de hacerlo aunque no es la mejor forma de hacerlo

// while ($fila = mysql_fetch_object ($resultados)){
// 	echo $fila->nombre;
// 	echo "<br>";
// }

					// para insertar datos

// $resultados = mysql_query('INSERT INTO usuarios values (null, "Luis")');


							// Forma correcta PDO

	


 ?>