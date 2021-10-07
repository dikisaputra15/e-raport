<?php

class Model_guru extends CI_Model
{
   public function getAllguru()
   {
      $query = "SELECT * from tb_guru";
      return $this->db->query($query)->result_array();
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($nip_guru)
   {
      $this->db->delete('tb_guru', ['nip_guru' => $nip_guru]);
   }

  public function getguruById($nip_guru)
   {
      return $this->db->get_where('tb_guru', ['nip_guru' => $nip_guru])->row_array();
   }

	public function updateguru()
   {
      $nip = $this->input->post('nip_guru');
      $nama_guru = $this->input->post('nama_guru');
      $alamat = $this->input->post('alamat');
      $status = $this->input->post('status');
      $tgl_masuk = $this->input->post('tgl_masuk');

      $data = [
      	'nip_guru' => $nip,
      	'nama_guru' => $nama_guru,
      	'alamat' => $alamat,
      	'tgl_masuk' => $tgl_masuk,
         'status' => $status
      ];

      $this->db->update('tb_guru', $data, ['nip_guru' => $this->input->post('nip_guru')]);
   }

}

?>