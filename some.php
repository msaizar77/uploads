<?php 
	
	$nombre2 = $_POST['nombre2'];
	$apellido2 = $_POST['apellido2'];
	$edad2 = $_POST['edad2'];

	$resultado->nombre2 = $nombre2;
	$resultado->apellido2 = $apellido2;
	$resultado->edad2 = $edad2;

    echo json_encode($resultado);
?>