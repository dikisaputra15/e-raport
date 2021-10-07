<?php

class Model_lap extends CI_Model
{
   public function getAllmurid()
   {
     $query = "SELECT * from murid";
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

  public function getmuridById($id_murid)
   {
      return $this->db->get_where('murid', ['id_murid' => $id_murid])->row_array();
   }

	public function updatemurid()
   {
      $nama_murid = $this->input->post('nama_murid');
      $kelas = $this->input->post('kelas');
      $nama_ayah = $this->input->post('nama_ayah');
      $nama_ibu = $this->input->post('nama_ibu');
      $tgl_masuk = $this->input->post('tgl_masuk');
      $alamat = $this->input->post('alamat');

      $data = [
      	'nama_murid' => $nama_murid,
      	'kelas' => $kelas,
      	'nama_ayah' => $nama_ayah,
      	'nama_ibu' => $nama_ibu,
      	'tgl_masuk' => $tgl_masuk,
      	'alamat' => $alamat
      ];

      $this->db->update('murid', $data, ['id_murid' => $this->input->post('id_murid')]);
   }

   public function join($id)
   {

      // $this->db->select('*');
      // $this->db->from('nilai');
      // $this->db->join('murid', 'murid.id_murid=nilai.id_murid');
      // $this->db->where('id_murid', $id);
      // $result = $this->db->get();
      // return $result->row_array();

    $query = "SELECT nilai.*, murid.nama_murid,murid.kelas,mapel.mapel
                  FROM nilai JOIN murid
                  ON nilai.id_murid=murid.id_murid join mapel on nilai.id_mapel=mapel.id_mapel where nilai.id_murid='$id'
                ";
    return $this->db->query($query)->result_array();

   }

    public function bymurid($id)
   {
    $query = "SELECT * from murid where id_murid='$id'";
    return $this->db->query($query);
   }

}

?>