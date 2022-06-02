-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 01:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbguru`
--

CREATE TABLE `tbguru` (
  `nip` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `username` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbguru`
--

INSERT INTO `tbguru` (`nip`, `nama_guru`, `jenis_kelamin`, `alamat`, `username`) VALUES
(1212, 'Guru1', 'Perempuan', 'xxxxxxx', 'guru5'),
(1228, 'Hilo', 'Laki-laki', 'adjkafkjafha', 'guru7'),
(1234, 'guru2', 'Laki-laki', 'xxxxx', 'guru2'),
(1243, 'guru3', 'Laki-laki', 'ccccc', 'guru3');

-- --------------------------------------------------------

--
-- Table structure for table `tbmata_pelajaran`
--

CREATE TABLE `tbmata_pelajaran` (
  `kode_pelajaran` char(10) NOT NULL,
  `nama_pelajaran` varchar(50) NOT NULL,
  `nip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbmata_pelajaran`
--

INSERT INTO `tbmata_pelajaran` (`kode_pelajaran`, `nama_pelajaran`, `nip`) VALUES
('MP01', 'Biologi', 1212),
('MP02', 'Bahasa Inggris', 1228),
('MP03', 'Fisika', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `tbnilai`
--

CREATE TABLE `tbnilai` (
  `id_nilai` char(10) NOT NULL,
  `nis` int(10) NOT NULL,
  `kode_pelajaran` char(10) NOT NULL,
  `nilai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbnilai`
--

INSERT INTO `tbnilai` (`id_nilai`, `nis`, `kode_pelajaran`, `nilai`) VALUES
('NIL002', 12675, 'MP03', 80),
('NIL003', 12121, 'MP01', 99),
('NIL004', 123456, 'MP01', 90),
('NIL005', 123456, 'MP02', 100),
('NIL006', 12675, 'MP01', 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbsiswa`
--

CREATE TABLE `tbsiswa` (
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kelas` char(5) NOT NULL,
  `username` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbsiswa`
--

INSERT INTO `tbsiswa` (`nis`, `nama_siswa`, `jenis_kelamin`, `alamat`, `kelas`, `username`) VALUES
(12121, 'budi', 'Laki-laki', 'huaaaaaaaaa', 'X', 'budisiswa1'),
(12675, 'sayiaa', 'Perempuan', 'chsklakdoa', 'XI', 'saiyaa'),
(12788, 'Risa', 'Perempuan', 'xxxxxxxxxx', 'XII', 'risasiwa1'),
(15590, 'Haliooo', 'Laki-laki', ' Jl. Jenderal Sudirman No.1/3, RT.1/RW.3, Gelora, Tanah Abang, Central Jakarta City, Jakarta 10270', 'X', 'Halioo01'),
(123456, 'auliya', 'Perempuan', 'sffsaafa', 'X', 'siswa2');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `username` char(15) NOT NULL,
  `password` char(20) NOT NULL,
  `hakakses` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`username`, `password`, `hakakses`) VALUES
('admin', 'admin', 'ADMIN'),
('budisiswa1', 'siswa1', 'SISWA'),
('guru2', 'guru2', 'GURU'),
('guru3', 'guru3', 'GURU'),
('guru5', 'guru1', 'GURU'),
('guru7', 'guru7', 'GURU'),
('Halioo01', 'Halioo01', 'SISWA'),
('risasiwa1', 'risasiswa1', 'SISWA'),
('saiyaa', 'saiyaa', 'SISWA'),
('siswa2', 'siswa2', 'SISWA'),
('wolo2', 'siswa2', 'SISWA'),
('xixi2', 'siswa2', 'SISWA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbguru`
--
ALTER TABLE `tbguru`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tbmata_pelajaran`
--
ALTER TABLE `tbmata_pelajaran`
  ADD PRIMARY KEY (`kode_pelajaran`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `tbnilai`
--
ALTER TABLE `tbnilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `nis` (`nis`),
  ADD KEY `kode_pelajaran` (`kode_pelajaran`);

--
-- Indexes for table `tbsiswa`
--
ALTER TABLE `tbsiswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
