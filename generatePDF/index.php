<?php
include('database.php');
$database = new Database();
$result = $database->runQuery("SELECT ref_no,status FROM request_details");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='lzml8dgk_firesafety' 
AND `TABLE_NAME`='request_details'
and `COLUMN_NAME` in ('ref_no','status')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

		$pdf->Cell(130 ,5,'',0,1);
        $pdf->Cell(59 ,5,'',0,1);//end of line
        
        $pdf->Cell(75 ,5,'',0,0);
        $pdf->Cell(10 ,5,'Government Of Delhi',0,1);
        $pdf->Cell(77 ,5,'',0,1);
        $pdf->Cell(78 ,5,'',0,0);
        $pdf->Cell(10 ,5,'Delhi Fire Services',0,1);
        $pdf->Cell(77 ,5,'',0,1);
        $pdf->Cell(78 ,5,'',0,1);//endl
        
        $pdf->Cell(130 ,5,'From: [Name]',0,0);
        $pdf->Cell(25 ,5,'To: [Name]',0,1);
        $pdf->Cell(78 ,5,'',0,1);//endl
        
        $pdf->Cell(130 ,5,'Station Fire Officer: [___]',0,0);
        $pdf->Cell(25 ,5,'',0,1);
        $pdf->Cell(25 ,5,'',0,1);
        $pdf->Cell(34 ,5,'Delhi',0,1);
        $pdf->Cell(25 ,5,'',0,1);
        $pdf->Cell(50 ,5,'',0,0);
        $pdf->Cell(10 ,5,'Reference No. <<NO.>>  , Dated : <<DATE>>',0,1);
        $pdf->Cell(25 ,5,'',0,1);
		$pdf->Cell(130 ,5,'Subject: Delhi Fire Service - <<ZONE>> ',0,1);
		$pdf->Cell(130 ,5,'Issue of report generated during inspection of the existing building of <<BUILDING NAME>>, ',0,1);
		$pdf->Cell(130 ,5,'<<ADDRESS>> - Regarding: ',0,1);
        $pdf->Cell(25 ,5,'',0,1);
		$pdf->Cell(130 ,5,'References: ',0,1);
        $pdf->Cell(25 ,5,'',0,1);
        $pdf->Cell(15 ,5,'',0,0);
        $pdf->Cell(10 ,5,'1. Letter from the owner of <<BUILDING NAME>>, <<ADDRESS>>.',0,1);
        $pdf->Cell(15 ,5,'',0,0);
        $pdf->Cell(10 ,5,'2. Issue / Renewal of NOC.',0,1);
        $pdf->Cell(25 ,5,'',0,1);
		$pdf->Cell(130 ,5,'In obedience of the reference first cited above, the owner of <<BUILDING NAME>>,',0,1);
		$pdf->Cell(130 ,5,'<<ADDRESS>> has applied for <<NUMBER>> occupancy NOC',0,1);
		$pdf->Cell(130 ,5,'',0,1);
        $pdf->Cell(25 ,5,'',0,1);
		$pdf->Cell(130 ,5,'Vide reference third cited, I have inspected the above building on <<DATE>> ,',0,1);
		$pdf->Cell(130 ,5,'and issue/renew the NOC,',0,1);
        $pdf->Cell(25 ,5,'',0,1);
		$pdf->Cell(130 ,5,'1. Particulars of the building: ',0,1);
        $pdf->Cell(9 ,10,' (a)',1,0);
        $pdf->Cell(40 ,10,'Address of building: ',1,0);
        $pdf->Cell(140 ,10,' ',1,1);
        $pdf->Cell(9 ,10,' (b)',1,0);
        $pdf->Cell(70 ,10,'Area of plot / Height of the building ',1,0);
        $pdf->Cell(110 ,10,' ',1,1);
        $pdf->Cell(9 ,10,' (c)',1,0);
        $pdf->Cell(40 ,10,'No. of blocks',1,0);
        $pdf->Cell(140 ,10,' ',1,1);
$pdf->Output();
?>