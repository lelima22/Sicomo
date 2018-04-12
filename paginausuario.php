

 <?php
	include 'plantillareporteusuario.php';
	require 'conex.php';

	$fe1=$_POST["fecha3"];
	$fe2= $_POST["fecha4"];
	$usuario=$_POST["usuario"];
	
	$query1 = "SELECT nombres,apellidos from usuario where ci='$usuario'";
	$resultado1 = $mysqli->query($query1);

	$query2 = "SELECT actividad, total,totalinc from formulario where fecha between '$fe1'and '$fe2' and ci='$usuario'";
	$resultado2 = $mysqli->query($query2);

		
	$pdf = new PDF('P','mm',array(216,279));
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetX(70);

	$row1 = $resultado1->fetch_assoc();
	$row2 = $resultado2->fetch_assoc();
	
	$pdf->SetX(40);

	$pdf->SetFillColor(290,290,290);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(60,6,utf8_decode($row1['nombres']).' '.utf8_decode($row1['apellidos']),0,0,'C',1);
	$pdf->Cell(10,6,'DEL ',0,0,'C',1);
	$pdf->Cell(30,6,$fe1,0,0,'C',1);
	$pdf->Cell(10,6,' AL  ',0,0,'C',1);
	$pdf->Cell(30,6,$fe2,0,1,'C',1);
	$pdf->Ln(5);
	$pdf->SetX(15);

	$pdf->SetFillColor(222,222,222);
	$pdf->Cell(65,6,'Actividad',1,0,'C',1);
	$pdf->Cell(42,6,'Monto Total',1,0,'C',1);
	$pdf->Cell(42,6,'Monto Incremento',1,0,'C',1);
	$pdf->Cell(42,6,'Diferencia',1,1,'C',1);

	$pdf->SetFillColor(222,222,222);
	$pdf->SetX(15);


$pdf->SetFont('Arial','',10);
	
	while($row2 = $resultado2->fetch_assoc())
	{
	
	$pdf->SetX(15);
		
		$pdf->Cell(65,6,utf8_decode($row2['actividad']),1,0,'C');
		$pdf->Cell(42,6,$row2['total'],1,0,'C');
		$pdf->Cell(42,6,$row2['totalinc'],1,0,'C');
		$pdf->Cell(42,6,$row2['totalinc']-$row2['total'],1,1,'C');

	}
		
	$pdf->Output();
?>