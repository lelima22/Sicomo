<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="stilo.css">
</head>
<body>
	<h1>DATOS DEL DEUDOR</h1>
<center><a href="cerrar.php">Salir</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="paneladmin.php">Ir atras</a></center>


<form action="registrardeudor.php" method="POST">
	<table border="1">
		<tr>
			<td>Nombres</td><td><input type="text" name="text_nombres" value="" placeholder="Nombres del Deudor"></td>
			<td>Apellidos</td><td><input type="text" name="text_apellidos" placeholder="Apellidos del deudor"></td>
		</tr>
		
		<tr>
			<td>Numero de Credito</td><td><input type="text" name="text_nrocredito" placeholder="numero de credito"></td>
		</tr>
		
		<tr>
			<td>Numero de Juzgado</td><td><input type="text" name="text_juzgado" placeholder="Numero de Juzgado"></td>
		</tr>
		<tr>
			<td>Entidad</td><td><select name="text_entidad">
				<option value="1">Banco Bisa</option>
				<option value="2">Banco Mercantil Santa Cruz</option>
				<option value="3"> Banco Nacional de Bolivia</option>
				<option value="4"> Banco Fassil</option>
				<option value="5"> Banco Fortaleza</option>
				<option value="6"> Banco Fie</option>
				<option value="7"> Hansa Ltda</option>
				<option value="8"> Unilever</option>
				<option value="9"> Alcos</option>
				<option value="10"> Curtiembre America</option>
				<option value="11"> Banco Economico</option>

			</select></td>
		</tr>
		
		<tr><input type="submit" name="regis" value="registrar"></td><td><input type="reset" name="reset" value="Borrar Datos"></td></tr>
	</table>
</form>

</body>
</html>