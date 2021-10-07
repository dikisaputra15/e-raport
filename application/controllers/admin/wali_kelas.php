<?php

class wali_kelas extends CI_Controller
{
	 public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_walikelas');
      $this->load->model('Model_guru');
      $this->load->model('Model_kelas');
   }

   public function index()
   {
      $data = [
         'title' => 'Data wali kelas'
      ];
      $data['walikelas'] = $this->Model_walikelas->getAllwalikelas();
      $data['guru'] = $this->Model_guru->getAllguru();
      $data['kelas'] = $this->Model_kelas->getAllkelas();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/walikelas', $data);
      $this->load->view('admin_templates/footer');
   }

    public function tambahwakes()
   {
      $nip_guru = $this->input->post('nip_guru');
      $id_kelas = $this->input->post('id_kelas');
      
      $data = [
      			'nip_guru' => $nip_guru,
      			'id_kelas' => $id_kelas
      		];
     $this->Model_walikelas->insert($data, 'tb_wali_kelas');
     $this->session->set_flashdata('flash', 'Ditambah');
      redirect('admin/wali_kelas');
   }

    public function hapuswalikelas($id)
   {
      $this->Model_walikelas->delete($id);
      $this->session->set_flashdata('flash', 'DiHapus');
      redirect('admin/wali_kelas');
   }

     public function editwalikelas($id)
   {
      $data['title'] = 'Edit';
      $data['wakes'] = $this->Model_walikelas->getwakesById($id);
      $data['guru'] = $this->Model_guru->getAllguru();
      $data['kelas'] = $this->Model_kelas->getAllkelas();
      $this->form_validation->set_rules('nip_guru', 'nip_gur', 'required');
      $this->form_validation->set_rules('id_kelas', 'id_kelas', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('admin_templates/header', $data);
	      $this->load->view('admin_templates/navbar');
	      $this->load->view('admin_templates/sidebar');
	      $this->load->view('admin/edit_wakes', $data);
	      $this->load->view('admin_templates/footer');
      } else {
         $this->Model_walikelas->updatewakes();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('admin/wali_kelas');
      }
   }

}
