<?php
require('fpdf/fpdf.php');



class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	
		
	

    
    $this->SetFont('Arial','B',30);
    $this->SetDrawColor(0,80,180);
    $this->SetFillColor(230,230,0);
    $this->SetTextColor(220,50,50);
    $this->Cell(0,2,'SMART PARKING SYSTEM',0,0,'C','true');
    $this->Ln(28);
    $this->Cell(0,1,'Ticket',0,1,'C','');
    $this->Ln(2);
    $this->SetLineWidth(2);
    $this->Ln(0);
    $this->Image('IMG/barras.png',180,15,30);
    $this->Image('IMG/car.png',10,6,35);
    $this->Ln(2);
    $this->SetFont('Arial','B',10);
    $this->Cell(35);
    $this->cell(20,10,'Piso',0,0,15,'C');
    $this->cell(17,10,'Columna',0,0,15,'C');
    $this->cell(20,10,'Parqueo',0,0,15,'C');
    $this->cell(20,10,'Fecha',0,0,15,'C');
	$this->cell(20,10,'Hora',0,0,15,'C');
	$this->cell(20,10,'Tu Codigo',0,0,15,'C');
    $this->cell(20,10,'Nombre',0,1,15,'C');
    
}


function Footer(){

    // Posición a 1,5 cm del final
    $this->SetY(-200);
    // Arial itálica 8
    $this->SetFont('Arial','B',8);
    // Color del texto en gris
    $this->SetTextColor(128);
    // Número de página
    $this->Cell(1,' '.$this->PageNo());

    $this->Cell(0,0,utf8_decode('Derechos Reservados ©'),6,15,'C','');
    $this->Ln(50);
   
}
}



$pdf = new PDF('L','mm',array(60,-50));
$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Courier','',8);
$pdf->SetX(5);



require 'cn.php';
$consulta = "SELECT * FROM reserva";
$resultado = $mysqli->query($consulta);
$pdf->Cell(35);
    while($row = $resultado->fetch_assoc()){
	$pdf->cell(25,10,'3',0,0,'C',0);
	$pdf->cell(15,10,'2',0,0,'C',0);
	$pdf->cell(15,10,'8',0,0,'C',0);
	$pdf->cell(19,10,$row['FECHA_RESERVACION'],0,0,'C',0);
	$pdf->cell(25,10,$row['HORA'],0,0,'C',0);
	$pdf->cell(18,10,$row['CODIGO_RESERVA'],0,0,'C',0);
	$pdf->cell(18,10,$row['NOMBRE'],0,1,'LR',0);
	$pdf->Cell(35);
	while($row = $resultado->fetch_assoc()){
	$pdf->cell(15,10,'10',0,0,'C',0);
	$pdf->cell(25,10,'9',0,0,'C',0);
	$pdf->cell(7,10,'7',0,0,'C',0);
	$pdf->cell(25,10,$row['FECHA_RESERVACION'],0,0,'C',0);
	$pdf->cell(20,10,$row['HORA'],0,0,'C',0);
	$pdf->cell(23,10,$row['CODIGO_RESERVA'],0,0,'C',0);
	$pdf->cell(18,10,$row['NOMBRE'],0,1,'LR',0);
	$pdf->Cell(36);
	while($row = $resultado->fetch_assoc()){
	$pdf->cell(15,10,'15',0,0,'C',0);
	$pdf->cell(25,10,'7',0,0,'C',0);
	$pdf->cell(7,10,'6',0,0,'C',0);
	$pdf->cell(25,10,$row['FECHA_RESERVACION'],0,0,'C',0);
	$pdf->cell(20,10,$row['HORA'],0,0,'C',0);
	$pdf->cell(23,10,$row['CODIGO_RESERVA'],0,0,'C',0);
	$pdf->cell(18,10,$row['NOMBRE'],0,1,'LR',0);
	$pdf->Cell(35);
	while($row = $resultado->fetch_assoc()){
	$pdf->cell(15,10,'20',0,0,'C',0);
	$pdf->cell(15,10,'9',0,0,'C',0);
	$pdf->cell(25,10,'4',0,0,'C',0);
	$pdf->cell(19,10,$row['FECHA_RESERVACION'],0,0,'C',0);
	$pdf->cell(15,10,$row['HORA'],0,0,'C',0);
	$pdf->cell(18,10,$row['CODIGO_RESERVA'],0,0,'C',0);
	$pdf->cell(18,10,$row['NOMBRE'],0,1,'LR',0);
	$pdf->Cell(35);
	while($row = $resultado->fetch_assoc()){
	$pdf->cell(15,10,'30',0,0,'C',0);
	$pdf->cell(15,10,'1',0,0,'C',0);
	$pdf->cell(25,10,'18',0,0,'C',0);
	$pdf->cell(19,10,$row['FECHA_RESERVACION'],0,0,'C',0);
	$pdf->cell(15,10,$row['HORA'],0,0,'C',0);
	$pdf->cell(18,10,$row['CODIGO_RESERVA'],0,0,'C',0);
	$pdf->cell(18,10,$row['NOMBRE'],0,1,'LR',0);
	$pdf->Cell(35);
	while($row = $resultado->fetch_assoc()){
	$pdf->cell(15,10,'31',0,0,'C',0);
	$pdf->cell(15,10,'18',0,0,'C',0);
	$pdf->cell(25,10,'20',0,0,'C',0);
	$pdf->cell(19,10,$row['FECHA_RESERVACION'],0,0,'C',0);
	$pdf->cell(15,10,$row['HORA'],0,0,'C',0);
	$pdf->cell(18,10,$row['CODIGO_RESERVA'],0,0,'C',0);
	$pdf->cell(18,10,$row['NOMBRE'],0,1,'LR',0);
	$pdf->Cell(35);
	while($row = $resultado->fetch_assoc()){
	$pdf->cell(15,10,'32',0,0,'C',0);
	$pdf->cell(15,10,'16',0,0,'C',0);
	$pdf->cell(25,10,'30',0,0,'C',0);
	$pdf->cell(19,10,$row['FECHA_RESERVACION'],0,0,'C',0);
	$pdf->cell(15,10,$row['HORA'],0,0,'C',0);
	$pdf->cell(18,10,$row['CODIGO_RESERVA'],0,0,'C',0);
	$pdf->cell(18,10,$row['NOMBRE'],0,1,'LR',0);
	$pdf->Cell(35);

}
}
}
}
}	
}
}
$pdf->Output();


?>



