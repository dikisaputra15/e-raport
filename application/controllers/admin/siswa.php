<?php

class siswa extends CI_Controller
{
	 public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_siswa');
      $this->load->model('Model_kelas');
   }

   public function index()
   {
      $data = [
         'title' => 'Data Siswa'
      ];
      $data['siswa'] = $this->Model_siswa->getAllsiswa();
      $data['kelas'] = $this->Model_kelas->getAllkelas();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/navbar');
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin/siswa', $data);
      $this->load->view('admin_templates/footer');
   }

    public function tambahsiswa()
   {
      $nisn = $this->input->post('nisn');
      $nama_siswa = $this->input->post('nama_siswa');
      $jk = $this->input->post('jk');
      $id_kelas = $this->input->post('id_kelas');
      $alamat = $this->input->post('alamat');
      $tempat_lahir = $this->input->post('tempat_lahir');
      $tgl_lahir = $this->input->post('tgl_lahir');
      $nama_ayah = $this->input->post('nama_ayah');
      $nama_ibu = $this->input->post('nama_ibu');
      $tempat_lahir_ayah = $this->input->post('tempat_lahir_ayah');
      $tempat_lahir_ibu = $this->input->post('tempat_lahir_ibu');
      $tgl_lahir_ayah = $this->input->post('tgl_lahir_ayah');
      $tgl_lahir_ibu = $this->input->post('tgl_lahir_ibu');
      $foto = $_FILES['foto']['name'];

       if ($foto) {
         $config['allowed_types'] = 'jpg|jpeg|png|gif|JPEG';
         $config['upload_path'] = './file/foto_siswa/';

         $this->load->library('upload', $config);

         if ($this->upload->do_upload('foto')) {
         } else {
            echo $this->upload->display_errors();
         }
      }

      $data = [
      			'nisn' => $nisn,
               'nama_siswa' => $nama_siswa,
      			'jk' => $jk,
      			'kelas' => $id_kelas,
      			'alamat' => $alamat,
      			'tempat_lahir' => $tempat_lahir,
               'tgl_lahir' => $tgl_lahir,
               'nama_ayah' => $nama_ayah,
               'nama_ibu' => $nama_ibu,
               'tempat_lahir_ayah' => $tempat_lahir_ayah,
               'tempat_lahir_ibu' => $tempat_lahir_ibu,
               'tgl_lahir_ayah' => $tgl_lahir_ayah,
               'tgl_lahir_ibu' => $tgl_lahir_ibu,
               'status' => 'aktif',
      			'photo' => $foto
      		];
     $this->Model_siswa->insert($data, 'tb_siswa');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('admin/siswa');
   }

    public function hapussiswa($id)
   {
      $this->Model_siswa->delete($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('admin/siswa');
   }

     public function editsiswa($id)
   {
      $data['title'] = 'Edit';
      $data['siswa'] = $this->Model_siswa->getsiswaById($id);
      $data['kelas'] = $this->Model_kelas->getAllkelas();
      $this->form_validation->set_rules('nisn', 'nisn', 'required');
      $this->form_validation->set_rules('nama_siswa', 'nama_siswa', 'required');
      $this->form_validation->set_rules('jk', 'jk', 'required');
      $this->form_validation->set_rules('kelas', 'kelas', 'required');
      $this->form_validation->set_rules('alamat', 'alamat', 'required');
      $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
      $this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required');
      $this->form_validation->set_rules('nama_ayah', 'nama_ayah', 'required');
      $this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'required');
      $this->form_validation->set_rules('tempat_lahir_ayah', 'tempat_lahir_ayah', 'required');
      $this->form_validation->set_rules('tempat_lahir_ibu', 'tempat_lahir_ibu', 'required');
      $this->form_validation->set_rules('tgl_lahir_ayah', 'tgl_lahir_ayah', 'required');
      $this->form_validation->set_rules('tgl_lahir_ibu', 'tgl_lahir_ibu', 'required');
      $this->form_validation->set_rules('status', 'status', 'required');
      if ($this->form_validation->run() == false) {
         $this->load->view('admin_templates/header', $data);
	      $this->load->view('admin_templates/navbar');
	      $this->load->view('admin_templates/sidebar');
	      $this->load->view('admin/edit_siswa', $data);
	      $this->load->view('admin_templates/footer');
      } else {
         $nisn = $this->input->post('nisn');
         $nama_siswa = $this->input->post('nama_siswa');
         $jk = $this->input->post('jk');
         $kelas = $this->input->post('kelas');
         $alamat = $this->input->post('alamat');
         $tempat_lahir = $this->input->post('tempat_lahir');
         $tgl_lahir =  $this->input->post('tgl_lahir');
         $nama_ayah =  $this->input->post('nama_ayah');
         $nama_ibu =  $this->input->post('nama_ibu');
         $tempat_lahir_ayah =  $this->input->post('tempat_lahir_ayah');
         $tempat_lahir_ibu =  $this->input->post('tempat_lahir_ibu');
         $tgl_lahir_ayah =  $this->input->post('tgl_lahir_ayah');
         $tgl_lahir_ibu =  $this->input->post('tgl_lahir_ibu');
         $status =  $this->input->post('status');

         $photo = $_FILES['photo']['name'];

         if ($photo) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['upload_path'] = './file/foto_siswa/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('photo')) {
               $old_image = $data['photo']['photo'];
               if ($old_image != 'barang.jpg') {
                  unlink(FCPATH . 'file/foto_siswa/' . $old_image);
               }
               $new_image = $this->upload->data('file_name');
               $this->db->set('photo', $new_image);
            } else {
               echo $this->upload->dispay_errors();
            }

         }
         $this->db->set([
            'nisn' => $nisn,
            'nama_siswa' => $nama_siswa,
            'jk' => $jk,
            'kelas' => $kelas,
            'alamat' => $alamat,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'nama_ayah' => $nama_ayah,
            'nama_ibu' => $nama_ibu,
            'tempat_lahir_ayah' => $tempat_lahir_ayah,
            'tempat_lahir_ibu' => $tempat_lahir_ibu,
            'tgl_lahir_ayah' => $tgl_lahir_ayah,
            'tgl_lahir_ibu' => $tgl_lahir_ibu,
            'status' => $status
         ]);
         $this->db->where('nisn', $id);
         $this->db->update('tb_siswa');
          $this->session->set_flashdata('flash', 'DiUbah');
         redirect('admin/siswa');
      }
   }

}
