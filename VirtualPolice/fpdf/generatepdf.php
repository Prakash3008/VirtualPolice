<?php 
include_once("c.php");
include_once('fpdf.php');

class PDF extends FPDF
{
function Header()
{    
    $this->Image('logo.png',10,-1,70);
    $this->SetFont('Arial','B',13);
    $this->Cell(80);
	$this->Cell(60,10,'STATE POLICE DEPARTMENT',1,0,'c');
    $this->Cell(80,10,'FIRST INFORMATION REPORT',1,0,'C');
    $this->Ln(20);
}
 
function Footer()
{
     $this->SetY(-15);
     $this->SetFont('Arial','I',8);
     $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$db = new dbObj();
$test="ruthsan";
$connString =  $db->getConnstring();
$display_heading = array('username'=>'Username :', 'password'=> 'Password :','mailid'=> 'MailId :','phoneno'=> 'Mobileno :',);
$result = mysqli_query($connString, "SELECT * FROM `ajay01`") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "select * from ajay01 where username = '$	test'");
$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',14);
foreach($header as $heading) {
$pdf->Cell(40,15,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(40,12,$column,1);
}
$pdf->Output();

?>