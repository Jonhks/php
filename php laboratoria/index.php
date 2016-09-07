 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>Motos</h1>
<br>
<?php for( $i = 1; $i <= 30; $i++){
?>
<?php 
	if ($i%2 == 0) {
		$color = "#656565";
	}else {
		$color = "878787";
	}
?>	
<div style="backgraund-color:<?php echo $color; ?>;>
	<h1>Hola <?php echo $i; ?> </h1>
	<?php echo "loremdsfjkbf";?>
</div>
<img src="http://www.revistafuerzag.com/imagesmg/imagenes/30598876650_big.jpg" alt="">
</body>
</html>
