<?php
require ("fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","",16); //empty for normal,B for Bold,last-parameter=font-size
$pdf->cell(190,10,"Asad",1,1); // border-length;max=190;0=full,margin-top,text,border,block
$pdf->Cell(0,10,'Hello World!',1,1);
$pdf->Output();


?>