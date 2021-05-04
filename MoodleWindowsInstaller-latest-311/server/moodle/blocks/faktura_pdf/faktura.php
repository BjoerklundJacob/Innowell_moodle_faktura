<?php
require('../../../../../fpdf183/fpdf.php');
require(__DIR__.'/../../config.php');
global $DB;
global $USER;
$user = $DB->get_record_sql('SELECT firstname, middlename, lastname, address, {user_enrolments}.timestart, {course}.fullname
                             FROM {user} 
                             INNER JOIN {user_enrolments} ON {user}.id = {user_enrolments}.userid
                             INNER JOIN {course} ON {course}.id = {user_enrolments}.enrolid
                             WHERE {user}.id = '.$USER->id);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont(
  'Arial',//Font family
  'B',//Bold, Italic, Underline
  16//Size
);
$pdf->Cell(40,10,$user->firstname." ".$user->middlename." ".$user->lastname);
$pdf->Cell(40,10,$user->address);
$pdf->Cell(40,10,$user->timestart);
$pdf->Cell(40,10,$user->fullname);
$pdf->Output();
?>