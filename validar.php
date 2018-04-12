<?php
	session_start();
?>

<?php 
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];

	if($usuario <> "" and $clave <> "")
	{
	
 //conectar a base de datos
	$conexion=mysqli_connect("localhost","root","","bd_jud");
	$consulta="SELECT * FROM usuario where ci='$usuario' and password='$clave'";
$consultaa="SELECT * FROM usuario where categoria='admin' and ci=$usuario";


	$resultado=mysqli_query($conexion,$consulta);
	$resultadoo=mysqli_query($conexion,$consultaa);

	$filas=mysqli_num_rows($resultado);
	$filass=mysqli_num_rows($resultadoo);
	$_SESSION["ci"] 	= $usuario;
	

	if($filas>0){
		if ($filass>0) {
			header("location:panelAdmin.php");
		}
		else{
			header("location:panelusuario.php");			

		}
	}
	else
	{
		header("location:error1.php");		
	
	}
	mysqli_free_result($resultado);
	mysqli_free_result($resultadoo);

	mysql_close($conexion);
	}
	else{
		header("location:error1.php");		
	}


