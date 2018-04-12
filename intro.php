<?php
	session_start();
?>

<?php 
if ($_SESSION["ci"]<>0) {
	require 'conex.php';
	$cise=$_SESSION["ci"];

	$query1 = "SELECT nombres,apellidos FROM usuario where ci='$cise'";
	$resultado1 = $mysqli->query($query1);
	$row1 = $resultado1->fetch_assoc();

	$nom=$row1['nombres'];
	$ape=$row1['apellidos'];
	}
		else{
		header("location:index.php");		

		}
	

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>intro de pagina</title>
	<link rel="stylesheet" type="text/css" href="stilo.css">

</head>
<body>
	<h1>Ingresar Datos Del Formulario</h1>
<center><a href="cerrar.php">Salir</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="panelusuario.php">Ir atras</a></center>
		<p align="center"><?php echo 'Bienvenido al sistema:  '.$nom. ' '.$ape; ?></p>


	<form action="ingresarformu.php" method="POST">
	<table>
		<tr>
			<td>CI Abogado</td>
			<td><input type="text" name="text_ci" placeholder="Ci abogado" value="<?php echo $_SESSION["ci"]; ?>"></td>
		</tr>
		<tr>
			<td>Numero de credito</td>
			<td><input type="text" name="text_nrocredito" placeholder="Introducir nro credito"></td>
		</tr>
		<tr>
			<td>Actividad Realizada</td>
			<td><input type="text" name="text_actividad" placeholder="Introducir la actividad"></td>
		</tr>
				<td><input type="submit" name="ingresar" value="Ingresar"></td>
		<tr></tr>
	</table>
		
	</form>
		

</body>
</html>