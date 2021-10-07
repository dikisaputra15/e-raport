<?php

class Model_sikap extends CI_Model
{
   public function getAllsikap()
   {
      $query = "SELECT * from tb_siswa where kelas='IX'";
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

   public function getsikapById($id)
   {
      return $this->db->get_where('tb_nilai_sikap', ['id_nilai_sikap' => $id])->row_array();
   }

  public function getdetailbyid($id)
   {
         $query = "SELECT * from tb_nilai_sikap where tb_nilai_sikap.nisn='$id'";
        return $this->db->query($query)->result_array();
   }

   public function getsiswabyid($id)
   {
         $query = "SELECT `tb_siswa`.*, `tb_kelas`.`kelas`
        FROM `tb_siswa` JOIN `tb_kelas`
        ON `tb_siswa`.`kelas` = `tb_kelas`.`id_kelas` where tb_siswa.nisn='$id'";
        return $this->db->query($query)->row_array();
   }

	public function updatesikap()
   {
      $nisn = $this->input->post('nisn');
      $id_kelas = $this->input->post('id_kelas');
      $nilai_spiritual = $this->input->post('nilai_spiritual');
      $nilai_sosial = $this->input->post('nilai_sosial');
      $semester = $this->input->post('semester');

      $data = [
         'nisn' => $nisn,
         'id_kelas' => $id_kelas,
         'nilai_spiritual' => $nilai_spiritual,
         'nilai_sosial' => $nilai_sosial,
         'semester' => $semester
      ];

      $this->db->update('tb_nilai_sikap', $data, ['id_nilai_sikap' => $this->input->post('id_nilai_sikap')]);
   }

}

?>