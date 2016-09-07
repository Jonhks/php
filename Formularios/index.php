<?php 
if ($_POST) {
	echo $_POST['nombre'];
}



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formularios</title>
</head>
<body>
	<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']);?>" method="post">
		<input type="text" placeholder="Nombre:" name="nombre">
		<br>
		<label for="hombre">Hombre</label>
		<input type="radio" name="sexo" value="hombre" id="hombre">
	<br>
		<label for="mujer">Mujer  </label>
		<input type="radio" name="sexo" value="mujer  " id="mujer">
	<br>
		<select name="year" id="">
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
		</select>
		<br>
		<input type="checkbox" name="terminos" id="terminos">
		<label for="terminos">Aceptas los terminos</label>
<br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>