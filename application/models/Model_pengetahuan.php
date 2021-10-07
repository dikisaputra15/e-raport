<?php

class Model_pengetahuan extends CI_Model
{
   public function getAllpengetahuan()
   {
      $query = "SELECT * from tb_siswa";
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

  public function getpengetahuanById($id)
   {
      return $this->db->get_where('tb_nilai_pengetahuan', ['id_nilai' => $id])->row_array();
   }

    public function getdetailbyid($id)
   {
         $query = "SELECT `tb_nilai_pengetahuan`.*, `tb_mapel`.`mapel`
        FROM `tb_nilai_pengetahuan` JOIN `tb_mapel`
        ON `tb_nilai_pengetahuan`.`id_mapel` = `tb_mapel`.`id_mapel` where tb_nilai_pengetahuan.nisn='$id'";
        return $this->db->query($query)->result_array();
   }

   public function getsiswabyid($id)
   {
         $query = "SELECT `tb_siswa`.*, `tb_kelas`.`kelas`
        FROM `tb_siswa` JOIN `tb_kelas`
        ON `tb_siswa`.`kelas` = `tb_kelas`.`id_kelas` where tb_siswa.nisn='$id'";
        return $this->db->query($query)->row_array();
   }

	public function updatepengetahuan()
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

      $this->db->update('tb_nilai_pengetahuan', $data, ['id_nilai' => $this->input->post('id_nilai')]);
   }

}

?>