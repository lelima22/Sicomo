<?php 
include 'conexion.php';
	//recibir los datos y almacenarlos
	$nombre=$_POST["text_nombres"];
	$apellido= $_POST["text_apellidos"];
	$nrocredito= $_POST["text_nrocredito"];
	$juzgado= $_POST["text_juzgado"];
	$entidad= $_POST["text_entidad"];

	
		//consulta para insertar
	$insertar= "INSERT INTO deudor(nombre, apellido, nro_credito, nro_juzgado, id_e) VALUES ('$nombre', '$apellido', '$nrocredito', '$juzgado','$entidad')";
	//ejecutar consulta*/

//ejecutar consulta
	$resultado=mysqli_query($conexion, $insertar);		
//ejecutar consulta
		error_reporting(0);
	if(!$resultado){
		echo 'Error al Registrar Usuario';
		
	}
	else {
		header("Registrado correctamente");
	}

	mysqli_close($conexion);

 