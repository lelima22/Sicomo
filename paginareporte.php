<?php
	session_start();
?>

 <?php
	include 'plantillareporte.php';
	require 'conex.php';

	$fe1=$_POST["fecha1"];
	$fe2= $_POST["fecha2"];
	
	$query1 = "SELECT sum(total) as tot,sum(totalinc) as totinc from formulario where fecha between '$fe1' and '$fe2' and nro_credito=(select nro_credito from deudor where id_e=1)";
	$resultado1 = $mysqli->query($query1);


	$query2 = "SELECT sum(total)as tot ,sum(totalinc) as totinc  from formulario where fecha between '$fe1'and '$fe2' and nro_credito=(select nro_credito from deudor where id_e=2)";
	$resultado2 = $mysqli->query($query2);
	
	$query3 = "SELECT sum(total)as tot,sum(totalinc) as totinc   from formulario where fecha between '$fe1'and '$fe2' and nro_credito=(select nro_credito from deudor where id_e=3)";
	$resultado3 = $mysqli->query($query3);

	$query4 = "SELECT sum(total)as tot,sum(totalinc) as totinc   from formulario where fecha between '$fe1'and '$fe2' and nro_credito=(select nro_credito from deudor where id_e=4)";
	$resultado4 = $mysqli->query($query4);
	
	$query5 = "SELECT sum(total)as tot,sum(totalinc) as totinc   from formulario where fecha between '$fe1'and '$fe2' and nro_credito=(select nro_credito from deudor where id_e=5)";
	$resultado5 = $mysqli->query($query5);
	
	$query6 = "SELECT sum(total)as tot,sum(totalinc) as totinc   from formulario where fecha between '$fe1'and '$fe2' and nro_credito=(select nro_credito from deudor where id_e=6)";
	$resultado6 = $mysqli->query($query6);
	
	$query7 = "SELECT sum(total) as tot,sum(totalinc) as totinc   from formulario where fecha between '$fe1'and '$fe2' and nro_credito=(select nro_credito from deudor where id_e=7)";
	$resultado7 = $mysqli->query($query7);
	
	$query8 = "SELECT sum(total)as tot,sum(totalinc)as totinc   from formulario where fecha between '$fe1'and '$fe2' and nro_credito=(select nro_credito from deudor where id_e=8)";
	$resultado8 = $mysqli->query($query8);
	
	$query9 = "SELECT sum(total)as tot,sum(totalinc)as totinc   from formulario where fecha between '$fe1'and '$fe2' and nro_credito=(select nro_credito from deudor where id_e=9)";
	$resultado9 = $mysqli->query($query9);
	
	$query10 = "SELECT sum(total)as tot,sum(totalinc)as totinc   from formulario where fecha between '$fe1'and '$fe2' and nro_credito=(select nro_credito from deudor where id_e=10)";
	$resultado10 = $mysqli->query($query10);
	
	$query11 = "SELECT sum(total)as tot,sum(totalinc)as totinc   from formulario where fecha between '$fe1'and '$fe2' and nro_credito=(select nro_credito from deudor where id_e=11)";
	$resultado11 = $mysqli->query($query11);
	
	$pdf = new PDF('P','mm',array(216,279));
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetX(70);

	$row1 = $resultado1->fetch_assoc();
	$row2 = $resultado2->fetch_assoc();
	$row3 = $resultado3->fetch_assoc();
	$row4 = $resultado4->fetch_assoc();
	$row5 = $resultado5->fetch_assoc();
	$row6 = $resultado6->fetch_assoc();
	$row7 = $resultado7->fetch_assoc();
	$row8 = $resultado8->fetch_assoc();
	$row9 = $resultado9->fetch_assoc();
	$row10 = $resultado10->fetch_assoc();
	$row11 = $resultado11->fetch_assoc();
	

	$pdf->SetX(70);

	$pdf->SetFillColor(290,290,290);
	$pdf->SetFont('Arial','B',12);
	
	$pdf->Cell(10,6,'DEL ',0,0,'C',1);
	$pdf->Cell(30,6,$fe1,0,0,'C',1);
	$pdf->Cell(10,6,' AL  ',0,0,'C',1);
	$pdf->Cell(30,6,$fe2,0,1,'C',1);
	$pdf->Ln(5);
	$pdf->SetX(15);

	$pdf->SetFillColor(222,222,222);
	$pdf->Cell(60,6,'ENTIDAD',1,0,'C',1);
	$pdf->Cell(45,6,'Monto Real',1,0,'C',1);
	$pdf->Cell(45,6,'Monto Incremento',1,0,'C',1);
	$pdf->Cell(40,6,'Diferencia',1,1,'C',1);

	$pdf->SetFillColor(222,222,222);
	$pdf->SetX(15);

	$pdf->SetFillColor(290,290,290);
	$pdf->Cell(60,6,'Banco Bisa',1,0,'C',1);
	$pdf->Cell(45,6,$row1['tot'],1,0,'C',1);
	$pdf->Cell(45,6,$row1['totinc'],1,1,'C',1);
	$pdf->Cell(40,6,$row1['totinc']-$row1['tot'],1,1,'C',1);


	$pdf->SetX(15);
	
	$pdf->Cell(60,6,'Banco Mercantil Santa Cruz',1,0,'C',1);
	$pdf->Cell(45,6,$row2['tot'],1,0,'C',1);
	$pdf->Cell(45,6,$row2['totinc'],1,0,'C',1);
	$pdf->Cell(40,6,$row2['totinc']-$row2['tot'],1,1,'C',1);

	$pdf->SetX(15);
	
	$pdf->Cell(60,6,'Banco Nacional de Bolivia',1,0,'C',1);
	$pdf->Cell(45,6,$row3['tot'],1,0,'C',1);
	$pdf->Cell(45,6,$row3['totinc'],1,0,'C',1);
	$pdf->Cell(40,6,$row3['totinc']-$row3['tot'],1,1,'C',1);

	$pdf->SetX(15);
	
	$pdf->Cell(60,6,'Banco Fassil',1,0,'C',1);
	$pdf->Cell(45,6,$row4['tot'],1,0,'C',1);
	$pdf->Cell(45,6,$row4['totinc'],1,0,'C',1);
	$pdf->Cell(40,6,$row4['totinc']-$row4['tot'],1,1,'C',1);
	$pdf->SetX(15);
	
	$pdf->Cell(60,6,'Banco Fortaleza',1,0,'C',1);
	$pdf->Cell(45,6,$row5['tot'],1,0,'C',1);
	$pdf->Cell(45,6,$row5['totinc'],1,0,'C',1);
	$pdf->Cell(40,6,$row5['totinc']-$row5['tot'],1,1,'C',1);

	$pdf->SetX(15);
	
	$pdf->Cell(60,6,'Banco Fie',1,0,'C',1);
	$pdf->Cell(45,6,$row6['tot'],1,0,'C',1);
	$pdf->Cell(45,6,$row6['totinc'],1,0,'C',1);
	$pdf->Cell(40,6,$row6['totinc']-$row6['tot'],1,1,'C',1);

	$pdf->SetX(15);
	
	$pdf->Cell(60,6,'Hansa Ltda',1,0,'C',1);
	$pdf->Cell(45,6,$row7['tot'],1,0,'C',1);
	$pdf->Cell(45,6,$row7['totinc'],1,0,'C',1);
	$pdf->Cell(40,6,$row7['totinc']-$row7['tot'],1,1,'C',1);

	$pdf->SetX(15);
	
	$pdf->Cell(60,6,'Unilever',1,0,'C',1);
	$pdf->Cell(45,6,$row8['tot'],1,0,'C',1);
	$pdf->Cell(45,6,$row8['totinc'],1,0,'C',1);
	$pdf->Cell(40,6,$row8['totinc']-$row8['tot'],1,1,'C',1);

	$pdf->SetX(15);
	
	$pdf->Cell(60,6,'Alcos',1,0,'C',1);
	$pdf->Cell(45,6,$row9['tot'],1,0,'C',1);
	$pdf->Cell(45,6,$row9['totinc'],1,0,'C',1);
	$pdf->Cell(40,6,$row9['totinc']-$row9['tot'],1,1,'C',1);


	$pdf->SetX(15);
	
	$pdf->Cell(60,6,'Curtiembre America',1,0,'C',1);
	$pdf->Cell(45,6,$row10['tot'],1,0,'C',1);
	$pdf->Cell(45,6,$row10['totinc'],1,0,'C',1);
	$pdf->Cell(40,6,$row10['totinc']-$row10['tot'],1,1,'C',1);


	$pdf->SetX(15);
	
	$pdf->Cell(60,6,'Banco Economico',1,0,'C',1);
	$pdf->Cell(45,6,$row11['tot'],1,0,'C',1);
	$pdf->Cell(45,6,$row11['totinc'],1,0,'C',1);
	$pdf->Cell(40,6,$row11['totinc']-$row11['tot'],1,1,'C',1);


		
	$pdf->Output();
?>