<?php

class home extends CI_Controller
{

   public function index()
   {
      $data = [
         'title' => 'Home'
      ];
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/Home');
      $this->load->view('admin_templates/footer');
   }

}
