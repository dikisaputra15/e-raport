<?php
Class cetakjadwal extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('Model_nilai');
    }
    
    function index()
    {
        $pdf = new FPDF('P', 'mm','Letter');

        $pdf->AddPage();
        $pdf->Image(base_url('assets/img/logo.jpeg'),14,10,15);

        $pdf->SetFont('Arial','B',16);
	      $pdf->Cell(0,5,'JADWAL MATA PELAJARAN','0','1','C',false);
	      $pdf->SetFont('Arial','i',8);
	      $pdf->Ln(1);
	      $pdf->Cell(0,2,'PAUD ALISTIQOMAH','0','1','C',false);
	      $pdf->Ln(1);
	      $pdf->Cell(0,2,'Telp 0254(987)','0','1','C',false);
	      $pdf->Ln(8);
	      $pdf->Cell(265,0.6,'','0','1','C',true);
	      $pdf->Ln(5); 

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(40,6,'Hari',1,0,'C');
        $pdf->Cell(50,6,'Pelajaran',1,0,'C');
        $pdf->Cell(50,6,'Guru',1,0,'C');

        $pdf->Ln(6);
        $pdf->SetFont('Arial','',10);
        $mapel = $this->Model_nilai->join();
     
        foreach ($mapel as $data){
            $pdf->Cell(40,6,$data['hari'],1,0);
            $pdf->Cell(50,6,$data['mapel'],1,0);
            $pdf->Cell(50,6,$data['nama_guru'],1,0);
            $pdf->Ln(6);
        }
        $pdf->Output();
	}
}