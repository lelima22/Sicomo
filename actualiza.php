<?php 
include 'conexion.php';
	//recibir los datos y almacenarlos
	$idform=$_POST["nroformulario"];
	$ci= $_POST["text_abogado"];
	$fecha= $_POST["fecha"];
	$actividad= $_POST["text_actividad"];
	$nrocredito= $_POST["text_nrocredito"];
	
			//parte del detalle

		$concepto1=$_POST["text_concepto1"];
		$concepto2=$_POST["text_concepto2"];
		$concepto3=$_POST["text_concepto3"];
		$concepto4=$_POST["text_concepto4"];
		$concepto5=$_POST["text_concepto5"];
		$concepto6=$_POST["text_concepto6"];
		$concepto7=$_POST["text_concepto7"];
		$concepto8=$_POST["text_concepto8"];
		$concepto9=$_POST["text_concepto9"];
		$concepto10=$_POST["text_concepto10"];
		$monto1=$_POST["text_monto1"];
		$monto2=$_POST["text_monto2"];
		$monto3=$_POST["text_monto3"];
		$monto4=$_POST["text_monto4"];
		$monto5=$_POST["text_monto5"];
		$monto6=$_POST["text_monto6"];
		$monto7=$_POST["text_monto7"];
		$monto8=$_POST["text_monto8"];
		$monto9=$_POST["text_monto9"];
		$monto10=$_POST["text_monto10"];
		$montoinc1=$_POST["text_montoinc1"];
		$montoinc2=$_POST["text_montoinc2"];
		$montoinc3=$_POST["text_montoinc3"];
		$montoinc4=$_POST["text_montoinc4"];
		$montoinc5=$_POST["text_montoinc5"];
		$montoinc6=$_POST["text_montoinc6"];
		$montoinc7=$_POST["text_montoinc7"];
		$montoinc8=$_POST["text_montoinc8"];
		$montoinc9=$_POST["text_montoinc9"];
		$montoinc10=$_POST["text_montoinc10"];
		$resp1=$_POST["resp1"];
		$resp2=$_POST["resp2"];
		$resp3=$_POST["resp3"];
		$resp4=$_POST["resp4"];
		$resp5=$_POST["resp5"];
		$resp6=$_POST["resp6"];
		$resp7=$_POST["resp7"];
		$resp8=$_POST["resp8"];
		$resp9=$_POST["resp9"];
		$resp10=$_POST["resp10"];

		$suma=$monto1+$monto2+$monto3+$monto4+$monto5+$monto6+$monto7+$monto8+$monto9+$monto10;
		$sumainc=$montoinc1+$montoinc2+$montoinc3+$montoinc4+$montoinc5+$montoinc6+$montoinc7+$montoinc8+$montoinc9+$montoinc10;
		//consulta para insertar
	$insertar= "INSERT INTO formulario(id_form, ci, fecha, actividad, nro_credito, total, totalinc) VALUES ('$idform', '$ci', NOW(), '$actividad', '$nrocredito','$suma','$sumainc')";
	//ejecutar consulta*/

		//consulta para insertar
	$insertar1= "INSERT INTO detalle(concepto, monto, montoinc, respaldo, id_form) VALUES ('$concepto1', '$monto1','$montoinc1', '$resp1', '$idform')";


	$insertar2= "INSERT INTO detalle(concepto, monto, montoinc, respaldo, id_form) VALUES ('$concepto2', '$monto2','$montoinc2', '$resp2', '$idform')";
	$insertar3= "INSERT INTO detalle(concepto, monto, montoinc, respaldo, id_form) VALUES ('$concepto3', '$monto3','$montoinc3', '$resp3', '$idform')";
	$insertar4= "INSERT INTO detalle(concepto, monto, montoinc,respaldo, id_form) VALUES ('$concepto4', '$monto4', '$montoinc4','$resp4', '$idform')";
	$insertar5= "INSERT INTO detalle(concepto, monto, montoinc, respaldo, id_form) VALUES ('$concepto5', '$monto5', '$montoinc5','$resp5', '$idform')";
	$insertar6= "INSERT INTO detalle(concepto, monto, montoinc, respaldo, id_form) VALUES ('$concepto6', '$monto6', '$montoinc6','$resp6', '$idform')";
	$insertar7= "INSERT INTO detalle(concepto, monto, montoinc, respaldo, id_form) VALUES ('$concepto7', '$monto7','$montoinc7', '$resp7', '$idform')";
	$insertar8= "INSERT INTO detalle(concepto, monto, montoinc,respaldo, id_form) VALUES ('$concepto8', '$monto8','$montoinc8', '$resp8', '$idform')";
	$insertar9= "INSERT INTO detalle(concepto, monto, montoinc, respaldo, id_form) VALUES ('$concepto9', '$monto9','$montoinc9', '$resp9', '$idform')";
	$insertar10= "INSERT INTO detalle(concepto, monto, montoinc, respaldo, id_form) VALUES ('$concepto10', '$monto10','$montoinc10', '$resp10', '$idform')";


//ejecutar consulta
	$resultado=mysqli_query($conexion, $insertar);		
//ejecutar consulta
		error_reporting(0);
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

	if(!$resultado){
		echo 'Error al registrar1';
	}
	else {
		echo 'Formulario registrado exitosamente 1';
	}

if(!$resultado1){
		echo 'Error al registrar2';
	}
	else {echo 'Formulario registrado exitosamente2';}
	//mysqli_free_result($resultado);
	//mysql_free_result($resultadoo);

	mysqli_close($conexion);

 