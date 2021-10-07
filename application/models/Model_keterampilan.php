<?php

class Model_keterampilan extends CI_Model
{
   public function getAllketerampilan()
   {
      $query = "SELECT * from tb_siswa where kelas='VIII'";
      return $this->db->query($query)->result_array();
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id)
   {
      $this->db->delete('murid', ['id_murid' => $id]);
   }

    public function getketerampilanById($id)
   {
      return $this->db->get_where('tb_keterampilan', ['id_keterampilan' => $id])->row_array();
   }

   public function getdetailbyid($id)
   {
         $query = "SELECT `tb_keterampilan`.*, `tb_mapel`.`mapel`
        FROM `tb_keterampilan` JOIN `tb_mapel`
        ON `tb_keterampilan`.`id_mapel` = `tb_mapel`.`id_mapel` where tb_keterampilan.nisn='$id'";
        return $this->db->query($query)->result_array();
   }

  public function getsiswabyid($id)
   {
         $query = "SELECT `tb_siswa`.*, `tb_kelas`.`kelas`
        FROM `tb_siswa` JOIN `tb_kelas`
        ON `tb_siswa`.`kelas` = `tb_kelas`.`id_kelas` where tb_siswa.nisn='$id'";
        return $this->db->query($query)->row_array();
   }


	public function updateketerampilan()
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

      $this->db->update('tb_keterampilan', $data, ['id_keterampilan' => $this->input->post('id_keterampilan')]);
   }

}

?>