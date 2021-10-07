<?php

class mapel extends CI_Controller
{
	 public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_mapel');
      $this->load->model('Model_guru');
      $this->load->model('Model_kelas');
   }

   public function index()
   {
      $data = [
         'title' => 'Data Mata Pelajaran'
      ];
      $data['mapel'] = $this->Model_mapel->getAllmapel();
      $data['guru'] = $this->Model_guru->getAllguru();
      $data['kelas'] = $this->Model_kelas->getAllkelas();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/mapel', $data);
      $this->load->view('admin_templates/footer');
   }

    public function tambahmapel()
   {
      $nip_guru = $this->input->post('nip_guru');
      $id_kelas = $this->input->post('id_kelas');
      $mapel = $this->input->post('mapel');
      $tahun = $this->input->post('tahun');
      $kkm = $this->input->post('kkm');
     
      $data = [
      			'nip_guru' => $nip_guru,
      			'id_kelas' => $id_kelas,
      			'mapel' => $mapel,
            'tahun_ajaran' => $tahun,
      			'kkm' => $kkm
      		];
     $this->Model_mapel->insert($data, 'tb_mapel');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('admin/mapel');
   }

    public function hapusmapel($id)
   {
      $this->Model_mapel->delete($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('admin/mapel');
   }

     public function editmapel($id_mapel)
   {
      $data['title'] = 'Edit';
      $data['mapel'] = $this->Model_mapel->getmapelById($id_mapel);
      $data['guru'] = $this->Model_guru->getAllguru();
      $data['kelas'] = $this->Model_kelas->getAllkelas();
      $this->form_validation->set_rules('nip_guru', 'nip_guru', 'required');
      $this->form_validation->set_rules('id_kelas', 'id_kelas', 'required');
      $this->form_validation->set_rules('mapel', 'mapel', 'required');
      $this->form_validation->set_rules('tahun_ajaran', 'tahun_ajaran', 'required');
      $this->form_validation->set_rules('kkm', 'kkm', 'required');
      if ($this->form_validation->run() == false) {
         $this->load->view('admin_templates/header', $data);
	      $this->load->view('admin_templates/navbar');
	      $this->load->view('admin_templates/sidebar');
	      $this->load->view('admin/edit_mapel', $data);
	      $this->load->view('admin_templates/footer');
      } else {
         $this->Model_mapel->updatemapel();
          $this->session->set_flashdata('flash', 'DiUbah');
         redirect('admin/mapel');
      }
   }

}
