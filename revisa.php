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
 	<title>Revisa Formularios</title>
 	<link rel="stylesheet" type="text/css" href="stilo.css">
 </head>
 <body>
	<h1>Formularios generados</h1>
		<p align="center"><?php echo 'Formularios generados de:  '.$nom. ' '.$ape; ?></p>

	<center><a href="cerrar.php">Salir</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="panelusuario.php">Ir atras</a></center>
<center>
	<table border="1">
		
		<tr>
			<td>Numero Formulario</td>
			<td>Actividad</td>
			<td>Imprimir</td>
			<td>Modificado</td>

		</tr>
			<?php 

				include("conexion.php");

				$que="SELECT * FROM formulario where ci=$cise";
				$res=$conexion->query($que);
				while ($ro=$res->fetch_assoc()) {	
			 ?>
			 <tr>
			 	<td><?php echo $ro['id_form']; ?></td>
			 	<td><?php echo $ro['actividad']; ?></td>
			 	<td><a href="imprime.php?id=<?php echo $ro['id_form']; ?>">Imprimir</a></td>
			 	<?php     $fil=$ro['modificado'];
			 	   if($fil == 0){?>	
						<td>NO</td>
				<?php			}
						else{?>
						<td>SI</td>
				<?php	}?>
			 </tr>

				
				<?php } ?>

	</table>
 </center>
 </body>
 </html>



 												