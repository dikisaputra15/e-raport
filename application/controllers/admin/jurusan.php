<?php

class jurusan extends CI_Controller
{
	 public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_jurusan');
   }

   public function index()
   {
      $data = [
         'title' => 'Data Jurusan'
      ];
      $data['jurusan'] = $this->Model_jurusan->getAlljurusan();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/jurusan', $data);
      $this->load->view('admin_templates/footer');
   }

    public function tambahuser()
   {
      $nama_lengkap = $this->input->post('nama_lengkap');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $level = $this->input->post('level');
      $data = [
      			'nama_lengkap' => $nama_lengkap,
      			'username' => $username,
      			'password' => $password,
      			'role_id' => $level
      		];
     $this->Model_user->insert($data, 'user');
     $this->session->set_flashdata('flash', 'Ditambah');
      redirect('admin/user');
   }

    public function hapususer($id)
   {
      $this->Model_user->delete($id);
      $this->session->set_flashdata('flash', 'DiHapus');
      redirect('admin/user');
   }

     public function edituser($id_user)
   {
      $data['title'] = 'Edit';
      $data['user'] = $this->Model_user->getuserById($id_user);
      $this->form_validation->set_rules('nama_lengkap', 'nama lengkap', 'required');
      $this->form_validation->set_rules('username', 'username', 'required');
      $this->form_validation->set_rules('password', 'password', 'required');
      $this->form_validation->set_rules('role_id', 'role id', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('admin_templates/header', $data);
	      $this->load->view('admin_templates/navbar');
	      $this->load->view('admin_templates/sidebar');
	      $this->load->view('admin/edit_user', $data);
	      $this->load->view('admin_templates/footer');
      } else {
         $this->Model_user->updateuser();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('admin/user');
      }
   }

}
