<?php

class Model_walimurid extends CI_Model
{
   public function getAllwalimurid()
   {
      $query = "SELECT * from tb_wali_murid";
      return $this->db->query($query)->result_array();
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id)
   {
      $this->db->delete('user', ['id_user' => $id]);
   }

  public function getuserById($id_user)
   {
      return $this->db->get_where('user', ['id_user' => $id_user])->row_array();
   }

	public function updateuser()
   {
      $nama_lengkap = $this->input->post('nama_lengkap');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $role_id = $this->input->post('role_id');

      $data = [
      	'nama_lengkap' => $nama_lengkap,
      	'username' => $username,
      	'password' => $password,
      	'role_id' => $role_id
      ];

      $this->db->update('user', $data, ['id_user' => $this->input->post('id_user')]);
   }

}

?>