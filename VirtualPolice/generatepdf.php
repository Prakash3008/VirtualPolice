<?php 
include_once('E:\xamppp\htdocs\VirtualPolice\c.php');
include_once('E:\xamppp\htdocs\VirtualPolice\fpdf.php');

class PDF extends FPDF
{
function Header()
{    
   $this->Image('https://ruralhandmade.com/uploads/logo_image/logo_85.png',75,8,65);
    $this->SetFont('Arial','B',13);
    $this->Ln(30);
    $this->Cell(3);
    $title='E - Catalog';
    $w = $this->GetStringWidth($title)+6;
  //  $this->SetX((210-$w)/2);
    // Colors of frame, background and text
    $this->SetDrawColor(191, 139, 81);
    $this->SetFillColor(255, 231, 206);
    $this->SetTextColor(191, 139, 81);
    // Thickness of frame (1 mm)
    $this->SetLineWidth(1);
    // Title
    $this->Cell(0,20,$title,1,1,'C',true);
    $this->Ln(20);
}
 
function Footer()
{
     $this->SetY(-15);
     $this->SetFont('Arial','I',8);
     $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$titlee="dimension:Height:93 cm weight:10";
$db = new dbObj();
$aadha = $_POST['aadhar'];
$connString =  $db->getConnstring();
$display_heading = array('username'=>'Username :', 'password'=> 'Password :','mailid'=> 'MailId :','phoneno'=> 'Mobileno :',);
$result = mysqli_query($connString, "SELECT description FROM product limit 1") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SELECT title FROM product ");
$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(191, 139, 81);
$pdf->Image('C:\Users\HP\Downloads/1 (5).jpg',120,110,65);
//$pdf->Cell(0,0,$titlee,90,90,'C');

foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->MultiCell(90,10,$column);
$pdf->Ln();
}
$pdf->Output();

?>