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
	<title>Panel De control Administrativo</title>
	<link rel="stylesheet" type="text/css" href="stilo.css">
</head>
<body>
	
	
	<h1>Panel de control Administrativo</h1>
	<center><a href="cerrar.php">Salir</a></center>
	
		<p align="center"><?php echo 'Bienvenido al sistema:  '.$nom. ' '.$ape; ?></p>
		<center>
		<table border="1" >

			
			<form action="actualizar.php" method="POST">
			<tr>
				<td>Modificar Un Formulario</td>
			</tr>
			<tr>
			<td><input type="text" name="nrofor" value="" placeholder="Ingresar nro formulario"></td>
			<td><input type="submit" name="" value=Modificar></td>
							
			</tr>
			</form>
			<form action="eliminar.php" method="POST">
			<tr>
				<td>Eliminar Un Formulario</td>
			</tr>
			<tr>
			<td><input type="text" name="nrofor" value="" placeholder="Ingresar nro formulario"></td>
			<td><input type="submit" name="" value=Eliminar></td>
							
			</tr>
			</form>
			<form action="agregar.php" method="POST">
			<tr>
				<td>Agregar Un Deudor</td>
			</tr>
			<tr>
			<td></td>
			<td><input type="submit" name="" value=Agregar></td>
							
			</tr>
			</form>
			<form action="paginarebancos.php" method="POST">
			<tr>
				<td>ver registro de mes Entidades</td>
			</tr>
			<tr>
				<td></td>
			<td><input type="date" name="fecha1"></td>
			<td>AL</td>
			<td><input type="date" name="fecha2"></td>
				<td><input type="submit" name="gene" value="generar reporte"></td>
			</tr>
			</form>
			<form action="resumenentidad.php" method="POST">
			<tr>
				<td>ver Resumen de Abogado-Entidad</td>
			</tr>
			<tr>

				<td><input type="text" name="usuario" value="" placeholder="Ingresar ci Abogado"></td>
				<td><input type="date" name="fe1"></td>
			<td>AL</td>
			<td><input type="date" name="fe2"></td>
				
				<td><input type="submit" name="" value="generar Resumen"></td>
			</tr>
			</form>

			

			
		</table>
			</center>
	</body>
</html>

