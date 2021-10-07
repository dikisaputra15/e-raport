<?php

class lapnilai extends CI_Controller
{
	 public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_lap');
      $this->load->library('pdf');
   }

   public function index()
   {
      $data = [
         'title' => 'Data Nilai Murid'
      ];
      $data['murid'] = $this->Model_lap->getAllmurid();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/list_lap', $data);
      $this->load->view('admin_templates/footer');
   }

    public function detail($id)
   {
      $pdf = new FPDF('L','mm','A5');
      $pdf->AddPage();
      $pdf->Image(base_url('assets/img/logo.jpeg'),14,10,15);

      $pdf->SetFont('Arial','B',16);
      $pdf->Cell(0,5,'DAFTAR NILAI MURID','0','1','C',false);
      $pdf->SetFont('Arial','i',8);
      $pdf->Ln(1);
      $pdf->Cell(0,2,'PAUD ALISTIQOMAH','0','1','C',false);
      $pdf->Ln(1);
      $pdf->Cell(0,2,'Telp 0254(987)','0','1','C',false);
      $pdf->Ln(8);
      $pdf->Cell(265,0.6,'','0','1','C',true);
      $pdf->Ln(5); 

      $murid = $this->Model_lap->bymurid($id)->row_array();

      $pdf->SetFont('Arial','B',12);
      $pdf->Cell(45,5,'Nama Murid :'.$murid['nama_murid'],0,0,'L'); 
      $pdf->Cell(120,5,'Kelas :'.$murid['kelas'],0,0,'R'); 
      $pdf->Ln(10);
      $pdf->SetFont('Arial','B',8);
      $pdf->Cell(40,6,'Mata Pelajaran',1,0,'c');
      $pdf->Cell(20,6,'Nilai Tugas',1,0,'c');
      $pdf->Cell(25,6,'Nilai Harian',1,0,'c');
      $pdf->Cell(20,6,'Nilai UTS',1,0,'c'); 
      $pdf->Cell(20,6,'Nilai UAS',1,0,'c'); 
      $pdf->Cell(20,6,'Rata - Rata',1,0,'c');
      $pdf->Cell(20,6,'Grade',1,0,'c');

       $pdf->Ln(6);
        $pdf->SetFont('Arial','',10);
        $nilai = $this->Model_lap->join($id);
     
        foreach ($nilai as $data){
            $pdf->Cell(40,6,$data['mapel'],1,0);
            $pdf->Cell(20,6,$data['nilai_tugas'],1,0);
            $pdf->Cell(25,6,$data['nilai_quiz'],1,0);
            $pdf->Cell(20,6,$data['nilai_uts'],1,0);
            $pdf->Cell(20,6,$data['nilai_uas'],1,0);
            $pdf->Cell(20,6,$data['rata_rata'],1,0);
            $pdf->Cell(20,6,$data['grade'],1,0);
            $pdf->Ln(6);
        }

      $pdf->Output(); 
   }

   

}
