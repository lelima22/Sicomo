<?php 
	include 'conexion.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>registro mes</title>
</head>
<body>
	<h1>Registro Mes</h1>
	
	<form method="POST" action="registromes.php">
		<table>
			<tr>
			<td>DEl</td><td><input type="date" name="fecha1"></td>
			<td>Al</td><td><input type="date" name="fecha2"></td>
			</tr>
			<tr><td><input type="submit" value="GENERAR" name="btn2"></td></tr>
			<tr>
				<td>Entidad</td>
				<td>Monto Total</td>
				<td>Monto Total Incrementado</td>

			</tr>
			<?php 
				$sql1="SELECT SUM(total) as suma from formulario where fecha BETWEEN 'fecha1' and 'fecha2' ";
				$resu1=mysqli_query($conexion,$sql1)
			 ?>
			<tr>
				<td><input type="text" name="bisa" value="bisa"></td>
				<td><?php echo "$resu1"; ?></td>
				<td><input type="text" name="montototalbisainc"></td>

			</tr>
			<tr>
				<td><input type="text" name="mercantil" value="Banco Mercantil"></td>
				<td><input type="text" name="montototalmercantil"></td>
				<td><input type="text" name="montototalmercantilinc"></td>

			</tr>
			<tr>
				<td><input type="text" name="bnb" value="Banco Nacional de Bolivia"></td>
				<td><input type="text" name="montototalbnb"></td>
				<td><input type="text" name="montototalbnbinc"></td>


			</tr>
			<tr>
				<td><input type="text" name="fassil" value="Banco Fassil"></td>
				<td><input type="text" name="montototalfassil"></td>
				<td><input type="text" name="montototalfassilinc"></td>

			</tr>
			<tr>
				<td><input type="text" name="fortaleza" value="Banco Fortaleza"></td>
				<td><input type="text" name="montototalfortaleza"></td>
				<td><input type="text" name="montototalfortalezainc"></td>

			</tr>
			<tr>
				<td><input type="text" name="fie" value="Banco Fie"></td>
				<td><input type="text" name="montototalfie"></td>
				<td><input type="text" name="montototalfieinc"></td>


			</tr>
			<tr>
				<td><input type="text" name="hansa" value="Hansa Ltda"></td>
				<td><input type="text" name="montototalhansa"></td>
				<td><input type="text" name="montototalhansainc"></td>


			</tr>
			<tr>
				<td><input type="text" name="unilever" value="Unilever"></td>
				<td><input type="text" name="montototalunilever"></td>
				<td><input type="text" name="montototalunileverinc"></td>

			</tr>
			<tr>
				<td><input type="text" name="alcos" value="Alcos"></td>
				<td><input type="text" name="montototalalcos"></td>
				<td><input type="text" name="montototalalcosinc"></td>

			</tr>
			<tr>
				<td><input type="text" name="curtiembre" value="Curtiembre"></td>
				<td><input type="text" name="montototalcurtiembre"></td>
				<td><input type="text" name="montototalcurtiembreinc"></td>

			</tr>
			<tr>
				<td><input type="text" name="economico" value="Banco Economico"></td>
				<td><input type="text" name="montototaleconomico"></td>
				<td><input type="text" name="montototaleconomicoinc"></td>

			</tr>

			
		</table>
	</form>
</body>
</html>