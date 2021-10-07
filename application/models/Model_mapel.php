<?php

class Model_mapel extends CI_Model
{
   public function getAllmapel()
   {
     $query = "SELECT `tb_mapel`.*, `tb_kelas`.`kelas`, tb_guru.nip_guru, tb_guru.nama_guru
                  FROM `tb_mapel` JOIN `tb_kelas`
                  ON `tb_mapel`.`id_kelas` = `tb_kelas`.`id_kelas` join tb_guru on tb_mapel.nip_guru = tb_guru.nip_guru
                ";
      return $this->db->query($query)->result_array();
   }

	public function tampil_guru()
   {
      return $this->db->get('guru')->result_array();
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id)
   {
      $this->db->delete('tb_mapel', ['id_mapel' => $id]);
   }

  public function getmapelById($id_mapel)
   {
      return $this->db->get_where('tb_mapel', ['id_mapel' => $id_mapel])->row_array();
   }

   public function getidmapel()
   {
      $id = $this->session->userdata('username');    
      $query = "Select id_mapel from tb_mapel where nip_guru='$id'";
      return $this->db->query($query)->row_array();
   }

	public function updatemapel()
   {
      $nip_guru = $this->input->post('nip_guru');
      $id_kelas = $this->input->post('id_kelas');
      $mapel = $this->input->post('mapel');
      $tahun_ajaran = $this->input->post('tahun_ajaran');
      $kkm = $this->input->post('kkm');

      $data = [
      	'nip_guru' => $nip_guru,
      	'id_kelas' => $id_kelas,
      	'mapel' => $mapel,
        'tahun_ajaran' => $tahun_ajaran,
      	'kkm' => $kkm
      ];

      $this->db->update('tb_mapel', $data, ['id_mapel' => $this->input->post('id_mapel')]);
   }

}

?>