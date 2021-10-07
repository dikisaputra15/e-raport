<?php

class Model_nilai extends CI_Model
{
   public function getAllnilai()
   {
     $query = "SELECT * from mapel";
      return $this->db->query($query)->result_array();
   }

   public function getraport($nisn)
   {
     $query = "SELECT `tb_nilai`.*, `tb_siswa`.`nisn`,tb_siswa.nama_siswa,tb_siswa.kelas, tb_mapel.id_mapel,tb_mapel.mapel,tb_mapel.tahun_ajaran, tb_guru.nip_guru,tb_guru.nama_guru, tb_semester.id_semester,tb_semester.semester
        FROM `tb_nilai` JOIN `tb_siswa`
        ON `tb_nilai`.`nisn` = `tb_siswa`.`nisn` join tb_mapel on tb_nilai.id_mapel = tb_mapel.id_mapel join tb_guru on tb_nilai.nip_guru = tb_guru.nip_guru join tb_semester on tb_nilai.id_semester = tb_semester.id_semester where tb_nilai.nisn='$nisn' ";
        return $this->db->query($query)->result_array();
   }

    public function getnama1($nisn)
   {
     $query = "SELECT `tb_nilai`.*, `tb_siswa`.`nisn`,tb_siswa.nama_siswa,tb_siswa.kelas, tb_mapel.id_mapel,tb_mapel.mapel,tb_mapel.tahun_ajaran, tb_guru.nip_guru,tb_guru.nama_guru, tb_semester.id_semester,tb_semester.semester
        FROM `tb_nilai` JOIN `tb_siswa`
        ON `tb_nilai`.`nisn` = `tb_siswa`.`nisn` join tb_mapel on tb_nilai.id_mapel = tb_mapel.id_mapel join tb_guru on tb_nilai.nip_guru = tb_guru.nip_guru join tb_semester on tb_nilai.id_semester = tb_semester.id_semester where tb_nilai.nisn='$nisn' ";
        return $this->db->query($query)->row_array();
   }

    public function getdeskripsi($nisn)
   {
     $query = "SELECT `tb_deskripsi`.*, `tb_siswa`.`nisn`,tb_siswa.nama_siswa,tb_siswa.kelas, tb_mapel.id_mapel,tb_mapel.mapel,tb_mapel.tahun_ajaran, tb_guru.nip_guru,tb_guru.nama_guru, tb_semester.id_semester,tb_semester.semester
        FROM `tb_deskripsi` JOIN `tb_siswa`
        ON `tb_deskripsi`.`nisn` = `tb_siswa`.`nisn` join tb_mapel on tb_deskripsi.id_mapel = tb_mapel.id_mapel join tb_guru on tb_deskripsi.nip_guru = tb_guru.nip_guru join tb_semester on tb_deskripsi.id_semester = tb_semester.id_semester where tb_deskripsi.nisn='$nisn' ";
        return $this->db->query($query)->result_array();
   }

    public function getnama2($nisn)
   {
     $query = "SELECT `tb_deskripsi`.*, `tb_siswa`.`nisn`,tb_siswa.nama_siswa,tb_siswa.kelas, tb_mapel.id_mapel,tb_mapel.mapel,tb_mapel.tahun_ajaran, tb_guru.nip_guru,tb_guru.nama_guru, tb_semester.id_semester,tb_semester.semester
        FROM `tb_deskripsi` JOIN `tb_siswa`
        ON `tb_deskripsi`.`nisn` = `tb_siswa`.`nisn` join tb_mapel on tb_deskripsi.id_mapel = tb_mapel.id_mapel join tb_guru on tb_deskripsi.nip_guru = tb_guru.nip_guru join tb_semester on tb_deskripsi.id_semester = tb_semester.id_semester where tb_deskripsi.nisn='$nisn' ";
        return $this->db->query($query)->row_array();
   }

    public function getAllmapel()
   {
     $query = "SELECT * from mapel";
      return $this->db->query($query)->result_array();
   }

  public function getmuridById($id_murid)
   {
      return $this->db->get_where('murid', ['id_murid' => $id_murid])->row_array();
   }

	public function tampil_guru()
   {
      return $this->db->get('guru')->result_array();
   }

   public function tampil_murid()
   {
      return $this->db->get('murid')->result_array();
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   } 
   public function insertnilai1($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function insertdeskripsi1($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id)
   {
      $this->db->delete('mapel', ['id_mapel' => $id]);
   }

  public function getmapelById($id_mapel)
   {
      return $this->db->get_where('mapel', ['id_mapel' => $id_mapel])->row_array();
   }

	public function updatemapel()
   {
      $mapel = $this->input->post('mapel');
      $hari = $this->input->post('hari');
      $tahun = $this->input->post('tahun');
      $id_guru = $this->input->post('id_guru');

      $data = [
      	'mapel' => $mapel,
      	'hari' => $hari,
      	'tahun' => $tahun,
      	'id_guru' => $id_guru
      ];

      $this->db->update('mapel', $data, ['id_mapel' => $this->input->post('id_mapel')]);
   }

   public function join()
   {
      $this->db->select('*');
      $this->db->from('mapel');
      $this->db->join('guru', 'guru.id_guru=mapel.id_guru');
      $result = $this->db->get();
      return $result->result_array();
   }

}

?>