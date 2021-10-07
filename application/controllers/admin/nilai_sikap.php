<?php

class nilai_sikap extends CI_Controller
{
	 public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_sikap');
      $this->load->model('Model_siswa');
      $this->load->model('Model_kelas');
      
   }

   public function index()
   {
      $data = [
         'title' => 'Nilai Sikap'
      ];
      $data['sikap'] = $this->Model_sikap->getAllsikap();
       $data['siswa'] = $this->Model_siswa->getAllsiswa();
       $data['kelas'] = $this->Model_kelas->getAllkelas();
       
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/nilai_sikap', $data);
      $this->load->view('admin_templates/footer');
   }

    public function input_nilai()
   {
      $nisn = $this->input->post('nisn');
      $id_kelas = $this->input->post('id_kelas');
      $nilai_spiritual = $this->input->post('nilai_spiritual');
      $nilai_sosial = $this->input->post('nilai_sosial');
      $semester = $this->input->post('semester');
      $data = [
               'nisn' => $nisn,
               'id_kelas' => $id_kelas,
               'nilai_spiritual' => $nilai_spiritual,
               'nilai_sosial' => $nilai_sosial,
               'semester' => $semester
            ];
     $this->Model_sikap->insert($data, 'tb_nilai_sikap');
     $this->session->set_flashdata('flash', 'Ditambah');
      redirect('admin/nilai_sikap');
   }

    public function detail_sikap($id)
   {
      $data = [
         'title' => 'Detail Sikap'
      ];
      $data['sikap'] = $this->Model_sikap->getdetailbyid($id);
      $data['siswa'] = $this->Model_sikap->getsiswabyid($id);
      // $data['mapel'] = $this->Model_mapel->getAllmapel();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/list_detail_sikap', $data);
      $this->load->view('admin_templates/footer');
   }

      public function edit_sikap($id)
   {
      $data['title'] = 'Edit';
      $data['sikap'] = $this->Model_sikap->getsikapById($id);
      $data['siswa'] = $this->Model_siswa->getAllsiswa();
      $data['kelas'] = $this->Model_kelas->getAllkelas();
    
      $this->form_validation->set_rules('nisn', 'nisn', 'required');
      $this->form_validation->set_rules('id_kelas', 'id_kelas', 'required');
      $this->form_validation->set_rules('nilai_spiritual', 'nilai_spiritual', 'required');
      $this->form_validation->set_rules('nilai_sosial', 'nilai_sosial', 'required');
      $this->form_validation->set_rules('semester', 'semester', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('admin_templates/header', $data);
         $this->load->view('admin_templates/navbar');
         $this->load->view('admin_templates/sidebar');
         $this->load->view('admin/edit_ns', $data);
         $this->load->view('admin_templates/footer');
      } else {
         $this->Model_sikap->updatesikap();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('admin/nilai_sikap');
      }
   }

}
