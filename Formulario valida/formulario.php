<?php 

   	$errores = '';
if (isset($_POST['submit'])) {
	$nombre= $_POST['nombre'];
	$correo= $_POST['correo'];

	if (!empty($nombre)) {
		// $nombre = trim($nombre);
		// $nombre = htmlspecialchars($nombre); //limpia el codigo
		// $nombre = stripcslashes($nombre); // seguridad del codigo
		$nombre = filter_var($nombre,FILTER_SANITIZE_STRING); //remueve cosas que no sean texto 

		echo "Tu nombre es: $nombre <br />";
	}else {
			$errores .= 'Por favor agrega un nombre <br />';
	}

	if (!empty($correo)) {
			$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

				if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
					$errores.= "Por favor ingresa un correo valido <br />"; 
				} else {
					// echo "Tu correo es: $correo";
				}
			echo "Tu correo es : $correo <br />";
		}else {
		$errores.= 'Por favor agrega un Correo';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.error{color: red}
	</style>
</head>
<body>
	<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" method="post">
		<input type="text" name="nombre" placeholder="Nombre">
		<input type="text" name="correo" placeholder="Correo">

			<?php if(!empty($errores)): ?>
				<div class="error"> <?php echo $errores; ?></div>
			<?php endif; ?>
		<input type="submit" name="submit">	
	</form>
</body>
</html>