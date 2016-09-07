<?php 
session_start();

if ($_SESSION) {
	$nombre = $_SESSION['nombre'];
	echo "<h1> Hola, $nombre</h1>";
} else {
	echo "No has iniciado secion";
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagina 2</title>
</head>
<body>
	<!-- <h1>Hola, <?php echo $_SESSION['nombre'] ?> </h1> -->
	<a href="cerrar.php">Cerrar Secion</a>
</body>
</html>