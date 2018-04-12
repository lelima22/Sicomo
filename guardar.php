<?php 
include("validar.php");
 	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];

	$consulta="SELECT * FROM usuario where ci='$usuario' and password='$clave'";
	$consultaa="SELECT * FROM usuario where categoria='admin'";

	$resultado=mysqli_query($conexion,$consulta);
	$resultadoo=mysqli_query($conexion,$consultaa);


	$filas=mysqli_num_rows($resultado);
	$filass=mysqli_num_rows($resultadoo);

	if($filas>0){
		if ($filass>0) {
			header("location:panelAdmin.html");
			
		}
		else{
			header("location:formulario.html");

		}
	}
	else{
		echo "Error en la autentificacion";
	}
	mysqli_free_result($resultado);
	mysqli_close($conexion);

 ?>