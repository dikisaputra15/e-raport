<?php

class Model_siswa extends CI_Model
{
   public function getAllsiswa()
   {
      $query = "SELECT * from tb_siswa";
      return $this->db->query($query)->result_array();
   }

   public function getAllsiswalap()
   {
      if($this->session->userdata('level')!='siswa') {
        $query = "SELECT * from tb_siswa";
        return $this->db->query($query)->result_array();
      }else{
        $nisn = $this->session->userdata('username');
        $query = "SELECT * from tb_siswa where nisn='$nisn'";
        return $this->db->query($query)->result_array();
      }
   }

   public function getAllsiswa1()
   {
      $query = "SELECT * from tb_siswa where kelas='1'";
      return $this->db->query($query)->result_array();
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id)
   {
      $this->db->delete('tb_siswa', ['nisn' => $id]);
   }

  public function getsiswaById($id)
   {
      return $this->db->get_where('tb_siswa', ['nisn' => $id])->row_array();
   }

	public function getsiswa1()
   {
        $query = "SELECT `tb_siswa`.*, `tb_kelas`.`kelas`
        FROM `tb_siswa` JOIN `tb_kelas`
        ON `tb_siswa`.`kelas` = `tb_kelas`.`id_kelas` where tb_kelas.kelas='VII'";
        return $this->db->query($query)->result_array();
   }

}

?>