<?php 
	
	// print_r($_POST);

// if (!$_POST) {
// 	$nombre = $_POST['nombre'];
// 	$sexo = $_POST['sexo'];
// 	$year = $_POST['year'];
// 	$terminos = $_POST['terminos'];

// 	echo 'Hola ,' . $nombre . ' eres ' . $sexo . ' Naciste en ' . $year ;
  
// } else {
// 	header('location: http://localhost/Curso_php/Formularios/');
// }

       // METODO GET    Se puede e¿ditar los datos desde el usuario


if (!$_GET) {
	header('http://localhost/Curso_php/Formularios/');
}

	$nombre = $_GET['nombre'];
	$sexo = $_GET['sexo'];
	$year = $_GET['year'];
	$terminos = $_GET['terminos'];

	if ($nombre) {
			echo $nombre . '<br />';	
}else {
	echo("el usuario no metio nada" . '<br />');
}

	
	echo $sexo . '<br />';
	echo $year . '<br />';
	echo $terminos . '<br />';
	

?>