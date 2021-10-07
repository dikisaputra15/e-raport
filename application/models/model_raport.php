<?php

class Model_raport extends CI_Model
{
   

    public function getraport($nisn,$id_kelas,$semester)
   {
         $query = "SELECT `tb_nilai_pengetahuan`.*, `tb_mapel`.`mapel`, tb_kelas.id_kelas,tb_kelas.kelas
        FROM `tb_nilai_pengetahuan` JOIN `tb_mapel`
        ON `tb_nilai_pengetahuan`.`id_mapel` = `tb_mapel`.`id_mapel` join tb_kelas on tb_nilai_pengetahuan.id_kelas = tb_kelas.id_kelas where tb_nilai_pengetahuan.nisn='$nisn' and tb_nilai_pengetahuan.id_kelas='$id_kelas' and tb_nilai_pengetahuan.semester='$semester' ";
        return $this->db->query($query)->result_array();
   }

    public function getsiswabyid($nisn)
   {
         $query = "SELECT `tb_siswa`.*, `tb_kelas`.`kelas`
        FROM `tb_siswa` JOIN `tb_kelas`
        ON `tb_siswa`.`kelas` = `tb_kelas`.`id_kelas` where tb_siswa.nisn='$nisn'";
        return $this->db->query($query)->row_array();
   }

    public function getraportterampil($nisn,$id_kelas,$semester)
   {
         $query = "SELECT `tb_keterampilan`.*, `tb_mapel`.`mapel`, tb_kelas.id_kelas,tb_kelas.kelas
        FROM `tb_keterampilan` JOIN `tb_mapel`
        ON `tb_keterampilan`.`id_mapel` = `tb_mapel`.`id_mapel` join tb_kelas on tb_keterampilan.id_kelas = tb_kelas.id_kelas where tb_keterampilan.nisn='$nisn' and tb_keterampilan.id_kelas='$id_kelas' and tb_keterampilan.semester='$semester' ";
        return $this->db->query($query)->result_array();
   }

   public function getraportsikap($nisn,$id_kelas,$semester)
   {
         $query = "SELECT `tb_nilai_sikap`.*, tb_kelas.id_kelas,tb_kelas.kelas
        FROM `tb_nilai_sikap` JOIN tb_kelas on tb_nilai_sikap.id_kelas = tb_kelas.id_kelas where tb_nilai_sikap.nisn='$nisn' and tb_nilai_sikap.id_kelas='$id_kelas' and tb_nilai_sikap.semester='$semester' ";
        return $this->db->query($query)->result_array();
   }

   public function getprofil()
   {
        $query = "SELECT * from tb_profil_sekolah";
        return $this->db->query($query)->result_array();
   }

   
}

?>