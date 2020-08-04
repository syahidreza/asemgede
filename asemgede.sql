-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 03, 2020 at 03:42 AM
-- Server version: 10.4.8-MariaDB-log
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asemgede`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(10) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `keterangan`) VALUES
(10, '93399.png', 'AS'),
(11, '90729.png', 'asd'),
(12, '9391.jpeg', 'mamama');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_panggilan` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` int(15) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama_lengkap`, `nama_panggilan`, `username`, `password`, `jk`, `tmpt_lahir`, `tgl_lahir`, `no_hp`, `sekolah`, `kelas`, `divisi`, `alamat`) VALUES
(3, 'Syahid Reza Mutahari', 'Reza', 'syahidreza', 'password', 'L', 'Majalengka', '1996-06-12', 2147483647, 'Polindra', '2', 'Seni Musik', 'Jl. Sawo Raya No. 96 Perum BCA, Majalengka');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_panggilan` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` int(15) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `nama_lengkap`, `nama_panggilan`, `username`, `password`, `jk`, `tmpt_lahir`, `tgl_lahir`, `no_hp`, `sekolah`, `kelas`, `divisi`, `alamat`) VALUES
(2, 'Fulan bin Fulan', 'Fulan', 'fulan', 'asd', 'L', 'Indramayu', '2000-08-11', 2147483647, 'Polindra', '1', 'Seni Tari', 'Balongan, Indramayu'),
(3, 'Rifqi Hehehe', 'iqizzz', 'qhiee', 'wkwkwk', 'L', 'majalengkaz', '2020-06-02', 92382, 'asda', '22', 'Seni Terapan', 'asdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(10) NOT NULL,
  `sejarah` text NOT NULL,
  `tujuan` text NOT NULL,
  `fungsi` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `atas_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `sejarah`, `tujuan`, `fungsi`, `no_hp`, `email`, `alamat`, `nama_bank`, `no_rek`, `atas_nama`) VALUES
(1, 'SANGGAR SENI ASEM GEDE berdiri di desa Muntur, Kecamatan Losarang Kabupaten Indramayu sejak tahun 2009 yang bernama Sanggar Seni “ASEM GEDE”, bergerak untuk melestarikan dan mengembangkan seni tari tradisonal, theater, Seni rupa dan musik khususnya kesenian tradisional Trebang randu kentir losarang, Tari Topeng, Tari Topeng Slerek, Ronggeng Ketuk Indramayu, umumnya di Kabupaten dan Provinsi serta nasional.', '1. Mendidik para generasi muda tentang pentingnya seni dan budaya Indramayu, khususnya seni dan budaya tradisional Indramayu. \r\n\r\n2.  Melatih dan membimbing para generasi muda untuk mengangkat, memelihara atau melestarikan seni dan budaya Indramayu. \r\n\r\n3. Berpartisipasi secara aktif membantu pemerintah daerah dalam melestarikan dan mengembangkan kesenian dan kebudayaan daerah Indramayu.', '1. Membantu mengembangkan potensi putra-putri daerah Losarang Indramayu pada khususnya dan Jawa Barat pada umumnya. \r\n\r\n2. Membantu menyalurkan minat dan bakat putra-putri khususnya dibidang seni dan budaya. \r\n\r\n3. Menanamkan nilai-nilai luhur dari seni dan budaya', '081222076331', 'sambaputih2@gmail.com', 'Jl. Muntur-Ranjeng, Gang Lingga Buana, RT. 06 / RW01,  No. 49 Desa Muntur, Kec. Losarang, Kab. Indramayu, Jawa Barat, Kode Pos 45253. ', 'Bank BJB ', '0083770082100', 'SANGGAR SENI ASEM GEDE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
