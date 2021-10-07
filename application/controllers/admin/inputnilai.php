<?php

class inputnilai extends CI_Controller
{
	 public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_nilai');
   }

   public function index()
   {
      $data = [
         'title' => 'Data Nilai Siswa'
      ];
      $data['nilai'] = $this->Model_nilai->getAllnilai();
      $data['guru'] = $this->Model_nilai->tampil_guru();
      $data['murid'] = $this->Model_nilai->tampil_murid();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/inputnilai', $data);
      $this->load->view('admin_templates/footer');
   }

   public function formnilai($id_mapel)
   {
      $data['title'] = 'input nilai';
      $data['nilai'] = $this->Model_nilai->getAllnilai();
      $data['mapel'] = $this->Model_nilai->getmapelById($id_mapel);
      $data['guru'] = $this->Model_nilai->tampil_guru();
      $data['murid'] = $this->Model_nilai->tampil_murid();
      $this->form_validation->set_rules('nilai_tugas', 'nilai', 'required');
      $this->form_validation->set_rules('nilai_quiz', 'nilai', 'required');
      $this->form_validation->set_rules('tahun', 'nilai', 'required');
      $this->form_validation->set_rules('nilai_uas', 'nilai', 'required');
      $this->form_validation->set_rules('id_guru', 'guru', 'required');
      $this->form_validation->set_rules('id_nilai', 'nilai', 'required');
      $this->form_validation->set_rules('id_murid', 'murid', 'required');
      if ($this->form_validation->run() == false) {
         $this->load->view('admin_templates/header', $data);
	      $this->load->view('admin_templates/navbar');
	      $this->load->view('admin_templates/sidebar');
	      $this->load->view('admin/form_input', $data);
	      $this->load->view('admin_templates/footer');
      } else {
         $this->Model_nilai->insert();
          $this->session->set_flashdata('flash', 'DiUbah');
         redirect('admin/inputnilai');
      }
   }

    public function tambahnilai()
   {
      $id_guru = $this->input->post('id_guru');
      $id_mapel = $this->input->post('id_mapel');
      $id_murid = $this->input->post('id_murid');
      $tahun = $this->input->post('tahun');
      $nilaitugas = $this->input->post('nilaitugas');
      $nilaiquiz = $this->input->post('nilaiquiz');
      $nilaiuts = $this->input->post('nilaiuts');
      $nilaiuas = $this->input->post('nilaiuas');
      $rata_rata = ($nilaitugas+$nilaiquiz+$nilaiuts+$nilaiuas)/4;
      if($rata_rata >= 80){
         $grade = "A";
      }elseif(($rata_rata<80) && ($rata_rata>=60)){
         $grade = "B";
      }else{
         $grade = "C";
      }
      $data = [
               'id_guru' => $id_guru,
               'id_mapel' => $id_mapel,
               'id_murid' => $id_murid,
               'nilai_tugas' => $nilaitugas,
               'nilai_quiz' => $nilaiquiz,
               'nilai_uts' => $nilaiuts,
               'nilai_uas' => $nilaiuas,
               'rata_rata' => $rata_rata,
               'grade' => $grade,
               'tahun' => $tahun
            ];
     $this->Model_nilai->insert($data, 'nilai');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('admin/lapnilai');
   }


     public function editnilai($id_guru)
   {
      $data['title'] = 'Edit';
      $data['guru'] = $this->Model_guru->getguruById($id_guru);
      $this->form_validation->set_rules('nip', 'nip', 'required');
      $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required');
      $this->form_validation->set_rules('alamat', 'Alamat', 'required');
      $this->form_validation->set_rules('tlp', 'tlp', 'required');
      $this->form_validation->set_rules('tgl_masuk', 'Tgl Masuk', 'required');
      if ($this->form_validation->run() == false) {
         $this->load->view('admin_templates/header', $data);
	      $this->load->view('admin_templates/navbar');
	      $this->load->view('admin_templates/sidebar');
	      $this->load->view('admin/edit_guru', $data);
	      $this->load->view('admin_templates/footer');
      } else {
         $this->Model_guru->updateguru();
          $this->session->set_flashdata('flash', 'Ditambah');
         redirect('admin/guru');
      }
   }

}
