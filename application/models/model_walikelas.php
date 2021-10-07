<?php

class Model_walikelas extends CI_Model
{
   public function getAllwalikelas()
   {
      $query = "SELECT `tb_wali_kelas`.*, `tb_guru`.`nama_guru`, tb_kelas.kelas
                  FROM `tb_wali_kelas` JOIN `tb_guru`
                  ON `tb_wali_kelas`.`nip_guru` = `tb_guru`.`nip_guru` join tb_kelas on tb_wali_kelas.id_kelas = tb_kelas.id_kelas
                ";
      return $this->db->query($query)->result_array();
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id)
   {
      $this->db->delete('tb_wali_kelas', ['id_wali_kelas' => $id]);
   }

  public function getwakesById($id)
   {
      return $this->db->get_where('tb_wali_kelas', ['id_wali_kelas' => $id])->row_array();
   }

	public function updatewakes()
   {
      $nip_guru = $this->input->post('nip_guru');
      $id_kelas = $this->input->post('id_kelas');

      $data = [
      	'nip_guru' => $nip_guru,
      	'id_kelas' => $id_kelas
      ];

      $this->db->update('tb_wali_kelas', $data, ['id_wali_kelas' => $this->input->post('id_wali_kelas')]);
   }

}

?>