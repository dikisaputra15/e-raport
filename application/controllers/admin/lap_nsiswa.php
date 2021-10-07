<?php

class lap_nsiswa extends CI_Controller
{

	 public function __construct()
   {
      parent::__construct();
      // $this->load->model('Model_siswa');
      // $this->load->model('Model_kelas');
      $this->load->model('Model_nraport');
      // $this->load->model('Model_keterampilan');
      // $this->load->model('Model_sikap');
   }

   public function index()
   {

      $data = [
         'title' => 'data nilai raport'
      ];
     	
		$data['raport'] = $this->Model_nraport->getraport();
		$data['siswa'] = $this->Model_nraport->getsiswabyid();
		$data['keterampilan'] = $this->Model_nraport->getraportterampil();
      $data['sikap'] = $this->Model_nraport->getraportsikap();
		$data['profil'] = $this->Model_nraport->getprofil();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-nilai-siswa.pdf";
		$this->pdf->load_view('admin/raport_nsiswa', $data);
   }

}
