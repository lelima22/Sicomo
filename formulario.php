<?php
	session_start();
	$cise=$_SESSION["ci"];
	$nrose=$_SESSION["nro"];
	$actise=$_SESSION["acti"];

?>

<?php

if ($_SESSION["ci"]<>0) {
$cise=$_SESSION["ci"];
	$nrose=$_SESSION["nro"];
	$actise=$_SESSION["acti"]; 
	require 'conex.php';
	
	$query6 = "SELECT id_form FROM formulario where ci='$cise' and nro_credito='$nrose' and actividad='$actise' ";
	$resultado6 = $mysqli->query($query6);
	$row6 = $resultado6->fetch_assoc();
	$formu=$row6['id_form'];
		echo $formu; 



	$query1 = "SELECT actividad,fecha,ci,nro_credito FROM formulario where id_form='$formu'";
	$resultado1 = $mysqli->query($query1);
	$row1 = $resultado1->fetch_assoc();

	$ci=$row1['ci'];
	$nro=$row1['nro_credito'];

	$query2 = "SELECT nombres,apellidos FROM usuario where ci='$cise'";
	$resultado2 = $mysqli->query($query2);
	$row2 = $resultado2->fetch_assoc();

	$query3 = "SELECT nombre,apellido,nro_juzgado,id_e  FROM deudor where nro_credito='$nrose'";
	$resultado3 = $mysqli->query($query3);
	$row3 = $resultado3->fetch_assoc();	
	
	$banco=$row3['id_e'];

	$query4 = "SELECT nombre_entidad FROM entidad where id_e='$banco'";
	$resultado4 = $mysqli->query($query4);
	$row4 = $resultado4->fetch_assoc();

	$query5 = "SELECT concepto,monto,montoinc,respaldo FROM detalle where id_form='$formu'";
	$resultado5 = $mysqli->query($query5);
	$row5 = $resultado5->fetch_assoc();

	}
		else{
		header("location:index.php");		

		}
	?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="stilo.css">
</head>
<body>
	<h1>FORMULARIO DE REGISTRO</h1>
<center><a href="cerrar.php">Salir</a></center>

<form action="registrar.php" method="POST">
	<table border="1">
		<tr>
			<td>Nombre Abogado</td><td><input type="text" name="text_abogado" placeholder="Nombre del abogado" value="<?php echo $row2['nombres'].' '.$row2['apellidos']; ?>"></td>
			<td>nro formulario</td><td><input type="text" name="nroformulario" value="<?php echo $formu; ?>"></td>
		</tr>
		<tr>
			<td>Banco</td><td><input type="text" name="text_banco" placeholder="" value="<?php echo $row4['nombre_entidad']; ?>">
				

			</td>
			<td>fecha</td><td><input type="date" name="fecha" value="<?php echo $row1['fecha']; ?>"></td>

		</tr>
		<tr>
			<td>Numero de Credito</td><td><input type="text" name="text_nrocredito" placeholder="numero de credito" value="<?php echo $row1['nro_credito']; ?>"></td>
		</tr>
		<tr>
			<td>Deudor</td><td><input type="text" name="text_deudor" placeholder="nombre del deudor" value="<?php echo $row3['nombre'].' '.$row3['apellido']; ?>"></td>
		</tr>
		<tr>
			<td>Juzgado</td><td><input type="text" name="text_juzgado" placeholder="nro de juzgado" value="<?php echo $row3['nro_juzgado']; ?>"></td>
		</tr>
		<tr>
			<td>Actividad Realizada</td><td><input type="text" value="<?php echo $row1['actividad']; ?>" name="text_actividad" placeholder="Actividad realizada"></td>
		</tr>
	</table>
	<table border="1">
		<tr>
			<td>Concepto Gasto</td>
			<td>Monto Real</td>
			<td>Monto Incremento</td>
			<td>Respaldo</td>
		</tr>
		<tr>
			<td><input type="text" name="text_concepto1"></td>
			<td><input type="text" name="text_monto1"></td>
			<td><input type="text" name="text_montoinc1"></td>

			<td><select name="resp1">
				<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
				<option value="Comprobante de caja">Comprobante de caja</option>
				<option value="Factura">Factura</option>
				<option value="Fotocopia">Fotocopia</option>
				<option value="Recibo">Recibo</option>

			</select></td>
		</tr>
		<tr>
			<td><input type="text" name="text_concepto2"></td>
			<td><input type="text" name="text_monto2"></td>
			<td><input type="text" name="text_montoinc2"></td>

			<td><select name="resp2">
				<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
				<option value="Comprobante de caja">Comprobante de caja</option>
				<option value="Factura">Factura</option>
				<option value="Fotocopia">Fotocopia</option>
				<option value="Recibo">Recibo</option>
			</select></td>
		</tr>
		<tr>
			<td><input type="text" name="text_concepto3"></td>
			<td><input type="text" name="text_monto3"></td>
			<td><input type="text" name="text_montoinc3"></td>

			<td><select name="resp3">
				<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
				<option value="Comprobante de caja">Comprobante de caja</option>
				<option value="Factura">Factura</option>
				<option value="Fotocopia">Fotocopia</option>
				<option value="Recibo">Recibo</option>
			</select></td>
		</tr>
		<tr>
			<td><input type="text" name="text_concepto4"></td>
			<td><input type="text" name="text_monto4"></td>
			<td><input type="text" name="text_montoinc4"></td>

			<td><select name="resp4">
				<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
				<option value="Comprobante de caja">Comprobante de caja</option>
				<option value="Factura">Factura</option>
				<option value="Fotocopia">Fotocopia</option>
				<option value="Recibo">Recibo</option>
			</select></td>
		</tr>
		<tr>
			<td><input type="text" name="text_concepto5"></td>
			<td><input type="text" name="text_monto5"></td>
			<td><input type="text" name="text_montoinc5"></td>

			<td><select name="resp5">
				<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
				<option value="Comprobante de caja">Comprobante de caja</option>
				<option value="Factura">Factura</option>
				<option value="Fotocopia">Fotocopia</option>
				<option value="Recibo">Recibo</option>
			</select></td>
		</tr>
		<tr>
			<td><input type="text" name="text_concepto6"></td>
			<td><input type="text" name="text_monto6"></td>
			<td><input type="text" name="text_montoinc6"></td>

			<td><select name="resp6">
				<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
				<option value="Comprobante de caja">Comprobante de caja</option>
				<option value="Factura">Factura</option>
				<option value="Fotocopia">Fotocopia</option>
				<option value="Recibo">Recibo</option>
			</select></td>
		</tr>
		<tr>
			<td><input type="text" name="text_concepto7"></td>
			<td><input type="text" name="text_monto7"></td>
			<td><input type="text" name="text_montoinc7"></td>

			<td><select name="resp7">
				<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
				<option value="Comprobante de caja">Comprobante de caja</option>
				<option value="Factura">Factura</option>
				<option value="Fotocopia">Fotocopia</option>
				<option value="Recibo">Recibo</option>
			</select></td>
		</tr>
		<tr>
			<td><input type="text" name="text_concepto8"></td>
			<td><input type="text" name="text_monto8"></td>
			<td><input type="text" name="text_montoinc8"></td>

			<td><select name="resp8">
				<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
				<option value="Comprobante de caja">Comprobante de caja</option>
				<option value="Factura">Factura</option>
				<option value="Fotocopia">Fotocopia</option>
				<option value="Recibo">Recibo</option>
			</select></td>
		</tr>
		<tr>
			<td><input type="text" name="text_concepto9"></td>
			<td><input type="text" name="text_monto9"></td>
			<td><input type="text" name="text_montoinc9"></td>

			<td><select name="resp9">
				<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
				<option value="Comprobante de caja">Comprobante de caja</option>
				<option value="Factura">Factura</option>
				<option value="Fotocopia">Fotocopia</option>
				<option value="Recibo">Recibo</option>
			</select></td>
		</tr>
		<tr>
			<td><input type="text" name="text_concepto10"></td>
			<td><input type="text" name="text_monto10"></td>
			<td><input type="text" name="text_montoinc10"></td>

			<td><select name="resp10">
				<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
				<option value="Comprobante de caja">Comprobante de caja</option>
				<option value="Factura">Factura</option>
				<option value="Fotocopia">Fotocopia</option>
				<option value="Recibo">Recibo</option>
			</select></td>
		</tr>
		<tr><td></td><input type="submit" name="regist" value="Registrar"></td><td><input type="reset" name="reset" value="Borrar Datos"></td></tr>
	</table>
</form>

</body>
</html>