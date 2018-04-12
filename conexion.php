<?php 
	$conexion=mysqli_connect("localhost","root","","bd_jud") or die("no se ha podido la conexion");
 	
 if(!$conexion)
 	{
 		echo 'error al conectarnos';
 	}
 	else{
 		echo 'conectado';
 	}
 ?>