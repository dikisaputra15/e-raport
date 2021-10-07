<?php

class profil extends CI_Controller
{
	 public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_profil');
   }

   public function index()
   {
      $data = [
         'title' => 'Data Profil Sekolah'
      ];
      $data['profil'] = $this->Model_profil->getAllprofil();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/profil', $data);
      $this->load->view('admin_templates/footer');
   }

    public function tambahprofil()
   {
      $nama_sekolah = $this->input->post('nama_sekolah');
      $alamat = $this->input->post('alamat');
      $kepsek = $this->input->post('kepsek');
      $nip = $this->input->post('nip');
      $data = [
      			'nama_sekolah' => $nama_sekolah,
      			'alamat' => $alamat,
      			'kepala_sekolah' => $kepsek,
      			'nip' => $nip
      		];
     $this->Model_profil->insert($data, 'tb_profil_Sekolah');
     $this->session->set_flashdata('flash', 'Ditambah');
      redirect('admin/profil');
   }

    public function hapusprofil($id_profil)
   {
      $this->Model_profil->delete($id_profil);
      $this->session->set_flashdata('flash', 'DiHapus');
      redirect('admin/profil');
   }

     public function editprofil($id_profil)
   {
      $data['title'] = 'Edit';
      $data['profil'] = $this->Model_profil->getprofilById($id_profil);
      $this->form_validation->set_rules('nama_sekolah', 'nama_sekolah', 'required');
      $this->form_validation->set_rules('alamat', 'alamat', 'required');
      $this->form_validation->set_rules('kepala_sekolah', 'kepala_sekolah', 'required');
      $this->form_validation->set_rules('nip', 'nip', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('admin_templates/header', $data);
	      $this->load->view('admin_templates/navbar');
	      $this->load->view('admin_templates/sidebar');
	      $this->load->view('admin/edit_profil', $data);
	      $this->load->view('admin_templates/footer');
      } else {
         $this->Model_profil->updateprofil();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('admin/profil');
      }
   }

}
