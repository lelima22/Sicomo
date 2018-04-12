<?php 
	require 'conex.php';
	$formu=$_POST['nrofor'];
	/*$cise=$_SESSION["ci"];*/
	

	
	$query1 = "SELECT actividad,fecha,ci,nro_credito FROM formulario where id_form='$formu'";
	$resultado1 = $mysqli->query($query1);
	$row1 = $resultado1->fetch_assoc();

	$ci=$row1['ci'];
	$nro=$row1['nro_credito'];

	$query2 = "SELECT nombres,apellidos FROM usuario where ci='$ci'";
	$resultado2 = $mysqli->query($query2);
	$row2 = $resultado2->fetch_assoc();

	$query3 = "SELECT nombre,apellido,nro_juzgado,id_e  FROM deudor where nro_credito='$nro'";
	$resultado3 = $mysqli->query($query3);
	$row3 = $resultado3->fetch_assoc();	
	
	$banco=$row3['id_e'];

	$query4 = "SELECT nombre_entidad FROM entidad where id_e='$banco'";
	$resultado4 = $mysqli->query($query4);
	$row4 = $resultado4->fetch_assoc();

	

	?>

<!DOCTYPE html>
<html>
<head>
	<title>Modificacion</title>
	<link rel="stylesheet" type="text/css" href="stilo.css">
</head>
<body>
	<h1>MODIFICACION DE REGISTRO</h1>
	<center><a href="cerrar.php">Salir</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="paneladmin.php">Ir atras</a></center>
<form action="modifi.php" method="POST">
	<table border="1">
		<tr>
			<td>Nombre Abogado</td><td><input type="text" name="text_abogado" placeholder="Nombre del abogado" value="<?php echo $row2['nombres'].$row2['apellidos']; ?>"></td>
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
		<?php 
		require 'conex.php';
		$query5 = "SELECT concepto,monto,montoinc,respaldo FROM detalle where id_form='$formu'";
	$resultado5 = $mysqli->query($query5);
	
	$cont=0;
	while($row5 = $resultado5->fetch_assoc() or $cont <10  )
	{
		$cont=$cont+1;
		$fil=$row5['monto'];
	?>	
		<?php 
		if ($cont==1)
		{	if($fil == ' '){?>
				<tr>
						<td><input type="text" name="text_concepto1" ></td>
						<td><input type="text" name="text_monto1" ></td>
						<td><input type="text" name="text_montoinc1" ></td>

						<td><select name="resp1">
							<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
							<option value="Comprobante de caja">Comprobante de caja</option>
							<option value="Factura">Factura</option>
							<option value="Fotocopia">Fotocopia</option>
							<option value="Recibo">Recibo</option>

						</select></td>
					</tr>
					
			<?php 	}
			else{?>
					<tr>
						<td><input type="text" name="text_concepto1" value="<?php echo $row5['concepto']; ?>"></td>
						<td><input type="text" name="text_monto1" value="<?php echo $row5['monto']; ?>"></td>
						<td><input type="text" name="text_montoinc1" value="<?php echo $row5['montoinc']; ?>"></td>

						<td><select name="resp1">
							<option value="<?php echo $row5['respaldo']; ?>"><?php echo $row5['respaldo']; ?></option>
							<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
							<option value="Comprobante de caja">Comprobante de caja</option>
							<option value="Factura">Factura</option>
							<option value="Fotocopia">Fotocopia</option>
							<option value="Recibo">Recibo</option>

						</select></td>
					</tr>
					
			<?php }
			
		}
		else{
			if ($cont==2)
			{	if($fil == ' '){?>
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
					
			<?php	}
				else{?>
					
					<tr>
					<td><input type="text" name="text_concepto2" value="<?php echo $row5['concepto']; ?>"></td>
					<td><input type="text" name="text_monto2" value="<?php echo $row5['monto']; ?>"></td>
					<td><input type="text" name="text_montoinc2" value="<?php echo $row5['montoinc']; ?>"></td>

					<td><select name="resp2">
					<option value="<?php echo $row5['respaldo']; ?>"><?php echo $row5['respaldo']; ?></option>
					<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
					<option value="Comprobante de caja">Comprobante de caja</option>
					<option value="Factura">Factura</option>
					<option value="Fotocopia">Fotocopia</option>
					<option value="Recibo">Recibo</option>
					</select></td>
					</tr>
					
			<?php	}
				
			}
			else{
					if ($cont==3)
					{	if($fil == ' '){?>
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
									
				<?php			}
						else{?>
									<tr>
										<td><input type="text" name="text_concepto3" value="<?php echo $row5['concepto']; ?>"></td>
										<td><input type="text" name="text_monto3" value="<?php echo $row5['monto']; ?>"></td>
										<td><input type="text" name="text_montoinc3" value="<?php echo $row5['montoinc']; ?>"></td>

										<td><select name="resp3">
										<option value="<?php echo $row5['respaldo']; ?>"><?php echo $row5['respaldo']; ?></option>
										<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
										<option value="Comprobante de caja">Comprobante de caja</option>
										<option value="Factura">Factura</option>
										<option value="Fotocopia">Fotocopia</option>
										<option value="Recibo">Recibo</option>
									</select></td>
									</tr>
									
					<?php	}
					
					}
					else{
						if ($cont==4)
						{	if($fil == 0){?>
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
								
					<?php			}
							else{?>
								<tr>
								<td><input type="text" name="text_concepto4" value="<?php echo $row5['concepto']; ?>"></td>
								<td><input type="text" name="text_monto4" value="<?php echo $row5['monto']; ?>"></td>
								<td><input type="text" name="text_montoinc4" value="<?php echo $row5['montoinc']; ?>"></td>

								<td><select name="resp4">
									<option value="<?php echo $row5['respaldo']; ?>"><?php echo $row5['respaldo']; ?></option>
									<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
									<option value="Comprobante de caja">Comprobante de caja</option>
									<option value="Factura">Factura</option>
									<option value="Fotocopia">Fotocopia</option>
									<option value="Recibo">Recibo</option>
								</select></td>
								</tr>
								
						<?php	}
						
						}
						else{
								if ($cont==5)
								{	if($fil == 0){
								?>			<tr>
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
						<?php			}
									else{?>
										<tr>
										<td><input type="text" name="text_concepto5" value="<?php echo $row5['concepto']; ?>"></td>
										<td><input type="text" name="text_monto5" value="<?php echo $row5['monto']; ?>"></td>
										<td><input type="text" name="text_montoinc5" value="<?php echo $row5['montoinc']; ?>"></td>

										<td><select name="resp5">
											<option value="<?php echo $row5['respaldo']; ?>"><?php echo $row5['respaldo']; ?></option>
											<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
											<option value="Comprobante de caja">Comprobante de caja</option>
											<option value="Factura">Factura</option>
											<option value="Fotocopia">Fotocopia</option>
											<option value="Recibo">Recibo</option>
										</select></td>
										</tr>								
							<?php		}
								
								}
								else{
									if ($cont==6)
									{	if($fil == 0){
										?>		<tr>
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
								<?php			}
										else{?>
											<tr>
											<td><input type="text" name="text_concepto6" value="<?php echo $row5['concepto']; ?>"></td>
											<td><input type="text" name="text_monto6" value="<?php echo $row5['monto']; ?>"></td>
											<td><input type="text" name="text_montoinc6" value="<?php echo $row5['montoinc']; ?>"></td>

											<td><select name="resp6">
												<option value="<?php echo $row5['respaldo']; ?>"><?php echo $row5['respaldo']; ?></option>
												<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
												<option value="Comprobante de caja">Comprobante de caja</option>
												<option value="Factura">Factura</option>
												<option value="Fotocopia">Fotocopia</option>
												<option value="Recibo">Recibo</option>
												</select></td>
											</tr>
									<?php	}
									
									}
									else{
										if ($cont==7)
										{	if($fil == 0){
											?>		<tr>
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
									<?php			}
											else{?>
												<tr>
												<td><input type="text" name="text_concepto7" value="<?php echo $row5['concepto']; ?>"></td>
												<td><input type="text" name="text_monto7" value="<?php echo $row5['monto']; ?>"></td>
												<td><input type="text" name="text_montoinc7" value="<?php echo $row5['montoinc']; ?>"></td>

												<td><select name="resp7">
													<option value="<?php echo $row5['respaldo']; ?>"><?php echo $row5['respaldo']; ?></option>
													<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
													<option value="Comprobante de caja">Comprobante de caja</option>
													<option value="Factura">Factura</option>
													<option value="Fotocopia">Fotocopia</option>
													<option value="Recibo">Recibo</option>
													</select></td>
												</tr>
										<?php	}
										
										}
										else{
											if ($cont==8)
											{	if($fil == 0){?>
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
										<?php			}
												else{?>													
													<tr>
														<td><input type="text" name="text_concepto8" value="<?php echo $row5['concepto']; ?>"></td>
														<td><input type="text" name="text_monto8" value="<?php echo $row5['monto']; ?>"></td>
														<td><input type="text" name="text_montoinc8" value="<?php echo $row5['montoinc']; ?>"></td>

														<td><select name="resp8">
															<option value="<?php echo $row5['respaldo']; ?>"><?php echo $row5['respaldo']; ?></option>
															<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
															<option value="Comprobante de caja">Comprobante de caja</option>
															<option value="Factura">Factura</option>
															<option value="Fotocopia">Fotocopia</option>
															<option value="Recibo">Recibo</option>
														</select></td>
													</tr>
											<?php	}
											
											}
											else{
												if ($cont==9)
												{	if($fil == 0){
														?>		<tr>
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
											<?php			}
													else{?>
														<tr>
															<td><input type="text" name="text_concepto9" value="<?php echo $row5['concepto']; ?>"></td>
															<td><input type="text" name="text_monto9" value="<?php echo $row5['monto']; ?>"></td>
															<td><input type="text" name="text_montoinc9" value="<?php echo $row5['montoinc']; ?>"></td>

															<td><select name="resp9">
																<option value="<?php echo $row5['respaldo']; ?>"><?php echo $row5['respaldo']; ?></option>
																<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
																<option value="Comprobante de caja">Comprobante de caja</option>
																<option value="Factura">Factura</option>
																<option value="Fotocopia">Fotocopia</option>
																<option value="Recibo">Recibo</option>
															</select></td>
														</tr>
												<?php	}
												
												}
												else{	if($fil == 0){
															?>	<tr>
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
												<?php			}
														else{?>
																<tr>
																<td><input type="text" name="text_concepto10" value="<?php echo $row5['concepto']; ?>"></td>
																<td><input type="text" name="text_monto10" value="<?php echo $row5['monto']; ?>"></td>
																<td><input type="text" name="text_montoinc10" value="<?php echo $row5['montoinc']; ?>"></td>

																<td><select name="resp10">
																	<option value="<?php echo $row5['respaldo']; ?>"><?php echo $row5['respaldo']; ?></option>
																	<option value=" "><?php $row5['respaldo']; ?></option>
																	<option value="Informe(Sin respaldo)">Informe(sin respaldo)</option>
																	<option value="Comprobante de caja">Comprobante de caja</option>
																	<option value="Factura">Factura</option>
																	<option value="Fotocopia">Fotocopia</option>
																	<option value="Recibo">Recibo</option>
																</select></td>
															</tr>
													<?php	}?>
													
		
												<?php	}?>
											<?php	}?> 
										<?php	}?>
									<?php	}?>
								<?php	}?>				
							<?php	}?> 
					<?php	}?> 
				<?php	}?>				
			<?php	}?>
		<?php }  ?>	
		<tr><input type="submit" name="modif" value="Modificar"></tr>
	</table>
</form>

</body>
</html>