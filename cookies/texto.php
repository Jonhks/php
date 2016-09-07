<?php 

if (isset($_COOKIE['font-size'])) {
	$tamaño = $_COOKIE['font-size'];
}else{
	$tamaño = '15px';
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Texto</title>
	<style>
		p{
			font-size: <?php echo $tamaño ?>
		}

	</style>
</head>
<body>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque commodi ut, nobis voluptas ex vero iste debitis repellendus deserunt laudantium aliquid! Architecto dolore, eius esse a rem. Quibusdam, natus, sequi.</p>
</body>
</html>