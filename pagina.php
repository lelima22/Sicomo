<?php
	session_start();
	$cise=$_SESSION["ci"];
	$nrose=$_SESSION["nro"];
	$actise=$_SESSION["acti"];
	$formuse=$_SESSION["formu"];

?>

 <?php

 $cise=$_SESSION["ci"];
	$nrose=$_SESSION["nro"];
	$actise=$_SESSION["acti"];
	$formuse=$_SESSION["formu"];

	include 'plantilla.php';
	require 'conex.php';
	
	$query = "SELECT concepto, montoinc,respaldo FROM detalle where id_form='$formuse'";
	$resultado = $mysqli->query($query);

	$query1 = "SELECT nombres, apellidos FROM usuario where ci='$cise'";
	$resultado1 = $mysqli->query($query1);

	$query2 = "SELECT nombre, apellido, nro_credito,id_e,nro_juzgado FROM deudor where nro_credito='$nrose'";
	$resultado2 = $mysqli->query($query2);
	$row2 = $resultado2->fetch_assoc();

	$enti=$row2['id_e'];
	$que = "SELECT nombre_entidad FROM entidad where id_e='$enti'";
	$resul = $mysqli->query($que);

	$query3 = "SELECT actividad, id_form, fecha, totalinc FROM formulario where id_form='$formuse'";
	$resultado3 = $mysqli->query($query3);

	$pdf = new PDF('P','mm',array(216,279));
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$row1 = $resultado1->fetch_assoc();
	$row3 = $resultado3->fetch_assoc();
	$row4 = $resul->fetch_assoc();
	$pdf->SetX(20);
	
	$pdf->SetFillColor(222,222,222);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(45,6,'Nombre Abogado',0,0,'C',1);
	$pdf->SetFillColor(290,290,290);
	$pdf->Cell(70,6,' '.'Luis Mariaca',0,0,'D',1);
	$pdf->Cell(10,6,'',0,0,'C',1);
	$pdf->SetFillColor(222,222,222);
	$pdf->Cell(35,6,'Nro Formulario',0,0,'C',1);
	$pdf->SetFillColor(290,290,290);
	$pdf->Cell(25,6,$row3['id_form'],0,1,'C',1);
	$pdf->SetFillColor(222,222,222);
	$pdf->SetX(20);
	
	$pdf->Cell(45,6,'Banco',0,0,'C',1);
	$pdf->SetFillColor(290,290,290);
	$pdf->Cell(70,6,' '.utf8_decode($row4['nombre_entidad']),0,0,'D',1);
	$pdf->Cell(10,6,'',0,0,'C',1);
	$pdf->SetFillColor(222,222,222);
	$pdf->Cell(35,6,'Fecha',0,0,'C',1);
	$pdf->SetFillColor(290,290,290);
	$pdf->Cell(25,6,$row3['fecha'],0,1,'C',1);
	$pdf->SetFillColor(222,222,222);
	$pdf->SetX(20);
	
	$pdf->Cell(45,6,'Nro de Credito',0,0,'C',1);
	$pdf->SetFillColor(290,290,290);
	$pdf->Cell(70,6,' '.$row2['nro_credito'],0,1,'D',1);
	$pdf->SetFillColor(222,222,222);
	$pdf->SetX(20);
	
	$pdf->Cell(45,6,'Deudor',0,0,'C',1);
	$pdf->SetFillColor(290,290,290);
	$pdf->Cell(80,6,' '.utf8_decode($row2['nombre']).' '.utf8_decode($row2['apellido']),0,1,'D',1);
	$pdf->SetFillColor(222,222,222);
	$pdf->SetX(20);
	
	$pdf->Cell(45,6,'Juzgado',0,0,'C',1);
	$pdf->SetFillColor(290,290,290);
	$pdf->Cell(70,6,' '.$row2['nro_juzgado'],0,1,'D',1);
	$pdf->SetFillColor(222,222,222);
	$pdf->SetX(20);
	
	$pdf->Cell(45,6,'Actividad Realizada',0,0,'C',1);
	$pdf->SetFillColor(290,290,290);
	$pdf->Cell(150,15,' '.utf8_decode($row3['actividad']),0,1,'L',1);
	$pdf->Ln(5);
	$pdf->SetX(20);
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(110,6,'CONCEPTO',1,0,'C',1);
	$pdf->Cell(20,6,'MONTO',1,0,'C',1);
	$pdf->Cell(50,6,'RESPALDO',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
	$pdf->SetX(20);
		
		$pdf->Cell(110,6,utf8_decode($row['concepto']),1,0,'C');
		$pdf->Cell(20,6,$row['montoinc'],1,0,'C');
		$pdf->Cell(50,6,utf8_decode($row['respaldo']),1,1,'C');
	}
	$pdf->SetX(20);
	
	$pdf->SetFillColor(222,222,222);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(110,6,'Total',1,0,'C',1);
	$pdf->Cell(20,6,$row3['totalinc'],1,1,'C',1);
	$pdf->Output();
?>