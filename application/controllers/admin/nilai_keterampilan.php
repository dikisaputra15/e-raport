<?php

class nilai_keterampilan extends CI_Controller
{
	 public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_keterampilan');
      $this->load->model('Model_siswa');
      $this->load->model('Model_mapel');
      $this->load->model('Model_kelas');
   }

   public function index()
   {
      $data = [
         'title' => 'Nilai Keterampilan'
      ];
      $data['keterampilan'] = $this->Model_keterampilan->getAllketerampilan();
       $data['siswa'] = $this->Model_siswa->getAllsiswa();
        $data['mapel'] = $this->Model_mapel->getAllmapel();
        $data['kelas'] = $this->Model_kelas->getAllkelas();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/nilai_keterampilan', $data);
      $this->load->view('admin_templates/footer');
   }

    public function input_nilai()
   {
      $id_mapel = $this->input->post('id_mapel');
      $nisn = $this->input->post('nisn');
      $id_kelas = $this->input->post('id_kelas');
      $nilai = $this->input->post('nilai');
      $semester = $this->input->post('semester');
      $data = [
               'id_mapel' => $id_mapel,
               'nisn' => $nisn,
               'id_kelas' => $id_kelas,
               'nilai' => $nilai,
               'semester' => $semester
            ];
     $this->Model_keterampilan->insert($data, 'tb_keterampilan');
     $this->session->set_flashdata('flash', 'Ditambah');
      redirect('admin/nilai_keterampilan');
   }

    public function detail_keterampilan($id)
   {
      $data = [
         'title' => 'Detail Keterampilan'
      ];
      $data['keterampilan'] = $this->Model_keterampilan->getdetailbyid($id);
      $data['siswa'] = $this->Model_keterampilan->getsiswabyid($id);
      $data['mapel'] = $this->Model_mapel->getAllmapel();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/list_detail_keterampilan', $data);
      $this->load->view('admin_templates/footer');
   }

     public function edit_keterampilan($id)
   {
      $data['title'] = 'Edit';
      $data['keterampilan'] = $this->Model_keterampilan->getketerampilanById($id);
      $data['siswa'] = $this->Model_siswa->getAllsiswa();
      $data['kelas'] = $this->Model_kelas->getAllkelas();
      $data['mapel'] = $this->Model_mapel->getAllmapel();
      $this->form_validation->set_rules('id_mapel', 'id_mapel', 'required');
      $this->form_validation->set_rules('nisn', 'nisn', 'required');
      $this->form_validation->set_rules('id_kelas', 'id_kelas', 'required');
      $this->form_validation->set_rules('nilai', 'nilai', 'required');
      $this->form_validation->set_rules('semester', 'semester', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('admin_templates/header', $data);
         $this->load->view('admin_templates/navbar');
         $this->load->view('admin_templates/sidebar');
         $this->load->view('admin/edit_nk', $data);
         $this->load->view('admin_templates/footer');
      } else {
         $this->Model_keterampilan->updateketerampilan();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('admin/nilai_keterampilan');
      }
   }

}
