<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SIREGAJ</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="shortcut icon" href="Imagenes/logo1.png">
</head>
<body>
	
	<form action="validar.php" method="POST">
		<p align="center">BIENVENIDO AL SISTEMA</p>
		<h1>SIREGAJ</h1>
		<input type="text" name="usuario" placeholder="&#128271;  Usuario" >
		<input type="password" name="clave" placeholder="&#128272; Contraseña">
		<input type="submit" name="" value="Ingresar">
		<?php 
			if(isset($_POST['usuario'])){
				$usuario=$_POST['usuario'];
				$password=$_POST['password'];

				if($usuario==""){
					array_push($campos,"El campo usuario no puede estar vacio");
				}
				if($password==""){
					array_push($campos,"El campo password no puede estar vacio");
				}


			}
		 ?>

	</form>

</body>
</html>