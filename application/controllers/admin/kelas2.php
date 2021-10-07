<?php

class kelas2 extends CI_Controller
{
	 public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_kelas');
      $this->load->model('Model_guru');
      $this->load->model('Model_mapel');
      $this->load->model('Model_siswa');
      $this->load->model('Model_nilai');
   }

   public function index()
   {
      $data = [
         'title' => 'Data Kelas VIII'
      ];
      $data['guru'] = $this->Model_guru->getAllguru();
      $data['mapel'] = $this->Model_mapel->getAllmapel();
      $data['mapgu'] = $this->Model_kelas->getAllmapgu();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/kelas2', $data);
      $this->load->view('admin_templates/footer');
   }

    public function tambahmapgu()
   {
      $id_mapel = $this->input->post('id_mapel');
      $nip_guru = $this->input->post('nip_guru');
     
      $data = [
               'mapel' => $id_mapel,
               'nip_guru' => $nip_guru
            ];
     $this->Model_kelas->insertmapgu($data, 'tb_mapgu');
     $this->session->set_flashdata('flash', 'Ditambah');
      redirect('admin/kelas1');
   }

   public function listnilai2()
   {
      $data = [
         'title' => 'Data Kelas VII'
      ];
      $data['siswa2'] = $this->Model_kelas->getAllsiswa2();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/listsiswa2', $data);
      $this->load->view('admin_templates/footer');
   }

    public function inputnilai($id)
   {
      $data = [
         'title' => 'nilai Kelas'
      ];
      $data['semester'] = $this->Model_kelas->getAllsemester();
      $data['mapel'] = $this->Model_mapel->getidmapel();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/inputnilai1', $data);
      $this->load->view('admin_templates/footer');
   }

    public function forminputnilai()
   {
      $id_mapel = $this->input->post('id_mapel');
      $nip_guru = $this->input->post('nip_guru');
      $nisn = $this->input->post('nisn');
      $semester = $this->input->post('semester');
      $angka_pengetahuan = $this->input->post('angka_pengetahuan');
      $predikat_pengetahuan = $this->input->post('predikat_pengetahuan');
      $angka_keterampilan = $this->input->post('angka_keterampilan');
      $predikat_keterampilan = $this->input->post('predikat_keterampilan');
      $nilai_dalam_mapel = $this->input->post('nilai_dalam_mapel');
      $data = [
               'nisn' => $nisn,
               'id_mapel' => $id_mapel,
               'nip_guru' => $nip_guru,
               'id_semester' => $semester,
               'angka_pengetahuan' => $angka_pengetahuan,
               'predikat_pengetahuan' => $predikat_pengetahuan,
               'angka_keterampilan' => $angka_keterampilan,
               'predikat_keterampilan' => $predikat_keterampilan,
               'nilai_dalam_mapel' => $nilai_dalam_mapel
            ];
     $this->Model_nilai->insertnilai1($data, 'tb_nilai');
     $this->session->set_flashdata('flash', 'Ditambah');
      redirect('admin/kelas1/listnilai');
   }

   
}
