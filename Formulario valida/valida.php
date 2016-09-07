<?php 

						//Comprobar como se enviaron los datos

// if ($_SERVER ['REQUEST_METHOD'] == 'GET') {
// 	echo "Se enviaron por GET";
// }else {
// 	echo "Se enviaron por POST";

// }

					//ver que formulario se enviaron los datos

if (isset($_POST['submit'])) {
	echo "Se enviaron";
	print_r($_POST['submit']);
}

				Validar formulario



 ?>