<?php  require './lib/php/verifierCnx2.php'; ?>
<?php

require '../lib/php/dbConnect.php';
require '../lib/php/classes/Connexion.class.php';
require '../lib/php/classes/LivrePDF.class.php';
require('../lib/php/fpdf/html2pdf.php');

$cnx = Connexion::getInstance($dsn,$user,$pass);

$type = new LivrePDF($cnx);
$liste = $type->getLivreById($_GET['id_ebook']);
$nbr=count($liste);



/*$pdf = new FPDF('P','cm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->SetDrawColor(180,0,0);
$pdf->SetFillColor(180,0,0);
$pdf->SetTextColor(255,255,255);
$pdf->SetXY(3, 3);
$pdf->Cell(16,1,$liste[0]['titre'],1,1,'L',1);

$pdf->SetDrawColor(0, 0 ,0);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',12);
$pdf->SetXY(2.5, 4);
$x = 2.5;$y =4;

//for($i=0;$i<$nbr;$i++)
//{
    $pdf->SetXY($x+0.5,$y);
    //$pdf->Cell(16,1,  utf8_encode($liste[0]['Contenu']),0,1,'L',1);
    
//}*/
    $pdf=new PDF_HTML();
    $pdf->SetFont('Arial','',12);
    $pdf->AddPage();
    $pdf->SetDrawColor(180,0,0);
    $pdf->SetFillColor(180,0,0);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetXY(10, 3);
    $pdf->Cell(16,10,$liste[0]['titre'],1,1,'L',1);
    
    $pdf->SetDrawColor(0, 0 ,0);
    $pdf->SetFillColor(255,255,255);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',12);
    $pdf->SetXY(2.5, 4);
    $pdf->WriteHTML($liste[0]['Contenu']);


$pdf->Output();
?>