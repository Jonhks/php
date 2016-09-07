<?php 

							// METODO QUERY
// Sirve para ver el id desde el url pero pueden inyectar codigo asi.
// $id= $_GET['id'];  
try {
	  $conexion = new PDO('mysql:host=localhost;dbname=prueba-datos', 'root', '' );
	  // echo  "Conexion estable";


	  $statement = $conexion->prepare('SELECT * FROM usuarios ');
	  $statement->execute(
	  	array(':id' => 1)
	  	);
	  $resultados =	$statement-> fetchAll();
	  	foreach ($resultados as $usuario ) {
	  		echo $usuario['nombre'] . '<br>';
	  	};


	  	} catch (PDOException $e) {
echo "Error: ". $e->getMessage();
	}	

	  													// METODO QUERY

	 // $resultados = $conexion->query("SELECT * FROM usuarios WHERE ID = 5");

	 // $resultados = $conexion->query('INSERT INTO usuarios VALUES (null, "Pedro")');  para insertar datos

	 // foreach ($resultados as $fila) {
	 // 	echo $fila['ID'] .'-'. $fila['nombre'] . '<br/>';
	 // }


	 										

	 														 // preprared Statements

 ?>
