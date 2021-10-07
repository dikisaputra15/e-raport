<?php

class Model_profil extends CI_Model
{
   public function getAllprofil()
   {
      $query = "SELECT * from tb_profil_Sekolah";
      return $this->db->query($query)->result_array();
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id_profil)
   {
      $this->db->delete('tb_profil_Sekolah', ['id_profil' => $id_profil]);
   }

  public function getprofilById($id_profil)
   {
      return $this->db->get_where('tb_profil_Sekolah', ['id_profil' => $id_profil])->row_array();
   }

	public function updateprofil()
   {
      $nama_sekolah = $this->input->post('nama_sekolah');
      $alamat = $this->input->post('alamat');
      $kepala_sekolah = $this->input->post('kepala_sekolah');
      $nip = $this->input->post('nip');

      $data = [
      	'nama_sekolah' => $nama_sekolah,
      	'alamat' => $alamat,
      	'kepala_sekolah' => $kepala_sekolah,
      	'nip' => $nip
      ];

      $this->db->update('tb_profil_sekolah', $data, ['id_profil' => $this->input->post('id_profil')]);
   }

}

?>