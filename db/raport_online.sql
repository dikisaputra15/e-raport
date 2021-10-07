-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 08:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raport_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_deskripsi`
--

CREATE TABLE `tb_deskripsi` (
  `id_deskripsi` int(11) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `nip_guru` varchar(20) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `c_pengetahuan` varchar(300) NOT NULL,
  `c_praktek` varchar(300) NOT NULL,
  `c_sikap` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_deskripsi`
--

INSERT INTO `tb_deskripsi` (`id_deskripsi`, `nisn`, `id_mapel`, `nip_guru`, `id_semester`, `c_pengetahuan`, `c_praktek`, `c_sikap`) VALUES
(1, '1920001', 1, '34534534', 1, 'sangat baik', 'sudah terampil', 'sudah konsisten'),
(2, '1920001', 3, '9808111', 1, 'baik', 'baik', 'baik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `nip_guru` varchar(20) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_masuk` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`nip_guru`, `nama_guru`, `alamat`, `tgl_masuk`, `status`) VALUES
('34534534', 'abdul. M.Pd', 'serang city', '2021-01-02', 'aktif'),
('9808111', 'malik, S.Pd', 'serang', '2021-01-01', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kelas`) VALUES
(1, 'VII'),
(3, 'VIII');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kepsek`
--

CREATE TABLE `tb_kepsek` (
  `nip` varchar(50) NOT NULL,
  `nama_kepsek` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kepsek`
--

INSERT INTO `tb_kepsek` (`nip`, `nama_kepsek`, `alamat`, `no_telp`) VALUES
('14115146', 'Alimani, S.Sos', 'serang', '087996');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keterampilan`
--

CREATE TABLE `tb_keterampilan` (
  `id_keterampilan` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_keterampilan`
--

INSERT INTO `tb_keterampilan` (`id_keterampilan`, `id_mapel`, `nisn`, `id_kelas`, `nilai`, `semester`) VALUES
(3, 1, '1920001', 1, 77, '1'),
(4, 3, '1920001', 1, 83, '1'),
(5, 4, '1920001', 1, 85, '1'),
(6, 5, '1920001', 1, 80, '1'),
(7, 6, '1920001', 1, 80, '1'),
(8, 7, '1920001', 1, 80, '1'),
(9, 8, '1920001', 1, 80, '1'),
(10, 9, '1920001', 1, 77, '1'),
(11, 10, '1920001', 1, 77, '1'),
(12, 11, '1920001', 1, 73, '1'),
(13, 12, '1920001', 1, 86, '1'),
(14, 13, '1920001', 1, 79, '1'),
(15, 14, '1920001', 1, 81, '1'),
(16, 15, '1920001', 1, 79, '1'),
(17, 16, '1920001', 1, 78, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nip_guru` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `tahun_ajaran` varchar(100) NOT NULL,
  `kkm` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nip_guru`, `id_kelas`, `mapel`, `tahun_ajaran`, `kkm`) VALUES
(1, '34534534', 1, 'matematika', '2021', 70),
(3, '9808111', 1, 'ipa', '2021', 70);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapgu`
--

CREATE TABLE `tb_mapgu` (
  `id_mapgu` int(11) NOT NULL,
  `mapel` int(11) NOT NULL,
  `nip_guru` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mapgu`
--

INSERT INTO `tb_mapgu` (`id_mapgu`, `mapel`, `nip_guru`) VALUES
(1, 1, '34534534'),
(2, 3, '9808111');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilaisiswa` int(11) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `nip_guru` varchar(20) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `nilai_tugas` int(11) NOT NULL,
  `nilai_ulangan_harian` int(11) NOT NULL,
  `nilai_uts` int(11) NOT NULL,
  `nilai_uas` int(11) NOT NULL,
  `angka_pengetahuan` varchar(100) NOT NULL,
  `predikat_pengetahuan` varchar(100) NOT NULL,
  `angka_keterampilan` varchar(100) NOT NULL,
  `predikat_keterampilan` varchar(100) NOT NULL,
  `nilai_dalam_mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilaisiswa`, `nisn`, `id_mapel`, `nip_guru`, `id_semester`, `nilai_tugas`, `nilai_ulangan_harian`, `nilai_uts`, `nilai_uas`, `angka_pengetahuan`, `predikat_pengetahuan`, `angka_keterampilan`, `predikat_keterampilan`, `nilai_dalam_mapel`) VALUES
(1, '1920001', 1, '34534534', 1, 0, 0, 0, 0, '80', 'a', '90', 'a', 'ab'),
(2, '1920001', 3, '9808111', 1, 0, 0, 0, 0, '80', 'A', '80', 'A', '80'),
(3, '1920005', 3, '9808111', 1, 80, 80, 80, 80, '80', 'a', '80', 'a', 'ab');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai_pengetahuan`
--

CREATE TABLE `tb_nilai_pengetahuan` (
  `id_nilai` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_nilai_pengetahuan`
--

INSERT INTO `tb_nilai_pengetahuan` (`id_nilai`, `id_mapel`, `nisn`, `id_kelas`, `nilai`, `semester`) VALUES
(4, 1, '1920001', 1, 79, '1'),
(5, 3, '1920001', 1, 80, '1'),
(6, 4, '1920001', 1, 85, '1'),
(7, 5, '1920001', 1, 80, '1'),
(8, 6, '1920001', 1, 76, '1'),
(9, 7, '1920001', 1, 79, '1'),
(10, 8, '1920001', 1, 82, '1'),
(11, 9, '1920001', 1, 76, '1'),
(12, 10, '1920001', 1, 77, '1'),
(13, 11, '1920001', 1, 77, '1'),
(14, 12, '1920001', 1, 80, '1'),
(15, 13, '1920001', 1, 80, '1'),
(16, 14, '1920001', 1, 80, '1'),
(17, 15, '1920001', 1, 75, '1'),
(18, 16, '1920001', 1, 77, '1'),
(19, 1, '1920002', 1, 78, '1'),
(20, 3, '1920002', 1, 81, '1'),
(21, 4, '1920002', 1, 85, '1'),
(22, 5, '1920002', 1, 87, '1'),
(23, 6, '1920002', 1, 86, '1'),
(24, 7, '1920002', 1, 87, '1'),
(25, 8, '1920002', 1, 89, '1'),
(26, 9, '1920002', 1, 82, '1'),
(27, 10, '1920002', 0, 89, '1'),
(28, 11, '1920002', 1, 88, '1'),
(29, 12, '1920002', 1, 82, '1'),
(30, 13, '1920002', 1, 84, '1'),
(31, 14, '1920002', 1, 84, '1'),
(32, 15, '1920002', 1, 86, '1'),
(33, 16, '1920002', 1, 90, '1'),
(34, 1, '1920003', 1, 79, '1'),
(35, 3, '1920003', 1, 79, '1'),
(36, 4, '1920003', 1, 85, '1'),
(37, 5, '1920003', 1, 81, '1'),
(38, 6, '1920003', 1, 78, '1'),
(39, 7, '1920003', 1, 80, '1'),
(40, 8, '1920003', 1, 80, '1'),
(41, 9, '1920003', 1, 78, '1'),
(42, 10, '1920003', 1, 79, '1'),
(43, 11, '1920003', 1, 78, '1'),
(44, 12, '1920003', 1, 79, '1'),
(45, 13, '1920003', 1, 82, '1'),
(46, 14, '1920003', 1, 79, '1'),
(47, 15, '1920003', 1, 82, '1'),
(48, 16, '1920003', 1, 76, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai_sikap`
--

CREATE TABLE `tb_nilai_sikap` (
  `id_nilai_sikap` int(11) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nilai_spiritual` varchar(20) NOT NULL,
  `nilai_sosial` varchar(20) NOT NULL,
  `semester` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_nilai_sikap`
--

INSERT INTO `tb_nilai_sikap` (`id_nilai_sikap`, `nisn`, `id_kelas`, `nilai_spiritual`, `nilai_sosial`, `semester`) VALUES
(5, '1920001', 1, 'B', 'B', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil_sekolah`
--

CREATE TABLE `tb_profil_sekolah` (
  `id_profil` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kepala_sekolah` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profil_sekolah`
--

INSERT INTO `tb_profil_sekolah` (`id_profil`, `nama_sekolah`, `alamat`, `kepala_sekolah`, `nip`) VALUES
(1, 'MTs Al-Jauharotunnaqiyah Tanjung ', 'Desa Pakuncen Kecamatan Bojonegara Kabupaten Serang', 'ALIMANI, S.Sos', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_semester`
--

CREATE TABLE `tb_semester` (
  `id_semester` int(11) NOT NULL,
  `semester` varchar(200) NOT NULL,
  `tahun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_semester`
--

INSERT INTO `tb_semester` (`id_semester`, `semester`, `tahun`) VALUES
(1, 'semester 1', '2021'),
(2, 'semester 2', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nisn` varchar(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(100) NOT NULL,
  `tgl_lahir_ayah` date NOT NULL,
  `tgl_lahir_ibu` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nisn`, `nama_siswa`, `jk`, `kelas`, `alamat`, `tempat_lahir`, `tgl_lahir`, `nama_ayah`, `nama_ibu`, `tempat_lahir_ayah`, `tempat_lahir_ibu`, `tgl_lahir_ayah`, `tgl_lahir_ibu`, `status`, `photo`) VALUES
('1920001', 'Aditia Herlin', 'perempuan', '1', '-', '-', '2020-12-31', '-', '-', '-', '-', '2020-12-29', '2020-12-27', 'aktif', 'bantaraacak.jpg'),
('1920002', 'Andriyansyah', 'laki-laki', '1', '-', '-', '2021-01-07', '-', '-', '-', '-', '2021-01-01', '2021-01-09', 'aktif', 'bmlog.jpg'),
('1920003', 'Ayu Lestari', 'perempuan', '1', '-', '-', '2020-12-31', '-', '-', '-', '-', '2021-01-09', '2021-01-05', 'aktif', 'bmlog.jpg'),
('1920004', 'Bahrul Ulum', 'laki-laki', '1', '-', '-', '2021-01-02', '-', '-', '-', '-', '2021-01-08', '2021-01-09', 'aktif', 'bmlog.jpg'),
('1920005', 'Deffita Lestari', 'perempuan', '1', '-', '-', '2021-01-02', '-', '-', '-', '-', '2021-01-01', '2021-01-02', 'aktif', 'bmlog.jpg'),
('1920006', 'Devita', 'perempuan', '1', '-', '-', '2021-01-08', '-', '-', '-', '-', '2021-01-02', '2021-01-04', 'aktif', 'bmlog.jpg'),
('1920007', 'DwiNur Afriyansi', 'perempuan', '1', '-', '-', '2021-01-02', '-', '-', '-', '-', '2021-01-08', '2021-01-05', 'aktif', 'bmlog.jpg'),
('1920008', 'Esy Listiawatiy', 'perempuan', '1', '-', '-', '2021-01-01', '-', '-', '-', '-', '2021-01-02', '2021-01-04', 'aktif', 'bmlog.jpg'),
('1920009', 'Fahril ', 'laki-laki', '1', '-', '-', '2021-01-01', '-', '-', '-', '-', '2021-01-09', '2021-01-06', 'aktif', 'bmlog.jpg'),
('1920010', 'Fikri Maulana', 'laki-laki', '1', '-', '-', '2021-01-03', '-', '-', '-', '-', '2021-01-01', '2021-01-02', 'aktif', 'bmlog.jpg'),
('1920011', 'Handi Pratama', 'laki-laki', '1', '-', '-', '2021-01-08', '-', '-', '-', '-', '2021-01-01', '2021-01-01', 'aktif', 'bmlog.jpg'),
('1920012', 'Indra Aktaviani', 'laki-laki', '1', '-', '-', '2021-01-07', '-', '-', '-', '-', '2020-12-29', '2020-12-27', 'aktif', 'bmlog.jpg'),
('1920013', 'Iqbal Vilayani', 'laki-laki', '1', '-', '-', '2020-12-29', '-', '-', '-', '-', '2021-01-07', '2021-01-02', 'aktif', 'bmlog.jpg'),
('1920014', 'Leni Febriyani', 'perempuan', '1', '-', '-', '2021-01-01', '-', '-', '-', '-', '2021-01-04', '2021-01-07', 'aktif', 'bmlog.jpg'),
('1920015', 'Lucky Alamsyah', 'laki-laki', '1', '-', '-', '2021-01-02', '-', '-', '-', '-', '2021-01-01', '2021-01-09', 'aktif', 'bmlog.jpg'),
('1920016', 'Masriyah', 'perempuan', '1', '-', '-', '2021-01-02', '-', '-', '-', '-', '2020-12-31', '2020-12-31', 'aktif', 'bmlog.jpg'),
('1920017', 'Mila Nasaroti', 'perempuan', '1', '-', '-', '2021-01-01', '-', '-', '-', '-', '2020-12-31', '2020-12-28', 'aktif', 'bmlog.jpg'),
('1920018', 'Misdian Ningsih', 'perempuan', '1', '-', '-', '2021-01-01', '-', '-', '-', '-', '2021-01-06', '2021-01-16', 'aktif', 'bmlog.jpg'),
('1920019', 'Misiabah Takdir A', 'laki-laki', '1', '-', '-', '2021-01-01', '-', '-', '-', '-', '2021-01-01', '2021-01-09', 'aktif', 'bmlog.jpg'),
('1920020', 'Muhamad Zaenulloh', 'laki-laki', '1', '-', '-', '2021-01-06', '-', '-', '-', '-', '2021-01-09', '2021-01-04', 'aktif', 'bmlog.jpg'),
('1920021', 'Munadi', 'laki-laki', '1', '-', '-', '2021-01-09', '-', '-', '-', '-', '2021-01-08', '2021-01-05', 'aktif', 'bmlog.jpg'),
('1920022', 'Mutawakil', 'laki-laki', '1', '-', '-', '2021-01-08', '-', '-', '-', '-', '2021-01-07', '2021-01-04', 'aktif', 'bmlog.jpg'),
('1920023', 'Nanang Sunandar', 'laki-laki', '1', '-', '-', '2021-01-08', '-', '-', '-', '-', '2020-12-31', '2021-01-04', 'aktif', 'bmlog.jpg'),
('1920024', 'Nila Noviyani', 'perempuan', '1', '-', '-', '2021-01-09', '-', '-', '-', '-', '2021-01-07', '2020-12-31', 'aktif', 'bmlog.jpg'),
('1920025', 'Nurholis Maryadi', 'laki-laki', '1', '-', '-', '2021-01-08', '-', '-', '-', '-', '2021-01-06', '2020-12-29', 'aktif', 'bmlog.jpg'),
('1920026', 'Nurul Aulia', 'perempuan', '1', '-', '-', '2021-01-08', '-', '-', '-', '-', '2021-01-08', '2021-01-02', 'aktif', 'bmlog.jpg'),
('1920027', 'Randi Aristiawan', 'laki-laki', '1', '-', '-', '2021-01-01', '-', '-', '-', '-', '2021-01-02', '2021-01-07', 'aktif', 'bmlog.jpg'),
('1920028', 'Rizki Ramadani', 'laki-laki', '1', '-', '-', '2021-01-01', '-', '-', '-', '-', '2021-01-07', '2021-01-02', 'aktif', 'bmlog.jpg'),
('1920029', 'Rohmatulloh', 'laki-laki', '1', '-', '-', '2021-01-08', '-', '-', '-', '-', '2020-12-30', '2021-01-09', 'aktif', 'bmlog.jpg'),
('1920030', 'Rohmi Maruani U', 'perempuan', '1', '-', '-', '2021-01-01', '-', '-', '-', '-', '2021-01-01', '2021-01-09', 'aktif', 'bmlog.jpg'),
('1920031', 'Roudatul Janah', 'perempuan', '1', '-', '-', '2021-01-09', '-', '-', '-', '-', '2021-01-01', '2021-01-09', 'aktif', 'bmlog.jpg'),
('1920032', 'Samiáh', 'perempuan', '1', '-', '-', '2021-01-07', '-', '-', '-', '-', '2021-01-07', '2021-01-04', 'aktif', 'bmlog.jpg'),
('1920033', 'Satrio Kusuma', 'laki-laki', '1', '-', '-', '2021-01-08', '-', '-', '-', '-', '2021-01-01', '2021-01-05', 'aktif', 'bmlog.jpg'),
('1920034', 'Siskah', 'perempuan', '1', '-', '-', '2021-01-01', '-', '-', '-', '-', '2021-01-08', '2021-01-06', 'aktif', 'bmlog.jpg'),
('1920035', 'Siti Serunih', 'perempuan', '1', '-', '-', '2021-01-07', '-', '-', '-', '-', '2021-01-02', '2021-01-07', 'aktif', 'bmlog.jpg'),
('1920036', 'Sri Milkiatun', 'perempuan', '1', '-', '-', '2021-01-08', '-', '-', '-', '-', '2021-01-08', '2021-01-02', 'aktif', 'bmlog.jpg'),
('1920037', 'Suharna', 'perempuan', '1', '-', '-', '2021-01-08', '-', '-', '-', '-', '2021-01-08', '2021-01-03', 'aktif', 'bmlog.jpg'),
('1920038', 'Sulhi', 'laki-laki', '1', '-', '-', '2021-01-08', '-', '-', '-', '-', '2021-01-08', '2021-01-07', 'aktif', 'bmlog.jpg'),
('1920039', 'Susiyani', 'perempuan', '1', '-', '-', '2021-01-07', '-', '-', '-', '-', '2021-01-08', '2021-01-04', 'aktif', 'bmlog.jpg'),
('1920040', 'Vani', 'laki-laki', '1', '-', '-', '2021-01-08', '-', '-', '-', '-', '2021-01-06', '2021-01-04', 'aktif', 'bmlog.jpg'),
('1920041', 'Wawan Nasihin', 'laki-laki', '1', '-', '-', '2021-01-07', '-', '-', '-', '-', '2021-01-02', '2021-01-06', 'aktif', 'bmlog.jpg'),
('1920042', 'Yusnita Auliya A', 'perempuan', '1', '-', '-', '2021-01-09', '-', '-', '-', '-', '2021-01-07', '2021-01-05', 'aktif', 'bmlog.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(3, 'wali', 'wali', 'wali', 'walimurid'),
(4, 'alimah', '12345', 'ALIMANI, S.Sos', 'kepala sekolah'),
(5, '1920001', '12345', 'Aditia Herlin', 'siswa'),
(6, '1920002', '12345', 'Andriyansah', 'siswa'),
(7, '34534534', 'abdul', 'abdul. M.Pd', 'guru'),
(8, '9808111', 'malik', 'malik', 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wali_kelas`
--

CREATE TABLE `tb_wali_kelas` (
  `id_wali_kelas` int(11) NOT NULL,
  `nip_guru` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_wali_kelas`
--

INSERT INTO `tb_wali_kelas` (`id_wali_kelas`, `nip_guru`, `id_kelas`) VALUES
(1, '34534534', 3),
(3, '9808111', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_deskripsi`
--
ALTER TABLE `tb_deskripsi`
  ADD PRIMARY KEY (`id_deskripsi`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`nip_guru`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_kepsek`
--
ALTER TABLE `tb_kepsek`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tb_keterampilan`
--
ALTER TABLE `tb_keterampilan`
  ADD PRIMARY KEY (`id_keterampilan`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tb_mapgu`
--
ALTER TABLE `tb_mapgu`
  ADD PRIMARY KEY (`id_mapgu`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilaisiswa`);

--
-- Indexes for table `tb_nilai_pengetahuan`
--
ALTER TABLE `tb_nilai_pengetahuan`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tb_nilai_sikap`
--
ALTER TABLE `tb_nilai_sikap`
  ADD PRIMARY KEY (`id_nilai_sikap`);

--
-- Indexes for table `tb_profil_sekolah`
--
ALTER TABLE `tb_profil_sekolah`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tb_semester`
--
ALTER TABLE `tb_semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_wali_kelas`
--
ALTER TABLE `tb_wali_kelas`
  ADD PRIMARY KEY (`id_wali_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_deskripsi`
--
ALTER TABLE `tb_deskripsi`
  MODIFY `id_deskripsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_keterampilan`
--
ALTER TABLE `tb_keterampilan`
  MODIFY `id_keterampilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_mapgu`
--
ALTER TABLE `tb_mapgu`
  MODIFY `id_mapgu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilaisiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_nilai_pengetahuan`
--
ALTER TABLE `tb_nilai_pengetahuan`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_nilai_sikap`
--
ALTER TABLE `tb_nilai_sikap`
  MODIFY `id_nilai_sikap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_profil_sekolah`
--
ALTER TABLE `tb_profil_sekolah`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_semester`
--
ALTER TABLE `tb_semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_wali_kelas`
--
ALTER TABLE `tb_wali_kelas`
  MODIFY `id_wali_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
