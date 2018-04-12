

 <?php
	include 'plantientidad.php';
	require 'conex.php';

	$fe1=$_POST["fe1"];
	$fe2= $_POST["fe2"];
	$usuario=$_POST["usuario"];
	
	$query1 = "SELECT nombres,apellidos from usuario where ci='$usuario'";
	$resultado1 = $mysqli->query($query1);


	$query2 = "SELECT sum(total) as tot,sum(totalinc) as totinc from formulario where fecha between '$fe1'and '$fe2' and ci='$usuario' and EXISTS(select nro_credito from deudor where id_e=1)";
	$resultado2 = $mysqli->query($query2);

	$query3 = "SELECT sum(total) as tot,sum(totalinc) as totinc from formulario where fecha between '$fe1'and '$fe2' and ci='$usuario' and EXISTS(select nro_credito from deudor where id_e=2)";
	$resultado3 = $mysqli->query($query3);

	$query4 = "SELECT sum(total) as tot,sum(totalinc) as totinc from formulario where fecha between '$fe1'and '$fe2' and ci='$usuario' and EXISTS(select nro_credito from deudor where id_e=3)";
	$resultado4 = $mysqli->query($query4);

	$query5 = "SELECT sum(total) as tot,sum(totalinc) as totinc from formulario where fecha between '$fe1'and '$fe2' and ci='$usuario' and EXISTS(select nro_credito from deudor where id_e=4)";
	$resultado5 = $mysqli->query($query5);

	$query6 = "SELECT sum(total) as tot,sum(totalinc) as totinc from formulario where fecha between '$fe1'and '$fe2' and ci='$usuario' and EXISTS(select nro_credito from deudor where id_e=5)";
	$resultado6 = $mysqli->query($query6);

	$query7 = "SELECT sum(total) as tot,sum(totalinc) as totinc from formulario where fecha between '$fe1'and '$fe2' and ci='$usuario' and EXISTS(select nro_credito from deudor where id_e=6)";
	$resultado7 = $mysqli->query($query7);

	$query8 = "SELECT sum(total) as tot,sum(totalinc) as totinc from formulario where fecha between '$fe1'and '$fe2' and ci='$usuario' and EXISTS(select nro_credito from deudor where id_e=7)";
	$resultado8 = $mysqli->query($query8);

	$query9 = "SELECT sum(total) as tot,sum(totalinc) as totinc from formulario where fecha between '$fe1'and '$fe2' and ci='$usuario' and EXISTS(select nro_credito from deudor where id_e=8)";
	$resultado9 = $mysqli->query($query9);

	$query10 = "SELECT sum(total) as tot,sum(totalinc) as totinc from formulario where fecha between '$fe1'and '$fe2' and ci='$usuario' and EXISTS(select nro_credito from deudor where id_e=10)";
	$resultado10 = $mysqli->query($query10);

	$query11 = "SELECT sum(total) as tot,sum(totalinc) as totinc from formulario where fecha between '$fe1'and '$fe2' and ci='$usuario' and EXISTS(select nro_credito from deudor where id_e=11)";
	$resultado11 = $mysqli->query($query11);

	$query12 = "SELECT sum(total) as tot,sum(totalinc) as totinc from formulario where fecha between '$fe1'and '$fe2' and ci='$usuario' and EXISTS(select nro_credito from deudor where id_e=12)";
	$resultado12 = $mysqli->query($query12);
		
	$pdf = new PDF('P','mm',array(216,279));
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetX(70);

	$row1 = $resultado1->fetch_assoc();
	$ro1 = $resultado2->fetch_assoc();
	$ro2 = $resultado2->fetch_assoc();
	$ro3 = $resultado2->fetch_assoc();
	$ro4 = $resultado2->fetch_assoc();
	$ro5 = $resultado2->fetch_assoc();
	$ro6 = $resultado2->fetch_assoc();
	$ro7 = $resultado2->fetch_assoc();
	$ro8 = $resultado2->fetch_assoc();
	$ro9 = $resultado2->fetch_assoc();
	$ro10 = $resultado2->fetch_assoc();
	$ro11 = $resultado2->fetch_assoc();
	
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
	$pdf->Cell(65,6,'Entidad',1,0,'C',1);
	$pdf->Cell(42,6,'Monto Total',1,0,'C',1);
	$pdf->Cell(42,6,'Monto Incremento',1,0,'C',1);
	$pdf->Cell(42,6,'Diferencia',1,1,'C',1);
	$pdf->SetX(15);

	$pdf->Cell(65,6,'Banco Bisa',1,0,'C');
	$pdf->Cell(42,6,$ro1['tot'],1,0,'C');
	$pdf->Cell(42,6,$ro1['totinc'],1,0,'C');
	$pdf->Cell(42,6,$ro1['totinc']-$ro1['tot'],1,1,'C');
	$pdf->SetX(15);

	$pdf->Cell(65,6,'Banco Mercantil Santa Cruz',1,0,'C');
	$pdf->Cell(42,6,$ro2['tot'],1,0,'C');
	$pdf->Cell(42,6,$ro2['totinc'],1,0,'C');
	$pdf->Cell(42,6,$ro2['totinc']-$ro2['tot'],1,1,'C');
	$pdf->SetX(15);

	$pdf->Cell(65,6,'Banco Nacional de Bolivia',1,0,'C');
	$pdf->Cell(42,6,$ro3['tot'],1,0,'C');
	$pdf->Cell(42,6,$ro3['totinc'],1,0,'C');
	$pdf->Cell(42,6,$ro3['totinc']-$ro3['tot'],1,1,'C');
	$pdf->SetX(15);

	$pdf->Cell(65,6,'Banco Fassil',1,0,'C');
	$pdf->Cell(42,6,$ro4['tot'],1,0,'C');
	$pdf->Cell(42,6,$ro4['totinc'],1,0,'C');
	$pdf->Cell(42,6,$ro4['totinc']-$ro4['tot'],1,1,'C');
	$pdf->SetX(15);

	$pdf->Cell(65,6,'Banco Fortaleza',1,0,'C');
	$pdf->Cell(42,6,$ro5['tot'],1,0,'C');
	$pdf->Cell(42,6,$ro5['totinc'],1,0,'C');
	$pdf->Cell(42,6,$ro5['totinc']-$ro5['tot'],1,1,'C');
	$pdf->SetX(15);

	$pdf->Cell(65,6,'Banco Fie',1,0,'C');
	$pdf->Cell(42,6,$ro6['tot'],1,0,'C');
	$pdf->Cell(42,6,$ro6['totinc'],1,0,'C');
	$pdf->Cell(42,6,$ro6['totinc']-$ro6['tot'],1,1,'C');
	$pdf->SetX(15);

	$pdf->Cell(65,6,'Banco Hansa Ltda',1,0,'C');
	$pdf->Cell(42,6,$ro7['tot'],1,0,'C');
	$pdf->Cell(42,6,$ro7['totinc'],1,0,'C');
	$pdf->Cell(42,6,$ro7['totinc']-$ro7['tot'],1,1,'C');
	$pdf->SetX(15);

	$pdf->Cell(65,6,'Banco Unilever',1,0,'C');
	$pdf->Cell(42,6,$ro8['tot'],1,0,'C');
	$pdf->Cell(42,6,$ro8['totinc'],1,0,'C');
	$pdf->Cell(42,6,$ro8['totinc']-$ro8['tot'],1,1,'C');
	$pdf->SetX(15);

	$pdf->Cell(65,6,'Banco Alcos',1,0,'C');
	$pdf->Cell(42,6,$ro9['tot'],1,0,'C');
	$pdf->Cell(42,6,$ro9['totinc'],1,0,'C');
	$pdf->Cell(42,6,$ro9['totinc']-$ro9['tot'],1,1,'C');
	$pdf->SetX(15);

	$pdf->Cell(65,6,'Banco Curtiembre America',1,0,'C');
	$pdf->Cell(42,6,$ro10['tot'],1,0,'C');
	$pdf->Cell(42,6,$ro10['totinc'],1,0,'C');
	$pdf->Cell(42,6,$ro10['totinc']-$ro10['tot'],1,1,'C');
	$pdf->SetX(15);

	$pdf->Cell(65,6,'Banco Economico',1,0,'C');
	$pdf->Cell(42,6,$ro11['tot'],1,0,'C');
	$pdf->Cell(42,6,$ro11['totinc'],1,0,'C');
	$pdf->Cell(42,6,$ro11['totinc']-$ro11['tot'],1,1,'C');
	$pdf->SetX(15);
	$pdf->SetFillColor(222,222,222);

	$pdf->SetFillColor(290,290,290);
	

	$pdf->Cell(65,6,'TOTAL',1,0,'C');
	$pdf->Cell(42,6,$ro1['tot']+$ro2['tot']+$ro3['tot']+$ro4['tot']+$ro5['tot']+$ro6['tot']+$ro7['tot']+$ro8['tot']+$ro9['tot']+$ro10['tot']+$ro11['tot'],1,0,'C');
	$pdf->Cell(42,6,$ro1['totinc']+$ro2['totinc']+$ro3['totinc']+$ro4['totinc']+$ro5['totinc']+$ro6['totinc']+$ro7['totinc']+$ro8['totinc']+$ro9['totinc']+$ro10['totinc']+$ro11['totinc'],1,0,'C');
	$pdf->Cell(42,6,($ro1['totinc']-$ro1['tot'])+($ro2['totinc']-$ro2['tot'])+($ro3['totinc']-$ro3['tot'])+($ro4['totinc']-$ro4['tot'])+($ro5['totinc']-$ro5['tot'])+($ro6['totinc']-$ro6['tot'])+($ro7['totinc']-$ro7['tot'])+($ro8['totinc']-$ro8['tot'])+($ro9['totinc']-$ro9['tot'])+($ro10['totinc']-$ro10['tot'])+($ro11['totinc']-$ro11['tot']),1,1,'C');
	$pdf->SetX(15);

	$pdf->SetX(15);
	$pdf->Output();
?>