<?php

class guru extends CI_Controller
{
	 public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_guru');
   }

   public function index()
   {
      $data = [
         'title' => 'Data Guru'
      ];
      $data['guru'] = $this->Model_guru->getAllguru();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/guru', $data);
      $this->load->view('admin_templates/footer');
   }

    public function tambahguru()
   {
      $nip = $this->input->post('nip');
      $nama_guru = $this->input->post('nama_guru');
      $alamat = $this->input->post('alamat');
      $tgl_masuk = $this->input->post('tgl_masuk');

      $data = [
      			'nip_guru' => $nip,
      			'nama_guru' => $nama_guru,
      			'alamat' => $alamat,
      			'tgl_masuk' => $tgl_masuk,
            'status' => 'aktif'
      		];
     $this->Model_guru->insert($data, 'tb_guru');
     $this->session->set_flashdata('flash', 'Ditambah');
      redirect('admin/guru');
   }

    public function hapusguru($nip_guru)
   {
      $this->Model_guru->delete($nip_guru);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('admin/guru');
   }

     public function editguru($nip_guru)
   {
      $data['title'] = 'Edit';
      $data['guru'] = $this->Model_guru->getguruById($nip_guru);
      $this->form_validation->set_rules('nip_guru', 'nip_guru', 'required');
      $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required');
      $this->form_validation->set_rules('alamat', 'Alamat', 'required');
      $this->form_validation->set_rules('tgl_masuk', 'tgl_masuk', 'required');
      if ($this->form_validation->run() == false) {
         $this->load->view('admin_templates/header', $data);
	      $this->load->view('admin_templates/navbar');
	      $this->load->view('admin_templates/sidebar');
	      $this->load->view('admin/edit_guru', $data);
	      $this->load->view('admin_templates/footer');
      } else {
         $this->Model_guru->updateguru();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('admin/guru');
      }
   }

}
