<?php

class kelas extends CI_Controller
{
	 public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_kelas');
      $this->load->model('Model_siswa');
   }

   public function index()
   {
      $data = [
         'title' => 'Data Kelas'
      ];
      $data['kelas'] = $this->Model_kelas->getAllkelas();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/kelas', $data);
      $this->load->view('admin_templates/footer');
   }

    public function tambahkelas()
   {
      $kelas = $this->input->post('kelas');
     
      $data = [
      			'kelas' => $kelas
      		];
     $this->Model_kelas->insert($data, 'tb_kelas');
     $this->session->set_flashdata('flash', 'Ditambah');
      redirect('admin/kelas');
   }

    public function hapuskelas($id_kelas)
   {
      $this->Model_kelas->delete($id_kelas);
      $this->session->set_flashdata('flash', 'DiHapus');
      redirect('admin/kelas');
   }

     public function editkelas($id_kelas)
   {
      $data['title'] = 'Edit';
      $data['kelas'] = $this->Model_kelas->getkelasById($id_kelas);
      $this->form_validation->set_rules('kelas', 'kelas', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('admin_templates/header', $data);
	      $this->load->view('admin_templates/navbar');
	      $this->load->view('admin_templates/sidebar');
	      $this->load->view('admin/edit_kelas', $data);
	      $this->load->view('admin_templates/footer');
      } else {
         $this->Model_kelas->updatekelas();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('admin/kelas');
      }
   }

   public function kelas1()
   {
      $data = [
         'title' => 'Data Nilai Siswa Kelas VII'
      ];
      $data['siswa'] = $this->Model_siswa->getsiswa1();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/kelas1', $data);
      $this->load->view('admin_templates/footer');
   }

}
