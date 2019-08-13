-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2019 at 05:35 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rapor_sd`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(5) NOT NULL,
  `namab` varchar(25) NOT NULL,
  `nip` int(20) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `namab`, `nip`, `jk`, `tgl_lahir`, `tmp_lahir`, `pendidikan`, `alamat`, `no_hp`) VALUES
(8, 'Yenih Marlina, S.Pd', 10023231, 'Perempuan', '1970-11-01', 'jakarta', 'sarjana pendidikan', 'Jakarta', '0814556767854'),
(9, 'Rainy N.,S.Pd', 10034524, 'Perempuan', '1975-01-04', 'Jakarta', '', 'Jakarta', '0886754546765'),
(10, 'Riani M.,S.Pd', 10034545, 'Perempuan', '1985-01-07', 'Jakarta', '', 'bekasi', '087645278654'),
(11, 'Shofiyah,S.Pd', 10034576, 'Perempuan', '1988-01-03', 'Jakarta', '', 'Jakarta', '08234267845'),
(12, 'Putri  Aprianti S.Pd', 10034599, 'Perempuan', '1990-01-02', 'Jakarta', '', 'Bekasi', '087532343210'),
(13, 'Nunung Nur Baiti', 10034590, 'Perempuan', '1975-01-03', 'Cerbon', '', 'Bekasi', '089614461707'),
(14, 'Abdullah A., S.Ag', 10034529, 'Perempuan', '1980-01-03', 'Jakarta', '', 'Bekasi', '084245566789');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(5) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `id_kurikulum` int(5) NOT NULL,
  `id_guru` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `tahun_ajaran`, `nama_kelas`, `id_kurikulum`, `id_guru`) VALUES
(1, '2018/2019', 'Kelas 1', 2, 12),
(2, '2018/2019', 'Kelas 1', 3, 12),
(3, '2018/2019', 'Kelas 1', 4, 12),
(4, '2018/2019', 'Kelas 1', 5, 12),
(7, '2018/2019', 'Kelas 1', 8, 12),
(8, '2018/2019', 'Kelas 1', 9, 12),
(9, '2018/2019', 'Kelas 1', 10, 12),
(10, '2018/2019', 'Kelas 1', 11, 12),
(11, '2018/2019', 'Kelas 2', 12, 9),
(13, '2018/2019', 'Kelas 2', 14, 9),
(14, '2018/2019', 'Kelas 2', 2, 9),
(17, '2018/2019', 'Kelas 2', 18, 9),
(18, '2018/2019', 'Kelas 2', 19, 9),
(19, '2018/2019', 'Kelas 2', 20, 9),
(20, '2018/2019', 'Kelas 2', 21, 9),
(21, '2019/2020', 'Kelas 1', 2, 8),
(23, '2019/2020', 'Kelas 1', 4, 8),
(24, '2015', 'kelas baru', 1, 8),
(160, '2012', 'coba lagi', 12, 14),
(161, '2012', 'coba lagi', 13, 14),
(162, '2012', 'coba lagi', 14, 14),
(163, '2012', 'coba lagi', 15, 14),
(164, '2012', 'coba lagi', 18, 14),
(165, '2012', 'coba lagi', 19, 14),
(166, '2012', 'coba lagi', 20, 14),
(167, '2012', 'coba lagi', 21, 14),
(168, '2012', 'coba lagi', 27, 14),
(169, '2012', 'coba lagi', 31, 14),
(170, '2015', 'kelas baru', 1, 8),
(171, '2015/2016', 'kelas 1', 1, 13),
(172, '2015/2016', 'kelas 1', 2, 13),
(173, '2015/2016', 'kelas 1', 3, 13),
(174, '2015/2016', 'kelas 1', 4, 13);

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id_kurikulum` int(5) NOT NULL,
  `tingkatkelas` int(5) NOT NULL,
  `id_pelajaran` int(5) NOT NULL,
  `kd_rumus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`id_kurikulum`, `tingkatkelas`, `id_pelajaran`, `kd_rumus`) VALUES
(1, 1, 3, 'k-13'),
(2, 1, 4, 'k-13'),
(3, 1, 5, 'k-13'),
(4, 1, 14, 'k-13'),
(5, 2, 3, 'k-13'),
(6, 2, 4, 'k-13'),
(7, 2, 5, 'k-13'),
(8, 2, 6, 'k-13'),
(9, 6, 4, 'k-13'),
(10, 6, 3, 'k-13'),
(11, 6, 14, 'k-13'),
(14, 6, 12, 'k-13');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_pelajaran` int(5) NOT NULL,
  `nama_pelajaran` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_pelajaran`, `nama_pelajaran`, `jenis`) VALUES
(3, 'Pendidikan Pancasila dan Kewarga Negaraan', 'Muatan Pelajaran'),
(4, 'Bahasa Indonesia', 'Muatan Pelajaran'),
(5, 'Matematika', 'Muatan Pelajaran'),
(6, 'Ilmu Pengetahuan Alam', 'Muatan Pelajaran'),
(8, 'Ilmu Pengetahuan Sosial', 'Muatan Pelajaran'),
(10, 'Pendidikan Jasmani, Olahraga dan Kesehatan', 'Muatan Pelajaran'),
(11, 'Bahasa Arab', 'Muatan Lokal'),
(12, 'Bahasa Inggris', 'Muatan Lokal'),
(13, 'Hadist', 'Muatan Lokal'),
(14, 'Jari Pintar Artmatika', 'Muatan Lokal'),
(21, 'Pendidikan Pancasila dan Kewarga Negaraan', 'Muatan Lokal'),
(92, 'Bahasa Inggris', 'Muatan Lokal');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_hafalan`
--

CREATE TABLE `nilai_hafalan` (
  `id_hafalan` int(5) NOT NULL,
  `id_surat` int(5) NOT NULL,
  `id_siswa` int(5) NOT NULL,
  `nilai` int(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_hafalan`
--

INSERT INTO `nilai_hafalan` (`id_hafalan`, `id_surat`, `id_siswa`, `nilai`, `keterangan`) VALUES
(1, 1, 1, 5, 'd'),
(4, 2, 9, 56, 'bagi yang mau'),
(5, 5, 8, 80, 'perbaiki panjang dan pendeknya'),
(6, 3, 8, 70, 'tajwidnya perlu diperhatikan'),
(7, 10, 8, 77, 'perlu diulang lagi'),
(8, 2, 8, 80, 'baik'),
(9, 2, 8, 80, 'bagus'),
(10, 2, 21, 80, 'wkwkwk'),
(11, 11, 21, 80, 'bagi yang mau'),
(12, 11, 21, 80, 'bagi yang mau'),
(13, 2, 8, 56, 'perbaiki panjang dan pendeknya');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_rapor1`
--

CREATE TABLE `nilai_rapor1` (
  `id_nilai` int(5) NOT NULL,
  `id_kurikulum` int(5) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `id_siswa` int(5) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `pengetahuan_harian` float NOT NULL,
  `pengetahuan_uts` float NOT NULL,
  `pengetahuan_uas` float NOT NULL,
  `nilai_pengetahuan` float NOT NULL,
  `predikat_pengetahuan` varchar(2) NOT NULL,
  `des_peng` text NOT NULL,
  `nilai_keterampilan` float NOT NULL,
  `predikat_keterampilan` varchar(2) NOT NULL,
  `des_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_rapor1`
--

INSERT INTO `nilai_rapor1` (`id_nilai`, `id_kurikulum`, `tahun_ajaran`, `semester`, `id_siswa`, `id_kelas`, `pengetahuan_harian`, `pengetahuan_uts`, `pengetahuan_uas`, `nilai_pengetahuan`, `predikat_pengetahuan`, `des_peng`, `nilai_keterampilan`, `predikat_keterampilan`, `des_ket`) VALUES
(4, 2, '2018/2019', 'Ganjil', 21, 1, 79, 85, 100, 85.75, 'B', 'belajar dengan baik', 67, 'D', 'mampu menerapkan dalam keseharian'),
(10, 4, '2018/2019', 'Ganjil', 22, 3, 67, 80, 89, 75.75, 'C', '', 95, 'A', ''),
(11, 4, '2018/2019', 'Ganjil', 21, 3, 89, 80, 95, 88.25, 'B', 'belajar dengan baik', 91, 'A', 'belajar dengan baik'),
(15, 2, '2018/2019', 'Ganjil', 22, 1, 80, 70, 89, 79.75, 'C', '', 98, 'A', ''),
(16, 3, '2018/2019', 'Ganjil', 22, 2, 90, 89, 88, 89.25, 'B', '', 95, 'A', ''),
(17, 4, '2018/2019', 'Ganjil', 22, 3, 90, 89, 95, 91, 'A', '', 98, 'A', ''),
(18, 5, '2018/2019', 'Ganjil', 22, 4, 89, 96, 87, 90.25, 'A', '', 88, 'B', ''),
(19, 6, '2018/2019', 'Ganjil', 22, 5, 89, 70, 89, 84.25, 'B', '', 89, 'B', ''),
(21, 8, '2018/2019', 'Ganjil', 22, 7, 75, 78, 80, 77, 'C', '', 88, 'B', ''),
(25, 9, '2018/2019', 'Ganjil', 22, 8, 80, 89, 90, 84.75, 'B', '', 98, 'A', ''),
(26, 10, '2018/2019', 'Ganjil', 22, 9, 98, 88, 70, 88.5, 'B', '', 8, 'D', ''),
(32, 11, '2018/2019', 'Ganjil', 22, 10, 89, 89, 90, 89.25, 'B', '', 92, 'A', ''),
(35, 11, '2018/2019', 'Ganjil', 22, 10, 67, 89, 90, 78.25, 'C', '', 95, 'A', ''),
(36, 5, '2018/2019', 'Ganjil', 21, 4, 80, 80, 90, 82.5, 'B', 'belajar dengan baik', 98, 'A', 'mampu menerapkan dalam keseharian'),
(37, 2, '2018/2019', 'Ganjil', 22, 1, 100, 80, 100, 95, 'A', '', 95, 'A', ''),
(39, 2, '2018/2019', 'Ganjil', 21, 1, 100, 89, 89, 94.5, 'A', 'belajar dengan baik', 89, 'B', 'mampu menerapkan dalam keseharian'),
(40, 9, '2018/2019', 'Ganjil', 21, 8, 80, 70, 90, 80, '', 'belajar dengan baik', 89, 'B', 'des_ket');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_rapot2`
--

CREATE TABLE `nilai_rapot2` (
  `id_nilai2` int(5) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `id_siswa` int(5) NOT NULL,
  `spiritual` varchar(100) NOT NULL,
  `sosial` varchar(100) NOT NULL,
  `ekskul1` varchar(20) NOT NULL,
  `keterangan1` varchar(100) NOT NULL,
  `ekskul2` varchar(20) NOT NULL,
  `keterangan2` varchar(100) NOT NULL,
  `saran2` varchar(1000) NOT NULL,
  `berat1` int(5) NOT NULL,
  `berat2` int(5) NOT NULL,
  `tinggi1` int(5) NOT NULL,
  `tinggi2` int(5) NOT NULL,
  `pendengaran` varchar(50) NOT NULL,
  `pengelihatan` varchar(50) NOT NULL,
  `gigi` varchar(50) NOT NULL,
  `prestasi1` varchar(50) NOT NULL,
  `keterangan_1` varchar(50) NOT NULL,
  `prestasi2` varchar(50) NOT NULL,
  `keterangan_2` varchar(50) NOT NULL,
  `sakit` int(3) NOT NULL,
  `ijin` int(3) NOT NULL,
  `absen` int(3) NOT NULL,
  `id_kelas` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_rapot2`
--

INSERT INTO `nilai_rapot2` (`id_nilai2`, `tahun`, `semester`, `id_siswa`, `spiritual`, `sosial`, `ekskul1`, `keterangan1`, `ekskul2`, `keterangan2`, `saran2`, `berat1`, `berat2`, `tinggi1`, `tinggi2`, `pendengaran`, `pengelihatan`, `gigi`, `prestasi1`, `keterangan_1`, `prestasi2`, `keterangan_2`, `sakit`, `ijin`, `absen`, `id_kelas`) VALUES
(14, '2018/2019', 'Ganjil', 22, 'baik', 'baik', 'tidur', 'tidur selama dikelas', 'juara 1 tidur dikela', 'juara 1 tidur dikelas', 'jagan tidur terus nak.. ', 89, 35, 123, 124, 'baik', 'baik', 'baik', 'tidur', 'baik sekali', 'juara4', 'juara 1 tidur dikelas', 1, 3, 1, 11),
(15, '2018/2019', 'Ganjil', 21, 'baik', 'baik', 'Panahan', 'juaran harapan', '', 'juara 1 tidur dikelas', 'belajar yang rajin', 34, 35, 123, 124, 'baik', 'baik', 'baik', 'juaran lomba', 'juara harapan lomba panahan', '-', '-', 1, 3, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(1) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npsn_nss` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kode_pos` int(7) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `kelurahan_desa` varchar(50) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `kabupaten_kota` varchar(50) NOT NULL,
  `provinsi` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama`, `npsn_nss`, `alamat`, `kode_pos`, `no_hp`, `kelurahan_desa`, `kecamatan`, `kabupaten_kota`, `provinsi`, `email`) VALUES
(1, 'SD ALAM ISLAMI', '20204636/101020703013', 'Jl. Setia IIA / 23 RT 002/RW 012', 17411, '021-8465258', 'bekasi', 'Pondok Gede', 'Bekasi', 'Jawa Barat', 'sd.alamislami@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `no_induk` int(25) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `ayah` varchar(20) NOT NULL,
  `ibu` varchar(20) NOT NULL,
  `pendidikan` varchar(15) NOT NULL,
  `jln` varchar(25) NOT NULL,
  `kelurahan` varchar(25) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `kabupaten` varchar(25) NOT NULL,
  `propinsi` varchar(25) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `foto`, `no_induk`, `jk`, `agama`, `tmp_lahir`, `tgl_lahir`, `alamat`, `ayah`, `ibu`, `pendidikan`, `jln`, `kelurahan`, `kecamatan`, `kabupaten`, `propinsi`, `no_hp`, `status`) VALUES
(8, 'Arendt Arbian Putra D.', '', 141501001, 'Laki-laki', 'Islam', 'Jakarta', '2007-09-15', 'Jl. Taman Karmila F2/20', 'Dadang Kurniawan', 'Anatalita Absari', 'TK', 'Jl. Taman Karmila F2/20', 'Jatiwaringin', 'Pondok Gede', 'Kota Bekasi', 'Jawa Barat', '08179122353', 'Aktif'),
(9, 'Aufa Dzaky Zuhdi Wicakson', '', 141501002, 'Laki-laki', 'Islam', 'Bekasi', '2008-02-01', 'Jl. Budaya Rt/Rw 01/06', 'Wiwid Wicaksono', 'Rina Isnawati Werdin', 'TK', 'Jl. Taman Karmila F2/20', 'Jatiwaringin', 'Pondok Gede', 'Kota Bekasi', 'Jawa Barat', 'no_hp', 'Aktif'),
(10, 'Chivalry Arifalhanif N.F.', '', 141501003, 'Laki-laki', 'Islam', 'Bekasi', '2007-10-27', 'Komplek Sinar Kasih Jl. Agape B. 35 Rt/Rw 02/02 ', 'Candrsmoro HNF', 'Fitri Nur Aryanti', 'TK', 'Komplek Sinar Kasih Jl. A', 'Jatiwaringin', 'Pondok Gede', 'Kota Bekasi', 'Jawa Barat', '089601378910', 'Aktif'),
(11, 'Ishana Larasati Surono', '', 141501004, 'Perempuan', 'Islam', 'Bekasi', '2008-01-31', 'Jl. Galur No. 15 Rt/Rw 03/08 Jati Cempaka', 'Untung Surono', 'Niken Idasari S.', 'TK', 'Jl. Galur No. 15 Rt/Rw 03', 'Jati Cempaka', 'Pondok Gede', 'Kota Bekasi', 'Jawa Barat', '08179122353', 'Aktif'),
(12, 'Lovely Aisha Rovela', '', 141501005, 'Perempuan', 'Islam', 'Bekasi', '2007-05-22', 'Jl. H.Aselan Gg.Damai 2 RT05/RW015 No. 50 Jatiwaringin', 'Nurwantoro', 'Dewi Ornela Muti', 'TK', 'Jl. H.Aselan Gg.Damai 2 R', 'Jatiwaringin', 'Pondok Gede', 'Kota Bekasi', 'Jawa Barat', '081381897272', 'Aktif'),
(13, 'Maliqa Nakeisha S.', '', 161701001, 'Perempuan', 'Islam', 'Jakarta', '2006-10-24', 'Jatiwaringin Mansion Jl. Permata Raya No.8', 'Singgih Raharjo', 'Berni Berliani', 'TK', 'Jatiwaringin Mansion Jl. ', 'Jatiwaringin', 'Pondok Gede', 'Kota Bekasi', 'Jawa Barat', '0813 1076 7798', 'Aktif'),
(14, 'Muhammad', '', 141501007, 'Laki-laki', 'Islam', 'Bekasi', '2008-11-23', 'Jl. Jati Makmur Rt/Rw 04/09 No. 04', 'Arif Arbi', 'Eka Satria', 'TK', 'Jl. Jati Makmur Rt/Rw 04/', 'Jatiwaringin', 'Pondok Gede', 'Kota Bekasi', 'Jawa Barat', '081388028191', 'Aktif'),
(15, 'Muhammad Hamzah A.R.', '', 141501008, 'Laki-laki', 'Islam', 'Jakarta', '2008-03-24', 'Jl. Masjid No. 93 Rt/Rw 05/02 Jati Cempaka ', 'Cecep Setiawan', 'Ratu Siti Mariam', 'TK', 'Jl. Masjid No. 93 Rt/Rw 0', 'Jati Cempaka', 'Pondok Gede', 'Kota Bekasi', 'Jawa Barat', '0811144162', 'Aktif'),
(16, 'Muhammad Nabil', '', 141501006, 'Laki-laki', 'Islam', 'Jakarta', '2001-08-21', 'Jl. Kampus Unkris No. 39 Rt/Rw 05/ 09 Jati Cempaka', 'Juhaeri Mumin, ST', 'Wirda Varania, S. Si', 'TK', 'Jl. Kampus Unkris No. 39 ', 'Jati Cempaka', 'Pondok Gede', 'Kota Bekasi', 'Jawa Barat', '0811147404', 'Aktif'),
(17, 'Muhammad Yusuf Kurniawan', '', 141501009, 'Laki-laki', 'Islam', 'Bekasi', '2008-03-28', 'Jl. Sejahtera Rt/Rw 07/03 No. 89A Jatiwaringin ', 'Dhian Puspita Kurnia', 'Nurochmawati', 'TK', 'Jl. Sejahtera Rt/Rw 07/03', 'Jatiwaringin', 'Pondok Gede', 'Kota Bekasi', 'Jawa Barat', '081311057119', 'Aktif'),
(18, 'Pinkan Andira E. Sumampow', '', 141501010, 'Perempuan', 'Islam', 'Jakarta', '2008-03-13', 'Jl. Felisia VI/F 78', 'Andirama Valentino S', 'Prita Maharani', 'TK', 'Jl. Felisia VI/F 78', 'Jatibening', 'Pondok Gede', 'Kota Bekasi', 'Jawa Barat', '08561234740', 'Aktif'),
(19, 'Rakarayan Kiko', '', 141501011, 'Laki-laki', 'Islam', 'Jakarta', '2007-11-30', 'Jl. Setia II Gg. Melati 3 Rt/Rw 05/012 Jatiwaringin ', 'Dimas Ramadani', 'Indri', 'TK', 'Jl. Setia II Gg. Melati 3', 'Jatiwaringin', 'Pondok Gede', 'Kota Bekasi', 'Jawa Barat', '087887274636', 'Aktif'),
(20, 'Rasya Aureliandra', '', 141501012, 'Perempuan', 'Islam', 'Jakarta', '2008-08-23', 'Jl. Binalontar 3 No. 30 Q Rt/Rw 07/09', 'Ardiansyah', 'Reninta Dwi Maharany', 'TK', 'Jl. Binalontar 3 No. 30 Q', 'Jati Cempaka', 'Pondok Gede', 'Kota Bekasi', 'Jawa Barat', '085697511227', 'Aktif'),
(21, 'Wardah Bauzir', '', 141501013, 'Perempuan', 'Islam', 'Yogjakarta', '2008-05-27', 'Jl. Setia 2 A Melati 5 No. 33 Jatiwaringin', 'Musa Bauzir', 'Yasmin Basalamah', 'TK', 'Jl. Setia 2 A Melati 5 No', 'Jatiwaringin', 'Pondok Gede', 'Kota Bekasi', 'Jawa Barat', '081807101278', 'Aktif'),
(22, 'Yumma Rafid Ramadhan', '', 171801009, 'Laki-laki', 'Islam', 'Semarang', '2007-09-20', 'Jl. Pangkalanjati VIA No 38J RT006/RW005', 'Nugroho Adi Putra', 'Trivosa Sri Sulastri', 'TK', 'Jl. Pangkalanjati VIA No ', 'Cipinang Melayu', 'Makasar', 'Jakarta Timur', 'DKI Jakarta', '082111228890', 'Aktif'),
(23, 'AHMAD HAFIDZ RAHMATULLAH', '', 181905001, 'Laki-laki', 'Islam', 'Be', '2012-02-23', 'Gg. Sawo No. 62 RT 003/RW 003 Jatiwaringin, Pondok Gede', 'Mohammad Ichwanuddin', 'Yuliati Puji Rahayu', 'TK AI', 'Gg. Sawo No. 62 RT 003/RW', 'Jatiwaringin', 'Pondok Gede', 'Bekasi', 'Ja', '082334142662', 'Aktif'),
(24, 'ALMA QAULAN TSAQILA', '', 181905002, 'Perempuan', 'Islam', 'Jakarta', '2011-09-15', 'Jl. Gamprit I Gg. H. Talam RT 05/RW 06 No. 7B Jatiwaringin, Pondok Gede, Bekasi', 'Soleh Togumtu Pangga', 'Lidya Ningrum', 'TK AI', 'Jl. Gamprit I Gg. H. Tala', 'Jatiwaringin', 'Pondok Gede', 'Bekasi', 'Jawa Barat', '08121261828', 'Aktif'),
(25, 'AMIRA YURI', '', 181905003, 'Perempuan', 'Islam', 'Jakarta', '2012-03-01', ' Jl. Rawa Indah No. 11 RT 04 /RW 06 Jati Cempaka, Pondok Gede', 'Yusuf Ridor', 'Novi Savarianti Fahr', 'TK AI', ' Jl. Rawa Indah No. 11 RT', 'Jatiwaringin', 'Pondok Gede', 'Bekasi', 'Jawa Barat', '081389151980', 'Aktif'),
(26, 'DAYANA NURRAHMI AZALIA AM', '', 181905004, 'Perempuan', 'Islam', 'Jakarta', '2011-04-10', 'Jl. Setia I Gg. Mayor RT 04/RW 08 No. 47 A Jati Cempaka, Pondok Gede', 'Muhammad Amin', 'Daning Sri Bangun', 'TK', 'Jl. Setia I Gg. Mayor RT ', 'Jati Cempaka', 'Pondok Gede', 'Bekasi', 'Jawa Barat', '081282176547', 'Aktif'),
(27, 'FAUZAN MUHAMMAD FATIH ALG', '', 181905005, 'Laki-laki', 'Islam', 'Sukabumi', '2011-08-01', 'Jl. Setia I R No. 14 RT 05/RW 08 Jaticempaka Kec. Pondok Gede', 'Aos Muhammad Kosim S', 'Santi Sri Mulyani', 'TK', 'Jl. Setia I R No. 14 RT 0', 'Jati Cempaka', 'Pondok Gede', 'Bekasi', 'Jawa Barat', '081286022131', 'Aktif'),
(28, 'HAFIZAH ASCARYA', '', 181905006, 'Perempuan', 'Islam', 'Jakarta', '2012-10-28', 'Jl. Kenanga No. 52 RT 08/RW 09 Cipinang Melayu', 'Aris Budiono', 'Shinta Novia Suryani', 'TK', 'Jl. Kenanga No. 52 RT 08/', 'Cipinang Melayu', '-', 'Jakarta Timur', 'DKI Jakarta', '081389976215', 'Aktif'),
(29, 'M. ALI AMIRUL FATHONI', '', 181905007, 'Laki-laki', 'Islam', 'Jakarta', '2012-06-20', 'Jl. H. Muhyin No. 43 Jati Waringin', '-', 'Yulia ', 'TK', 'Jl. H. Muhyin No. 43 Jati', 'Jatiwaringin', 'Pondok Gede', 'Bekasi', 'Jawa Barat', '081517322267', 'Aktif'),
(30, 'aqilla bimasakti surono', '', 171804001, 'Laki-laki', 'Islam', 'Jakarta', '2011-01-04', 'Jl. Galur RT 03/RW 08 No. 15 ', 'Untung Surono', 'Niken Idasari S.', 'TK', 'Jl. Galur RT 03/RW 08 No.', 'Jati Cempaka', 'Pondok Gede', 'Bekasi', 'Jawa Barat', '-', 'Aktif'),
(31, 'Dyandra Ammaril Amin', '', 171804002, 'Laki-laki', 'Islam', 'Jakarta', '2010-04-17', 'Jl. H. Mugni V no.93 RT 03/RW 01, ', 'Tjandra Mohammad Ami', 'Malahayati', 'TK', 'Jl. H. Mugni V no.93 RT 0', 'Jati Merak', 'Pondok Gede', 'Bekasi', 'Jawa Barat', '-', 'Aktif'),
(32, 'Muhammad Hanif', '', 171804003, 'Laki-laki', 'Islam', 'Jakarta', '2010-10-03', 'Jl. Kampus Unkris No. 39 Rt/Rw 05/ 09', 'Juhaeri Mumin, ST', 'Wirda Varania, S. Si', 'TK', 'Jl. Kampus Unkris No. 39 ', 'Jati Cempaka', 'Pondok Gede', 'Bekasi', 'Jawa Barat', '-', 'Aktif'),
(33, 'Muhammad Ihsan Alfarizi', '', 171804004, 'Laki-laki', 'Islam', 'Bekasi', '2010-10-13', 'Jl. Sejahtera Rt. 07/Rw. 03', 'Wiraswasta', 'Nurochwati', 'TK', 'Jl. Sejahtera Rt. 07/Rw. ', 'Jatiwaringin', 'Pondok Gede', 'Bekasi', 'Jawa Barat', '-', 'Aktif'),
(34, 'Naufal Tsafiq Dikara', '', 171804005, 'Laki-laki', 'Islam', 'Jakarta', '2011-09-05', 'Jl. Kamojang III Blok C6/11 RT 02/RW 017', 'Nadi', 'Desy Susilawati', 'TK', 'Jl. Kamojang III Blok C6/', 'Jatiwaringin', 'Pondok Gede', 'Kota Bekasi', 'Jawa Barat', '-', 'Aktif'),
(35, 'Annisa yuri ', '', 161703001, 'Perempuan', 'Islam', 'Bekasi', '2010-02-10', 'Jl, Rawa indah no 11 rt 04 rw 06 Jaticempaka pondok gede Bekasi', 'Yusuf Ridar', 'Novi Savaranti fahra', 'TK AI', 'Jl, Rawa indah no 11 rt 0', 'Jati Cempaka', 'Pondok Gede', 'Bekasi', 'Jawa Barat', '-', 'Aktif'),
(36, 'Fayadl Najib Fadlilah', '', 161703001, 'Laki-laki', 'Islam', 'Bekasi', '2010-05-24', 'Jl, melati rt 002 rw 012 Jatiwaringin Pondok Gede Bekasi', 'Sukirman', 'Suparni', 'TK', 'Jl, melati rt 002 rw 012 ', 'Jatiwaringin', 'Pondok Gede', 'Kota Bekasi', 'Jawa Barat', '-', 'Aktif'),
(37, 'Kalyana Abqary Batubara', '', 161703004, 'Perempuan', 'Islam', 'Jakarta', '2010-01-02', 'Jl, Pangrango no 18 A rt 013 rw 05 Jatibening baru pondok gede Bekasi', 'Ben zachriatin nur, ', 'Yuliani Martita', 'TK', 'Jl, Pangrango no 18 A rt ', 'Jati Baru', 'Pondok Gede', 'Bek', 'Jawa Barat', '-', 'Aktif'),
(38, 'Diara Yunita Rasyiqah', '', 151602022, 'Perempuan', 'Islam', 'Jakarta', '2009-06-19', 'Jalan Tanjung IV komplek BDN perum Jati Indah Residence 3 Blok B7 rt 6/rw 02', 'Widhiyanto', 'Dhian Yulianti ', 'TK', 'Jalan Tanjung IV komplek ', 'Jatiwaringin', 'Pondok Gede', 'Bekasi', 'Jawa Barat', '-', 'Aktif'),
(39, 'Fabian Ezra Aryansyah', '', 0, 'Laki-laki', 'Islam', 'Jakarta', '2009-02-23', 'Jl. Cempaka No. 35 C rt 5 rw 7', 'Novi Aryansyah', 'Suryati Ningsih', 'TK', 'Jl. Cempaka No. 35 C rt 5', 'Jatiwaringin', 'Pondok Gede', 'Bekasi', 'Jawa Barat', '-', 'Aktif'),
(40, 'Fari Arifin Ikram', '', 151602019, 'Perempuan', 'Islam', 'Jakarta', '2009-02-04', 'Jl. Radar selatan rt 08/rw 05 No. 57', 'Bagyo Santoso', 'Dini Rianti', 'TK', 'Jl. Radar selatan rt 08/r', 'Jatiwaringin', 'Pondok Gede', 'Bekasi', 'Jawa Barat', '-', 'Aktif'),
(45, 'Afra Nabila', '../foto/', 2324432, 'Perempuan', 'Islam', 'jakarta', '2019-04-01', 'Bekasi', 'Mohammad Ichwanuddin', 'Lidya Ningrum', 'TK AI', 'Jl. Setia I Gg. Mayor RT ', 'Jatiwaringin', 'Pondok Gede', 'Kota Bekasi', 'Jawa Barat', '08145567678543', 'Aktif'),
(46, 'AHMAD HAFIDZ RAHMATULLAH', '../foto/', 1213131, 'Laki-laki', 'Islam', 'jakarta', '2019-04-09', 'Jl. Setia I Gg. Mayor RT 04/RW 08 No. 47 A Jati Cempaka, Pondok Gede', 'Yusuf Ridor', 'Novi Savarianti Fahr', 'TK', 'Jl. Setia I Gg. Mayor RT ', 'Jati Cempaka', 'Pondok Gede', 'Kota Bekasi', 'DKI Jakarta', '08145567678543', 'Aktif'),
(47, 'Afra Nabila', '../foto/', 90897, 'Perempuan', 'Islam', 'Sukabumi', '2019-04-07', 'Jl. Setia I R No. 14 RT 05/RW 08 Jaticempaka Kec. Pondok Gede', 'Juhaeri Mumin, ST', 'Niken Idasari S.', 'TK', 'Jl. Gamprit I Gg. H. Tala', 'Jatiwaringin', 'Pondok Gede', 'Bekasi', 'DKI Jakarta', '0886754546765', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `juz` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `nama`, `juz`) VALUES
(2, 'An-nas', 30),
(3, 'Al-falaq', 30),
(4, 'Al-Ikhlas', 30),
(5, 'Al-lahab', 30),
(6, 'An-nasr', 30),
(7, 'Al-kafirun', 30),
(8, 'Al-kausar', 30),
(9, 'Al-ma\'un', 30),
(10, 'Quraysh', 30),
(11, 'Al-fil', 30);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `id_guru` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`, `jabatan`, `id_guru`) VALUES
(1, 'Afra Nabila', 'afra', 'bcc5a4a17e88b5a31d0450dd994cf677', 'Admin', 'Admin', 0),
(3, 'Eko Purwomulyo,ST', 'eko', 'bcc5a4a17e88b5a31d0450dd994cf677', 'Kepala Sekolah', 'Kepala Sekolah', 0),
(4, 'Yenih Marlina, S.Pd', 'Marlina', 'bcc5a4a17e88b5a31d0450dd994cf677', 'Guru', 'Guru', 8),
(5, 'Shofiyah,S.Pd', 'shofiyah', 'bcc5a4a17e88b5a31d0450dd994cf677', 'Guru', 'Guru', 11),
(6, 'Rainy N.,S.Pd', 'riany', 'bcc5a4a17e88b5a31d0450dd994cf677', 'Guru', 'Guru', 9),
(7, 'Putri  Aprianti S.Pd', 'putri', 'bcc5a4a17e88b5a31d0450dd994cf677', 'Guru', 'Guru', 12),
(8, 'Nunung Nur Baiti', 'nunung', 'bcc5a4a17e88b5a31d0450dd994cf677', 'Guru Tahfidz', 'Guru', 13);

-- --------------------------------------------------------

--
-- Table structure for table `walikelas`
--

CREATE TABLE `walikelas` (
  `id_walikelas` int(5) NOT NULL,
  `id_guru` int(5) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `walikelas`
--

INSERT INTO `walikelas` (`id_walikelas`, `id_guru`, `id_kelas`, `id_siswa`, `tahun_ajaran`) VALUES
(4, 12, 1, 8, ''),
(5, 12, 1, 9, ''),
(6, 12, 1, 10, ''),
(7, 9, 11, 22, ''),
(8, 9, 11, 21, ''),
(9, 9, 11, 20, ''),
(10, 12, 9, 24, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_kurikulum` (`id_kurikulum`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id_kurikulum`),
  ADD KEY `id_pelajaran` (`id_pelajaran`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`);

--
-- Indexes for table `nilai_hafalan`
--
ALTER TABLE `nilai_hafalan`
  ADD PRIMARY KEY (`id_hafalan`),
  ADD KEY `id_surat` (`id_surat`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `nilai_rapor1`
--
ALTER TABLE `nilai_rapor1`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_kurikulum` (`id_kurikulum`);

--
-- Indexes for table `nilai_rapot2`
--
ALTER TABLE `nilai_rapot2`
  ADD PRIMARY KEY (`id_nilai2`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`id_walikelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id_kurikulum` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_pelajaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `nilai_hafalan`
--
ALTER TABLE `nilai_hafalan`
  MODIFY `id_hafalan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `nilai_rapor1`
--
ALTER TABLE `nilai_rapor1`
  MODIFY `id_nilai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `nilai_rapot2`
--
ALTER TABLE `nilai_rapot2`
  MODIFY `id_nilai2` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `walikelas`
--
ALTER TABLE `walikelas`
  MODIFY `id_walikelas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
