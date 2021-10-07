<?php

class nilai_pengetahuan extends CI_Controller
{
	 public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_pengetahuan');
      $this->load->model('Model_siswa');
      $this->load->model('Model_mapel');
      $this->load->model('Model_kelas');
   }

   public function index()
   {
      $data = [
         'title' => 'Nilai Pengetahuan'
      ];
      $data['pengetahuan'] = $this->Model_pengetahuan->getAllpengetahuan();
      $data['siswa'] = $this->Model_siswa->getAllsiswa();
      $data['mapel'] = $this->Model_mapel->getAllmapel();
      $data['kelas'] = $this->Model_kelas->getAllkelas();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/nilai_pengetahuan', $data);
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
     $this->Model_pengetahuan->insert($data, 'tb_nilai_pengetahuan');
     $this->session->set_flashdata('flash', 'Ditambah');
      redirect('admin/nilai_pengetahuan');
   }

    public function detail_pengetahuan($id)
   {
      $data = [
         'title' => 'Detail Pengetahuan'
      ];
      $data['pengetahuan'] = $this->Model_pengetahuan->getdetailbyid($id);
      $data['siswa'] = $this->Model_pengetahuan->getsiswabyid($id);
      $data['mapel'] = $this->Model_mapel->getAllmapel();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/list_detail_pengetahuan', $data);
      $this->load->view('admin_templates/footer');
   }

     public function edit_pengetahuan($id)
   {
      $data['title'] = 'Edit';
      $data['pengetahuan'] = $this->Model_pengetahuan->getpengetahuanById($id);
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
	      $this->load->view('admin/edit_np', $data);
	      $this->load->view('admin_templates/footer');
      } else {
         $this->Model_pengetahuan->updatepengetahuan();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('admin/nilai_pengetahuan');
      }
   }

}
