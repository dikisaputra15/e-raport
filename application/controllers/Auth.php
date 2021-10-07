<?php

class Auth extends CI_Controller
{
   public function index()
   {
      $data = [
         'title' => 'Login E-Raport'
      ];
      $this->load->view('auth_templates/header', $data);
      $this->load->view('auth/login', $data);
      $this->load->view('auth_templates/footer');
   }

   public function login()
   {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();
      if ($user) {
         if ($user['password'] == $password) {
            $data = [
               'username' => $user['username'],
               'level' => $user['level']
            ];
            $this->session->set_userdata($data);
             $this->session->set_flashdata('flash', 'Login Berhasil');
            redirect('dashboard');
         } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
            redirect('auth');
         }
      } else {
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login gagal, periksa kemali username/password</div>');
         redirect('auth');
      }
   }

   public function logout()
   {
      $this->session->unset_userdata('username');
      $this->session->unset_userdata('role_id');

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
      redirect('auth');
   }
}
