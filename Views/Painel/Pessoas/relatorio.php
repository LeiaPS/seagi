<?php
require "vendor/setasign/fpdf/fpdf.php";
/**
* 
*/
class dadosPdf extends FPDF
{
  function header() {
    $this->SetFont('Arial', 'B', 14);
    $this->Ln(12);
  }

  function footer() {
    $this->SetY(-15);
    $this->Cell(0,5,'Página '.$this->PageNo().'/{nb}',0,0,'C');
  }
  function headerTable(){
  }
  function viewTable($pessoa){
    $this->SetFont('Arial', 'B', 12);
    $this->Cell(7,6,'Nome: '.$pessoa['nome'],0,0,'C');
  }
}
$pdf = new dadosPdf();
$pdf->AddPage('P', 'A4', 0);
$pdf->Image('assets/img/avatares/wellington.jpg',95,6,30,0,'JPEG');
$pdf->AliasNbPages();
$pdf->headerTable();
$pdf->viewTable($pessoa);
$pdf->Output();
?>