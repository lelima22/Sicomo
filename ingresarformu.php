<?php
	session_start();
?>

<?php 
include 'conexion.php';
	//recibir los datos y almacenarlos
	$ci=$_POST["text_ci"];
	$nrocredito= $_POST["text_nrocredito"];
	$actividad= $_POST["text_actividad"];
	$_SESSION["ci"] 	= $ci;
	$_SESSION["nro"] 	= $nrocredito;
	$_SESSION["acti"] 	= $actividad;
	
		//consulta para insertar
	$insertar= "INSERT INTO formulario (actividad, fecha, ci, nro_credito,total,totalinc,modificado) VALUES ('$actividad', NOW(), '$ci', '$nrocredito','0','0','0')";
	//ejecutar consulta*/

//ejecutar consulta
	$resultado=mysqli_query($conexion, $insertar);		
//ejecutar consulta
		error_reporting(0);
	if(!$resultado){
		echo 'Error al Registrar Usuario';
		echo $_SESSION["ci"]; 
		echo $_SESSION["nro"]; 
		echo $_SESSION["acti"]; 
		
	}
	else {
		header("location:formulario.php");
	}

	mysqli_close($conexion);

?>

