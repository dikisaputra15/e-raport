<?php

class kelas1 extends CI_Controller
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
         'title' => 'Data Kelas VII'
      ];
      $data['guru'] = $this->Model_guru->getAllguru();
      $data['mapel'] = $this->Model_mapel->getAllmapel();
      $data['mapgu'] = $this->Model_kelas->getAllmapgu();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/kelas1', $data);
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

   public function listnilai()
   {
      $data = [
         'title' => 'Data Kelas VII'
      ];
      $data['siswa1'] = $this->Model_kelas->getAllsiswa1();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/listsiswa1', $data);
      $this->load->view('admin_templates/footer');
   }

    public function inputnilai($id)
   {
      $data = [
         'title' => 'nilai Kelas VII'
      ];
      $data['semester'] = $this->Model_kelas->getAllsemester();
      $data['mapel'] = $this->Model_mapel->getidmapel();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/inputnilai1', $data);
      $this->load->view('admin_templates/footer');
   }

    public function inputdeskripsi($id)
   {
      $data = [
         'title' => 'nilai Kelas VII'
      ];
      $data['semester'] = $this->Model_kelas->getAllsemester();
      $data['mapel'] = $this->Model_mapel->getidmapel();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/inputdeskripsi1', $data);
      $this->load->view('admin_templates/footer');
   }

    public function forminputnilai()
   {
      $id_mapel = $this->input->post('id_mapel');
      $nip_guru = $this->input->post('nip_guru');
      $nisn = $this->input->post('nisn');
      $semester = $this->input->post('semester');
      $nilai_tugas = $this->input->post('nilai_tugas');
      $nilai_ulangan_harian = $this->input->post('nilai_ulangan_harian');
      $nilai_uts = $this->input->post('nilai_uts');
      $nilai_uas = $this->input->post('nilai_uas');
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
               'nilai_tugas' => $nilai_tugas,
               'nilai_ulangan_harian' => $nilai_ulangan_harian,
               'nilai_uts' => $nilai_uts,
               'nilai_uas' => $nilai_uas,
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

   public function forminputdeskripsi()
   {
      $id_mapel = $this->input->post('id_mapel');
      $nip_guru = $this->input->post('nip_guru');
      $nisn = $this->input->post('nisn');
      $semester = $this->input->post('semester');
      $c_pengetahuan = $this->input->post('c_pengetahuan');
      $c_praktek = $this->input->post('c_praktek');
      $c_spiritual = $this->input->post('c_spiritual');
      $data = [
               'nisn' => $nisn,
               'id_mapel' => $id_mapel,
               'nip_guru' => $nip_guru,
               'id_semester' => $semester,
               'c_pengetahuan' => $c_pengetahuan,
               'c_praktek' => $c_praktek,
               'c_sikap' => $c_spiritual
            ];
     $this->Model_nilai->insertdeskripsi1($data, 'tb_deskripsi');
     $this->session->set_flashdata('flash', 'Ditambah');
      redirect('admin/kelas1/listnilai');
   }
   
}
