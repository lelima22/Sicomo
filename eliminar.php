<?php
	session_start();
?>

<?php 
include 'conexion.php';
	//recibir los datos y almacenarlos
	$idform=$_POST["nrofor"];
	$cise=$_SESSION["ci"];
	
	$_SESSION["formu"] 	= $idform;


	
			//parte del detalle

		
		//consulta para insertar
			

	$insert= "INSERT INTO eliminado(id_form, ci, fecha) VALUES ('$idform', '$cise',NOW())";

	$insertar1= "DELETE FROM detalle where id_form='$idform'";


	$insertar2= "DELETE FROM detalle where id_form='$idform'";
	$insertar3=  "DELETE FROM detalle where id_form='$idform'";
	$insertar4=  "DELETE FROM detalle where id_form='$idform'";
	$insertar5=  "DELETE FROM detalle where id_form='$idform'";
	$insertar6=  "DELETE FROM detalle where id_form='$idform'";
	$insertar7=  "DELETE FROM detalle where id_form='$idform'";
	$insertar8=  "DELETE FROM detalle where id_form='$idform'";
	$insertar9=  "DELETE FROM detalle where id_form='$idform'";
	$insertar10=  "DELETE FROM detalle where id_form='$idform'";

	$insertar= "DELETE FROM formulario where id_form='$idform'";
	//ejecutar consulta*/

		//consulta para insertar
	


//ejecutar consulta
//ejecutar consulta
	$rest=mysqli_query($conexion, $insert);
		
	$resultado1=mysqli_query($conexion, $insertar1);
	$resultado2=mysqli_query($conexion, $insertar2);
	$resultado3=mysqli_query($conexion, $insertar3);
	$resultado4=mysqli_query($conexion, $insertar4);
	$resultado5=mysqli_query($conexion, $insertar5);
	$resultado6=mysqli_query($conexion, $insertar6);
	$resultado7=mysqli_query($conexion, $insertar7);
	$resultado8=mysqli_query($conexion, $insertar8);
	$resultado9=mysqli_query($conexion, $insertar9);
	$resultado10=mysqli_query($conexion, $insertar10);
	$resultado=mysqli_query($conexion, $insertar);		

	if(!$resultado){
		echo 'Error al registrar1';
		
	}
	else {
			header("location:elimi.php");			

	}
		

if(!$resultado1){
		echo 'Error al registrar2';
	}
	else {echo 'Formulario registrado exitosamente2';}
	//mysqli_free_result($resultado);
	//mysql_free_result($resultadoo);

	mysqli_close($conexion);
