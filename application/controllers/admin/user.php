<?php

class user extends CI_Controller
{
	 public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_user');
   }

   public function index()
   {
      $data = [
         'title' => 'Data User'
      ];
      $data['user'] = $this->Model_user->getAlluser();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/user', $data);
      $this->load->view('admin_templates/footer');
   }

    public function tambahuser()
   {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $nama = $this->input->post('nama');
      $level = $this->input->post('level');
      $data = [
      			'username' => $username,
      			'password' => $password,
               'nama' => $nama,
      			'level' => $level
      		];
     $this->Model_user->insert($data, 'tb_user');
     $this->session->set_flashdata('flash', 'Ditambah');
      redirect('admin/user');
   }

    public function hapususer($id_user)
   {
      $this->Model_user->delete($id_user);
      $this->session->set_flashdata('flash', 'DiHapus');
      redirect('admin/user');
   }

     public function edituser($id_user)
   {
      $data['title'] = 'Edit';
      $data['user'] = $this->Model_user->getuserById($id_user);
      $this->form_validation->set_rules('username', 'username', 'required');
      $this->form_validation->set_rules('password', 'password', 'required');
      $this->form_validation->set_rules('nama', 'nama', 'required');
      $this->form_validation->set_rules('level', 'level', 'required');

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
