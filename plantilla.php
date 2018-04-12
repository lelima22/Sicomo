<?php
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('Imagenes/logo.png', 12, 5, 40 );
			$this->SetFont('Arial','B',14);
			$this->Cell(30);
			$this->Cell(145,30, 'FORMULARIO DE GASTOS JUDICIALES',0,0,'C');
			$this->Ln(25);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
			$this->Cell(0,15, 'First Solutions it ',0,0,'C' );

		}		
	}
?>