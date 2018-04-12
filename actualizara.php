<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="stilo.css">
</head>
<body>
	<h1>FORMULARIO DE MODIFICACION</h1>
<center><a href="cerrar.php">Cerrar Sesion</a></center>

<form action="actualiza.php" method="POST">
	<table border="1">
		<tr>
			<td>CI Abogado</td><td><input type="text" name="text_abogado" value="6988807" placeholder="Nombre del abogado"></td>
			<td>nro formulario</td><td><input type="text" name="nroformulario"></td>
		</tr>
		
		<tr>
			<td>Numero de Credito</td><td><input type="text" name="text_nrocredito" placeholder="numero de credito"></td>
		</tr>
		
		<tr>
			<td>Actividad Realizada</td><td><input type="text" name="text_actividad" placeholder="Actividad reaizada"></td>
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
		<tr><td></td><input type="submit" name="regist" value="Actualizar"></td><td><input type="reset" name="reset" value="Borrar Datos"></td></tr>
	</table>
</form>

</body>
</html>