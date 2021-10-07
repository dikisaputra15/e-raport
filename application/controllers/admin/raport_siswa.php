<?php

class raport_siswa extends CI_Controller
{

	 public function __construct()
   {
      parent::__construct();
      // $this->load->model('Model_siswa');
      // $this->load->model('Model_kelas');
      $this->load->model('Model_nilai');
      $this->load->model('Model_profil');
      // $this->load->model('Model_sikap');
   }

   public function index()
   {

   		$nisn = $this->input->post('nisn');

      $data = [
         'title' => 'data nilai raport'
      ];
     	
      $data['raport'] = $this->Model_nilai->getraport($nisn);
		$data['deskripsi'] = $this->Model_nilai->getdeskripsi($nisn);
      $data['nama1'] = $this->Model_nilai->getnama1($nisn);
      $data['nama2'] = $this->Model_nilai->getnama2($nisn);
      $data['profil'] = $this->Model_profil->getAllprofil();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-siswa.pdf";
		$this->pdf->load_view('admin/raport_siswa', $data);
   }

}
