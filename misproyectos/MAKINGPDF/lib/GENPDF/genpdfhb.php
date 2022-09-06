<?php
// include class
require('fpdf/fpdf.php');

$de=$_GET['de'];
$para=$_GET['para'];
$img=$_GET['img'];
$mensaje=$_GET['mensaje'];


// create document
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();


// config document
$pdf->SetTitle('Esteban Bernal');
$pdf->SetAuthor('Esteban Bernal');
$pdf->SetCreator('Esteban Bernal');


// cabecera (ancho,alto,texto,0=sin borde 1=borde,0=sigue en misma liena 1=salto linea, ' C' (centrado))
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(176, 5,utf8_decode('FELIZ CUMPLEAÑOS '.$para.' !!!'), 0, 1,'C');

//$pdf->Ln();


$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(176, 5,utf8_decode('TE LO DESEA '.$de.' !!!'), 0, 1,'C');

//$pdf->Ln();


//$pdf->SetFont('Arial','B',15);
//$pdf->cell(138,5,utf8_decode($mensaje) ,0,1,'C');
//$pdf->Ln();

//$pdf->SetFont('Arial','B',10);
//$pdf->cell(138,5,utf8_decode('Apertura: '.$db->getformatofecha($caja->getfechaapertura()).' '.$caja->gethoraapertura()  .' '.($db->sacaruserid($caja->getiduserapertura()))->getuser()),1,1);





// add image
$pdf->Image($img.'.jpg', 50,100, 100,100);

$pdf->Ln();

$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(176, 5,utf8_decode($mensaje), 0, 1,'C');



// output file
$pdf->Output('','happybirthday'.$para.'.pdf');