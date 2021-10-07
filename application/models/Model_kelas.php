<?php

class Model_kelas extends CI_Model
{
   public function getAllkelas()
   {
     $query = "SELECT * from tb_kelas";
      return $this->db->query($query)->result_array();
   }

    public function getAllsemester()
   {
     $query = "SELECT * from tb_semester";
      return $this->db->query($query)->result_array();
   }

    public function getAllsiswa1()
   {
     $query = "SELECT * from tb_siswa where kelas='1'";
      return $this->db->query($query)->result_array();
   }

    public function getAllsiswa2()
   {
     $query = "SELECT * from tb_siswa where kelas='2'";
      return $this->db->query($query)->result_array();
   }

   public function getAllsiswa3()
   {
     $query = "SELECT * from tb_siswa where kelas='3'";
      return $this->db->query($query)->result_array();
   }

    public function getAllmapgu()
   {

      $id = $this->session->userdata('username');

      $query = "SELECT `tb_mapgu`.*, `tb_mapel`.`id_mapel`, `tb_mapel`.`mapel`, `tb_guru`.`nip_guru`,`tb_guru`.`nama_guru`
        FROM `tb_mapgu` JOIN `tb_mapel`
        ON `tb_mapgu`.`mapel` = `tb_mapel`.`id_mapel` JOIN `tb_guru`
        ON `tb_mapgu`.`nip_guru` = `tb_guru`.`nip_guru` where tb_mapgu.nip_guru='$id'";
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
   public function insertmapgu($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id_kelas)
   {
      $this->db->delete('tb_kelas', ['id_kelas' => $id_kelas]);
   }

  public function getkelasById($id_kelas)
   {
      return $this->db->get_where('tb_kelas', ['id_kelas' => $id_kelas])->row_array();
   }

	public function updatekelas()
   {
      $kelas = $this->input->post('kelas');

      $data = [
      	'kelas' => $kelas
      ];

      $this->db->update('tb_kelas', $data, ['id_kelas' => $this->input->post('id_kelas')]);
   }

}

?>