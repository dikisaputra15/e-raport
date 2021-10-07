<?php

class Model_kepsek extends CI_Model
{
   public function getAllkepsek()
   {
     $query = "SELECT * from tb_kepsek";
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
      $this->db->delete('tb_kepsek', ['nip' => $id]);
   }

  public function getkepsekById($nip)
   {
      return $this->db->get_where('tb_kepsek', ['nip' => $nip])->row_array();
   }

	public function updatekepsek()
   {
      $nip = $this->input->post('nip');
      $nama_kepsek = $this->input->post('nama_kepsek');
      $alamat = $this->input->post('alamat');
      $no_telp = $this->input->post('no_telp');

      $data = [
          'nip' => $nip,
          'nama_kepsek' => $nama_kepsek,
          'alamat' => $alamat,
          'no_telp' => $no_telp
      ];

      $this->db->update('tb_kepsek', $data, ['nip' => $this->input->post('nip')]);
   }

}

?>