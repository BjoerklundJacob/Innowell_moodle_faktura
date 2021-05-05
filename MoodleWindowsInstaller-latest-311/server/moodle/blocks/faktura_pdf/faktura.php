<?php
require('../../../../../fpdf183/fpdf.php');
require(__DIR__.'/../../config.php');
global $DB;
$user = $DB->get_record_sql('SELECT firstname, middlename, lastname, address, {user_enrolments}.timestart, {course}.fullname, {user_enrolments}.id
                             FROM {user} 
                             INNER JOIN {user_enrolments} ON {user}.id = {user_enrolments}.userid
                             INNER JOIN {course} ON {course}.id = {user_enrolments}.modifierid
                             WHERE {user_enrolments}.id = '.$_GET["faktura"]);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont(
  'Arial',//Font family
  'B',//Bold, Italic, Underline
  16//Size
);
$pdf->Cell(40,10,"Name: ");
$pdf->Cell(80,10,$user->firstname." ".$user->middlename." ".$user->lastname, 0, 1, 'C');
$pdf->Cell(40,10,"Address: ");
$pdf->Cell(80,10,$user->address, 0, 1, 'C');
$pdf->Cell(40,10,"Time enrolled: ");
$pdf->Cell(80,10, date("d-m-Y - H:i", $user->timestart), 0, 1, 'C');
$pdf->Cell(40,10,"Course name: ");
$pdf->Cell(80,10,$user->fullname, 0, 1, 'C');
$pdf->Cell(40,10,"Price: ");
$pdf->Cell(80,10,"1000.00", 0, 1, 'C');
$pdf->Cell(40,10,"Faktura ID: ");
$pdf->Cell(80,10,$user->id, 0, 1, 'C');
$pdf->Output();
?>