<?php
require __DIR__ . '/vendor/autoload.php';
use setasign\Fpdi\Fpdi;



// initiate FPDI
$pdf = new Fpdi();

// pilih format template
$pdf->setSourceFile("format.pdf");


// ambil page 1
$tplId = $pdf->importPage(1);

// use the imported page and place it at point 5,5 with your preferred width in mm
// setting potrait dan ukuran a4
$pdf->AddPage('P', array(210,297));

// $pdf->useTemplate($tplId, 0, 0, 210); 
// setting size format template
$pdf->useTemplate($tplId, 0, 0, 210,297); 



// format text
$pdf->SetFont('Courier','B',12); 
$pdf->SetTextColor(0,0,255); 


// tulis text

$pdf->SetXY(60, 50);
$text = "[tanggal]";
$pdf->Write(0, $text);

$pdf->SetXY(19, 70);
$text = "X";
$pdf->Write(0, $text);

$pdf->SetXY(69, 70);
$text = "X";
$pdf->Write(0, $text);

$pdf->SetXY(115, 70);
$text = "X";
$pdf->Write(0, $text);

$pdf->SetXY(152.5, 70);
$text = "X";
$pdf->Write(0, $text);

$pdf->SetXY(19, 83);
$pdf->MultiCell(173, 6, '[keperluanpenjelasan][keperluanpenjelasan][keperluanp
enjelasan][keperluanpenjelasan][keperluanpenjelasan][keperluanpenjelasan]', 0, 'L');

$pdf->SetXY(65, 153);
$text = "[00:00]";
$pdf->Write(0, $text);

$pdf->SetXY(154, 153);
$text = "[00:00]";
$pdf->Write(0, $text);

$pdf->SetXY(53, 170);
$text = "[requested]";
$pdf->Write(0, $text);

$pdf->SetXY(53, 187);
$text = "[recommended]";
$pdf->Write(0, $text);

$pdf->SetXY(53, 197);
$text = "[approved]";
$pdf->Write(0, $text);

$pdf->SetXY(53, 208);
$text = "[acknowledged]";
$pdf->Write(0, $text);

$pdf->SetXY(148, 174);
$text = "[sign 1]";
$pdf->Write(0, $text);

$pdf->SetXY(148, 187);
$text = "[sign 2]";
$pdf->Write(0, $text);

$pdf->SetXY(148, 197);
$text = "[sign 3]";
$pdf->Write(0, $text);

$pdf->SetXY(148, 208);
$text = "[sign 4]";
$pdf->Write(0, $text);

$pdf->SetXY(148, 225);
$text = "[00:00]";
$pdf->Write(0, $text);

$pdf->SetXY(148, 235);
$text = "[sign 5]";
$pdf->Write(0, $text);

$pdf->SetXY(65, 225);
$text = "[00:00]";
$pdf->Write(0, $text);

$pdf->SetXY(65, 235);
$text = "[security]";
$pdf->Write(0, $text);

$pdf->Image('img/sign.png', 148, 225, 25, 0);



// $pdf->SetXY(51, 45); 
// $date = date('F dS, Y');
// $pdf->Write(0, $date);

// end tulis text




$outputFile = __DIR__ . '/output.pdf';
$pdf->Output($outputFile,'F');
?>
