<?php 	

// if (file_exists('documento.txt')) {
// 	echo "El archivo existe";
// }else {
// 	echo "El archivo No existe";
// }


								// Leer la info desde un documento
// echo file_get_contents('documento.txt');

									
									// Escribir en un documento
// file_put_contents('documento.txt', "Hola Jonh \n", FILE_APPEND);

									// agregar numeros
// file_put_contents('documento.txt', '');
// 	for ($i=1; $i <=10 ; $i++) { 
// 		file_put_contents('documento.txt', "$i \n", FILE_APPEND);
		
// 	}

$archivo = file('documento.txt');
echo  "<pre>";
print_r($archivo);

?>