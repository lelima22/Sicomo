<?php 
		$conexion=mysqli_connect('localhost','root','','bd_consultora');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro mes empleado</title>
</head>
<body>
	<h1>Registro Mes Usuario</h1>
	<form>
		<table>
			<tr>
				<td><input type="text" name="nombreusuario" placeholder="Nombre Usuario"></td>
				<td><input type="date" name="mes" ></td>
			</tr>
			<tr>
				<td>actividad</td>
				<td>Monto Total</td>
			</tr>

				<?php 
					$sql="SELECT * from formulario";
					$sqll="SELECT * from detalle";
					$result=mysqli_query($conexion,$sql);
					$resultl=mysqli_query($conexion,$sqll);

					
				 ?>

			<tr>
				<td></td>
				<td></td>
			</tr>

		</table>

	</form>
</body>
</html>