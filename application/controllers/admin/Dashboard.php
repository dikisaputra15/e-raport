<?php

class Dashboard extends CI_Controller
{
   public function index()
   {
      $data = [
         'title' => 'Dashboard'
      ];
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/dashboard', $data);
      $this->load->view('admin_templates/footer');
   }
}
