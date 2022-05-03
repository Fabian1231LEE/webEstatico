<?php 

	if (!$_POST) {
		header('http://localhost/dinamita/prueba.php');
	}

	//Creacion  de variables en php
	$nombre=$_POST['nombre'];
	$sexo=$_POST['sexo'];
	$año=$_POST['year'];
	$terminos=$_POST['terminos'];

	//Envio en pantalla
	echo 'Hola, '.$nombre. ' eres '.$sexo;
 ?>