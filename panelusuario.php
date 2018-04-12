<?php
	session_start();
?>
<?php 
	require 'conex.php';
	$cise=$_SESSION["ci"];

	$query1 = "SELECT nombres,apellidos FROM usuario where ci='$cise'";
	$resultado1 = $mysqli->query($query1);
	$row1 = $resultado1->fetch_assoc();

	$nom=$row1['nombres'];
	$ape=$row1['apellidos'];

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Panel De Abogado</title>
	<link rel="stylesheet" type="text/css" href="stilo.css">
</head>
<body>
	
	
	<h1>Panel De Abogado</h1>
	<center><a href="cerrar.php">Salir</a></center>
	
		<p align="center"><?php echo 'Bienvenido al sistema:  '.$nom. ' '.$ape; ?></p>
		<p align="center"><?php echo 'Que es lo que deseas realizar?  '; ?></p>
<center>
		<table border="1" >

			
			<form action="intro.php" method="POST">
			<tr>
				<td>Crear Un nuevo Formulario</td>
			</tr>
			<tr>
			<td> </td>
			<td><input type="submit" name="" value=CREAR></td>
							
			</tr>
			</form>
			<form action="revisa.php" method="POST">
			<tr>
				<td>Revisar Los Formularios que tengo</td>
			</tr>
			<tr>
			<td></td>
			<td><input type="submit" name="" value=REVISAR></td>
							
			</tr>
			</form>

			<form action="regismes.php" method="POST">
			<tr>
				<td>Resumen Entidades-Mes</td>
			</tr>
			<tr>
			<td></td>
				<td><input type="date" name="fe1"></td>
			<td>AL</td>
			<td><input type="date" name="fe2"></td>
			
			<td><input type="submit" name="" value=RESUMEN></td>
							
			</tr>
			</form>
			
		</table>
	</center>
	</body>
</html>