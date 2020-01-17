<?php

require('fpdf181/fpdf.php');
include('connection.php');
$db =new PDO('mysql:host=localhost;dbname=missing_marks_complaints','root',''); 

class myPDF extends FPDF
{

function header()
{
//$this->Image('logo.png',10,6);
$this->SetFont('Arial','B',14);
$this->Cell(276,5,'Missing Marks Complain System',0,0,'C');
$this->Ln();
$this->SetFont('Times','',12);
$this-> Cell( 276,10,'students complain report',0,0,'C');

}


function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','',8);
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
function headerTable()
{
   // $this->SetFont('Times',0,12);
    $this->cell(20,10,'',1,1);  
    $this->cell(60,10,'Registration Number',1,0,'C');
    $this->cell(30,10,'Course Code',1,0,'C');
    $this->cell(60,10,'Course Name',1,0,'C');
    $this->cell(40 ,10,'Year of study',1,0,'C');
    $this->cell(30,10,'Semester',1,0,'C');
    $this->cell(50,10,'Lecturer Name',1,0,'C');
    $this->Ln();

}
function viewTable($con)
{
 $this->SetFont('Arial','B',14);
 $stnt=$con->query("select * from studentcomplain");
 while($data = $stnt->fetch(PDO::FETCH_OBJ))
 {
    $this->cell(60,10,$data->reg_No,1,0,'L');
    $this->cell(30,10,$data->course_Code,1,0,'L');
    $this->cell(60,10,$data->course_Name,1,0,'L');
    $this->cell(40 ,10,$data->yaer_Name,1,0,'L');
    $this->cell(30,10,$data->semester_Name,1,0,'L');
    $this->cell(50,10,$data->lecturer_Name,1,0,'L');
    $this->Ln();
 }

}

}
$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();
 ?>