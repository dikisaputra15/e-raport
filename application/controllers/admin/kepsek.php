<?php

class kepsek extends CI_Controller
{
	 public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_kepsek');
   }

   public function index()
   {
      $data = [
         'title' => 'Data Kepala Sekolah'
      ];
      $data['kepsek'] = $this->Model_kepsek->getAllkepsek();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/kepsek', $data);
      $this->load->view('admin_templates/footer');
   }

    public function tambahkepsek()
   {
      $nip = $this->input->post('nip');
      $kepsek = $this->input->post('kepsek');
      $alamat = $this->input->post('alamat');
      $no_telp = $this->input->post('no_telp');
      $data = [
      			'nip' => $nip,
      			'nama_kepsek' => $kepsek,
      			'alamat' => $alamat,
      			'no_telp' => $no_telp
      		];
     $this->Model_kepsek->insert($data, 'tb_kepsek');
     $this->session->set_flashdata('flash', 'Ditambah');
      redirect('admin/kepsek');
   }

    public function hapuskepsek($id)
   {
      $this->Model_kepsek->delete($id);
      $this->session->set_flashdata('flash', 'DiHapus');
      redirect('admin/kepsek');
   }

     public function editkepsek($nip)
   {
      $data['title'] = 'Edit';
      $data['kepsek'] = $this->Model_kepsek->getkepsekById($nip);
      $this->form_validation->set_rules('nip', 'nip', 'required');
      $this->form_validation->set_rules('nama_kepsek', 'nama_kepsek', 'required');
      $this->form_validation->set_rules('alamat', 'alamat', 'required');
      $this->form_validation->set_rules('no_telp', 'no_telp', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('admin_templates/header', $data);
	      $this->load->view('admin_templates/navbar');
	      $this->load->view('admin_templates/sidebar');
	      $this->load->view('admin/edit_kepsek', $data);
	      $this->load->view('admin_templates/footer');
      } else {
         $this->Model_kepsek->updatekepsek();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('admin/kepsek');
      }
   }

}
