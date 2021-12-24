-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 01:20 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `desa1`
--

CREATE TABLE `desa1` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `desa1` varchar(100) NOT NULL,
  `desa2` varchar(100) NOT NULL,
  `desa3` varchar(100) NOT NULL,
  `desa4` varchar(100) NOT NULL,
  `desa5` varchar(100) NOT NULL,
  `desa6` varchar(100) NOT NULL,
  `desa7` varchar(100) NOT NULL,
  `desa8` varchar(100) NOT NULL,
  `desa9` varchar(100) NOT NULL,
  `desa10` varchar(100) NOT NULL,
  `desa11` varchar(100) NOT NULL,
  `desa12` varchar(100) NOT NULL,
  `desa13` varchar(100) NOT NULL,
  `desa14` varchar(100) NOT NULL,
  `desa15` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa1`
--

INSERT INTO `desa1` (`id`, `foto`, `keterangan`, `desa1`, `desa2`, `desa3`, `desa4`, `desa5`, `desa6`, `desa7`, `desa8`, `desa9`, `desa10`, `desa11`, `desa12`, `desa13`, `desa14`, `desa15`, `kecamatan`) VALUES
(1, 'lemong.jpg', 'Lemong adalah sebuah kecamatan di Kabupaten Pesisir Barat, Lampung, Indonesia.\r\n', 'Pagar Dalam,', 'Tanjung Jati,', 'Tanjung Sakti,', 'Way Batang,', 'Lemong,', 'Penengahan,', 'Malaya,', 'Bandar Pugung,', 'Bambang,', 'Cahaya Negeri,', 'Rata Agung,', 'Suka Mulya,', 'Parda Haga.', '', '', 'lemong');

-- --------------------------------------------------------

--
-- Table structure for table `desa2`
--

CREATE TABLE `desa2` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `desa1` varchar(100) NOT NULL,
  `desa2` varchar(100) NOT NULL,
  `desa3` varchar(100) NOT NULL,
  `desa4` varchar(100) NOT NULL,
  `desa5` varchar(100) NOT NULL,
  `desa6` varchar(100) NOT NULL,
  `desa7` varchar(100) NOT NULL,
  `desa8` varchar(100) NOT NULL,
  `desa9` varchar(100) NOT NULL,
  `desa10` varchar(100) NOT NULL,
  `desa11` varchar(100) NOT NULL,
  `desa12` varchar(100) NOT NULL,
  `desa13` varchar(100) NOT NULL,
  `desa14` varchar(100) NOT NULL,
  `desa15` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa2`
--

INSERT INTO `desa2` (`id`, `foto`, `keterangan`, `desa1`, `desa2`, `desa3`, `desa4`, `desa5`, `desa6`, `desa7`, `desa8`, `desa9`, `desa10`, `desa11`, `desa12`, `desa13`, `desa14`, `desa15`, `kecamatan`) VALUES
(1, 'pesisirutara.jpg', 'Kecamatan Pesisir Utara resmi menjadi wilayah Kabupaten Pesisir Barat berdasarkan Undang-undang Nomor 22 Tahun 2012 tentang Pembentukan Kabupaten Pesisir Barat.', 'Kuripan,', 'Walur,', 'Kerbang Langgar,', 'Padang Rindu,', 'Negeri Ratu,', 'Kerbang Dalam,', 'Kota Karang,', 'Balam,', 'Way Narta,', 'Batu Raja,', 'Pemancar,', 'Gedau.', '', '', '', 'pesisirutara');

-- --------------------------------------------------------

--
-- Table structure for table `desa3`
--

CREATE TABLE `desa3` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `desa1` varchar(100) NOT NULL,
  `desa2` varchar(100) NOT NULL,
  `desa3` varchar(100) NOT NULL,
  `desa4` varchar(100) NOT NULL,
  `desa5` varchar(100) NOT NULL,
  `desa6` varchar(100) NOT NULL,
  `desa7` varchar(100) NOT NULL,
  `desa8` varchar(100) NOT NULL,
  `desa9` varchar(100) NOT NULL,
  `desa10` varchar(100) NOT NULL,
  `desa11` varchar(100) NOT NULL,
  `desa12` varchar(100) NOT NULL,
  `desa13` varchar(100) NOT NULL,
  `desa14` varchar(100) NOT NULL,
  `desa15` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa3`
--

INSERT INTO `desa3` (`id`, `foto`, `keterangan`, `desa1`, `desa2`, `desa3`, `desa4`, `desa5`, `desa6`, `desa7`, `desa8`, `desa9`, `desa10`, `desa11`, `desa12`, `desa13`, `desa14`, `desa15`, `kecamatan`) VALUES
(1, 'pulaupisang.jpg', 'Pulau Pisang adalah sebuah kecamatan yang berada di wilayah Kabupaten Pesisir Barat, Lampung, Indonesia.', 'Pasar Pulau Pisang,', 'Labuhan,', 'Bandar Dalam,', 'Pekon Lok,', 'Sukadana,', 'Sukamarga.', '', '', '', '', '', '', '', '', '', 'pulaupisang');

-- --------------------------------------------------------

--
-- Table structure for table `desa4`
--

CREATE TABLE `desa4` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `desa1` varchar(100) NOT NULL,
  `desa2` varchar(100) NOT NULL,
  `desa3` varchar(100) NOT NULL,
  `desa4` varchar(100) NOT NULL,
  `desa5` varchar(100) NOT NULL,
  `desa6` varchar(100) NOT NULL,
  `desa7` varchar(100) NOT NULL,
  `desa8` varchar(100) NOT NULL,
  `desa9` varchar(100) NOT NULL,
  `desa10` varchar(100) NOT NULL,
  `desa11` varchar(100) NOT NULL,
  `desa12` varchar(100) NOT NULL,
  `desa13` varchar(100) NOT NULL,
  `desa14` varchar(100) NOT NULL,
  `desa15` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa4`
--

INSERT INTO `desa4` (`id`, `foto`, `keterangan`, `desa1`, `desa2`, `desa3`, `desa4`, `desa5`, `desa6`, `desa7`, `desa8`, `desa9`, `desa10`, `desa11`, `desa12`, `desa13`, `desa14`, `desa15`, `kecamatan`) VALUES
(1, 'karyapenggawa.jpg', 'Karya Penggawa adalah sebuah kecamatan di Kabupaten Pesisir Barat, Lampung, Indonesia.', 'La’ay,', 'Penggawa V Ulu,', 'Penengahan,', 'Way Nukak,', 'Kebuayan,', 'Menyancang,', 'Penggawa V Tengah,', 'Way Sindi,', 'Way Sindi Utara,', 'Tebakak Way Sindi,', 'Way Sindi Hanuan.', '', '', '', '', 'karyapenggawa');

-- --------------------------------------------------------

--
-- Table structure for table `desa5`
--

CREATE TABLE `desa5` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `desa1` varchar(100) NOT NULL,
  `desa2` varchar(100) NOT NULL,
  `desa3` varchar(100) NOT NULL,
  `desa4` varchar(100) NOT NULL,
  `desa5` varchar(100) NOT NULL,
  `desa6` varchar(100) NOT NULL,
  `desa7` varchar(100) NOT NULL,
  `desa8` varchar(100) NOT NULL,
  `desa9` varchar(100) NOT NULL,
  `desa10` varchar(100) NOT NULL,
  `desa11` varchar(100) NOT NULL,
  `desa12` varchar(100) NOT NULL,
  `desa13` varchar(100) NOT NULL,
  `desa14` varchar(100) NOT NULL,
  `desa15` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa5`
--

INSERT INTO `desa5` (`id`, `foto`, `keterangan`, `desa1`, `desa2`, `desa3`, `desa4`, `desa5`, `desa6`, `desa7`, `desa8`, `desa9`, `desa10`, `desa11`, `desa12`, `desa13`, `desa14`, `desa15`, `kecamatan`) VALUES
(1, 'waykrui.jpg', 'Way Krui adalah sebuah kecamatan di Kabupaten Pesisir Barat, Lampung, Indonesia.', 'Pajar Bulan,', 'Bumi Waras,', 'Banjar Agung,', 'Penggawa V Ilir,', 'Ulu Krui,', 'Labuhan Mandi,', 'Gunung Kemala Timur,', 'Gunung Kemala,', 'Sukabaru,', 'Penggawa V.', '', '', '', '', '', 'waykrui');

-- --------------------------------------------------------

--
-- Table structure for table `desa6`
--

CREATE TABLE `desa6` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `desa1` varchar(100) NOT NULL,
  `desa2` varchar(100) NOT NULL,
  `desa3` varchar(100) NOT NULL,
  `desa4` varchar(100) NOT NULL,
  `desa5` varchar(100) NOT NULL,
  `desa6` varchar(100) NOT NULL,
  `desa7` varchar(100) NOT NULL,
  `desa8` varchar(100) NOT NULL,
  `desa9` varchar(100) NOT NULL,
  `desa10` varchar(100) NOT NULL,
  `desa11` varchar(100) NOT NULL,
  `desa12` varchar(100) NOT NULL,
  `desa13` varchar(100) NOT NULL,
  `desa14` varchar(100) NOT NULL,
  `desa15` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa6`
--

INSERT INTO `desa6` (`id`, `foto`, `keterangan`, `desa1`, `desa2`, `desa3`, `desa4`, `desa5`, `desa6`, `desa7`, `desa8`, `desa9`, `desa10`, `desa11`, `desa12`, `desa13`, `desa14`, `desa15`, `kecamatan`) VALUES
(1, 'pesisirtengah.jpg', 'Pesisir Tengah adalah sebuah kecamatan yang berada di wilayah Kabupaten Pesisir Barat, Lampung, Indonesia.', 'Way Redak,', 'Kampung Jawa,', 'Pahmungan,', 'Seray,', 'Rawas,', 'Pasar Krui,', 'Pasar Kota Krui.', '', '', '', '', '', '', '', '', 'pesisirtengah');

-- --------------------------------------------------------

--
-- Table structure for table `desa7`
--

CREATE TABLE `desa7` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `desa1` varchar(100) NOT NULL,
  `desa2` varchar(100) NOT NULL,
  `desa3` varchar(100) NOT NULL,
  `desa4` varchar(100) NOT NULL,
  `desa5` varchar(100) NOT NULL,
  `desa6` varchar(100) NOT NULL,
  `desa7` varchar(100) NOT NULL,
  `desa8` varchar(100) NOT NULL,
  `desa9` varchar(100) NOT NULL,
  `desa10` varchar(100) NOT NULL,
  `desa11` varchar(100) NOT NULL,
  `desa12` varchar(100) NOT NULL,
  `desa13` varchar(100) NOT NULL,
  `desa14` varchar(100) NOT NULL,
  `desa15` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa7`
--

INSERT INTO `desa7` (`id`, `foto`, `keterangan`, `desa1`, `desa2`, `desa3`, `desa4`, `desa5`, `desa6`, `desa7`, `desa8`, `desa9`, `desa10`, `desa11`, `desa12`, `desa13`, `desa14`, `desa15`, `kecamatan`) VALUES
(1, 'kruiselatan.jpg', 'Krui Selatan adalah sebuah kecamatan di Kabupaten Pesisir Barat, Lampung, Indonesia. berrbatasan dengan kecamatan Pesisir Selatan dan Kecamatan Pesisir Tengah.', 'Balai Kencana,', 'Way Napal,', 'Padang Haluan,', 'Walur,', 'Way Suluh,', 'Suka Jadi,', 'Pemerihan,', 'Lintik,', 'Mandiri Sejati,', 'Padang Raya.', '', '', '', '', '', 'kruiselatan');

-- --------------------------------------------------------

--
-- Table structure for table `desa8`
--

CREATE TABLE `desa8` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `desa1` varchar(100) NOT NULL,
  `desa2` varchar(100) NOT NULL,
  `desa3` varchar(100) NOT NULL,
  `desa4` varchar(100) NOT NULL,
  `desa5` varchar(100) NOT NULL,
  `desa6` varchar(100) NOT NULL,
  `desa7` varchar(100) NOT NULL,
  `desa8` varchar(100) NOT NULL,
  `desa9` varchar(100) NOT NULL,
  `desa10` varchar(100) NOT NULL,
  `desa11` varchar(100) NOT NULL,
  `desa12` varchar(100) NOT NULL,
  `desa13` varchar(100) NOT NULL,
  `desa14` varchar(100) NOT NULL,
  `desa15` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa8`
--

INSERT INTO `desa8` (`id`, `foto`, `keterangan`, `desa1`, `desa2`, `desa3`, `desa4`, `desa5`, `desa6`, `desa7`, `desa8`, `desa9`, `desa10`, `desa11`, `desa12`, `desa13`, `desa14`, `desa15`, `kecamatan`) VALUES
(1, 'pesisirselatan.jpg', 'Pesisir Tengah adalah sebuah kecamatan yang berada di wilayah Kabupaten Pesisir Barat, Lampung, Indonesia.', 'Negeri Ratu Tenumbang,', 'Sukarame,', 'Pelita Jaya,', 'Sumur Jaya,', 'Tanjung Jati,', 'Pagar Dalam,', 'Tanjung Setia,', 'Way Jambu,', 'Marang,', 'Tanjung Raya,', 'Bangun Negara,', 'Ulok Manik,', 'Biha,', 'Tulung Bamban,', 'Paku Negara.', 'pesisir selatan');

-- --------------------------------------------------------

--
-- Table structure for table `desa9`
--

CREATE TABLE `desa9` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `desa1` varchar(100) NOT NULL,
  `desa2` varchar(100) NOT NULL,
  `desa3` varchar(100) NOT NULL,
  `desa4` varchar(100) NOT NULL,
  `desa5` varchar(100) NOT NULL,
  `desa6` varchar(100) NOT NULL,
  `desa7` varchar(100) NOT NULL,
  `desa8` varchar(100) NOT NULL,
  `desa9` varchar(100) NOT NULL,
  `desa10` varchar(100) NOT NULL,
  `desa11` varchar(100) NOT NULL,
  `desa12` varchar(100) NOT NULL,
  `desa13` varchar(100) NOT NULL,
  `desa14` varchar(100) NOT NULL,
  `desa15` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa9`
--

INSERT INTO `desa9` (`id`, `foto`, `keterangan`, `desa1`, `desa2`, `desa3`, `desa4`, `desa5`, `desa6`, `desa7`, `desa8`, `desa9`, `desa10`, `desa11`, `desa12`, `desa13`, `desa14`, `desa15`, `kecamatan`) VALUES
(1, 'mengambur.JPG', 'Ngambur adalah sebuah kecamatan di Kabupaten Pesisir Barat, Lampung, Indonesia. ', 'Sumber Agung,', 'Ulok Mukti,', 'Negeri Ratu Ngambur,', 'Pekon Mon,', 'Gedung Cahya Kuningan,', 'Suka Banjar,', 'Suka Negara,', 'Muara Tembulih,', 'Bumi Ratu.', '', '', '', '', '', '', 'ngambur');

-- --------------------------------------------------------

--
-- Table structure for table `desa10`
--

CREATE TABLE `desa10` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `desa1` varchar(100) NOT NULL,
  `desa2` varchar(100) NOT NULL,
  `desa3` varchar(100) NOT NULL,
  `desa4` varchar(100) NOT NULL,
  `desa5` varchar(100) NOT NULL,
  `desa6` varchar(100) NOT NULL,
  `desa7` varchar(100) NOT NULL,
  `desa8` varchar(100) NOT NULL,
  `desa9` varchar(100) NOT NULL,
  `desa10` varchar(100) NOT NULL,
  `desa11` varchar(100) NOT NULL,
  `desa12` varchar(100) NOT NULL,
  `desa13` varchar(100) NOT NULL,
  `desa14` varchar(100) NOT NULL,
  `desa15` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa10`
--

INSERT INTO `desa10` (`id`, `foto`, `keterangan`, `desa1`, `desa2`, `desa3`, `desa4`, `desa5`, `desa6`, `desa7`, `desa8`, `desa9`, `desa10`, `desa11`, `desa12`, `desa13`, `desa14`, `desa15`, `kecamatan`) VALUES
(1, 'ngaras.jpg', 'Ngaras adalah sebuah kecamatan di Kabupaten Pesisir Barat, Lampung, Indonesia. Sebelum tanggal 20 September 2017 kecamatan ini bernama Kecamatan Bengkunat.', 'Negeri Ratu Ngaras,', 'Bandar Jaya,', 'Kota Batu,', 'Mulang Maya,', 'Raja Basa,', 'Padang Dalam,', 'Suka Maju,', 'Sukarame,', 'Parda Suka.', '', '', '', '', '', '', 'ngaras');

-- --------------------------------------------------------

--
-- Table structure for table `desa11`
--

CREATE TABLE `desa11` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `desa1` varchar(100) NOT NULL,
  `desa2` varchar(100) NOT NULL,
  `desa3` varchar(100) NOT NULL,
  `desa4` varchar(100) NOT NULL,
  `desa5` varchar(100) NOT NULL,
  `desa6` varchar(100) NOT NULL,
  `desa7` varchar(100) NOT NULL,
  `desa8` varchar(100) NOT NULL,
  `desa9` varchar(100) NOT NULL,
  `desa10` varchar(100) NOT NULL,
  `desa11` varchar(100) NOT NULL,
  `desa12` varchar(100) NOT NULL,
  `desa13` varchar(100) NOT NULL,
  `desa14` varchar(100) NOT NULL,
  `desa15` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa11`
--

INSERT INTO `desa11` (`id`, `foto`, `keterangan`, `desa1`, `desa2`, `desa3`, `desa4`, `desa5`, `desa6`, `desa7`, `desa8`, `desa9`, `desa10`, `desa11`, `desa12`, `desa13`, `desa14`, `desa15`, `kecamatan`) VALUES
(1, 'bengkunat.jpg', 'Bangkunat adalah sebuah kecamatan di Kabupaten Pesisir Barat, Lampung, Indonesia. Sebelum tanggal 20 September 2017 kecamatan ini bernama Kecamatan Bengkunat Belimbing.', 'Pagar Bukit,', 'Tanjung Kemala,', 'Suka Marga,', 'Penyandingan,', 'Kota Jawa,', 'Bandar Dalam,', 'Way Haru,', 'Pemerihan,', 'Suka Negeri,', 'Sumberejo,', 'Tanjung Rejo,', 'Siring Gading,', 'Way Tias,', 'Bukit Induk.', '', 'bengkunat');

-- --------------------------------------------------------

--
-- Table structure for table `desa12`
--

CREATE TABLE `desa12` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `desa1` varchar(100) NOT NULL,
  `desa2` varchar(100) NOT NULL,
  `desa3` varchar(100) NOT NULL,
  `desa4` varchar(100) NOT NULL,
  `desa5` varchar(100) NOT NULL,
  `desa6` varchar(100) NOT NULL,
  `desa7` varchar(100) NOT NULL,
  `desa8` varchar(100) NOT NULL,
  `desa9` varchar(100) NOT NULL,
  `desa10` varchar(100) NOT NULL,
  `desa11` varchar(100) NOT NULL,
  `desa12` varchar(100) NOT NULL,
  `desa13` varchar(100) NOT NULL,
  `desa14` varchar(100) NOT NULL,
  `desa15` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa12`
--

INSERT INTO `desa12` (`id`, `foto`, `keterangan`, `desa1`, `desa2`, `desa3`, `desa4`, `desa5`, `desa6`, `desa7`, `desa8`, `desa9`, `desa10`, `desa11`, `desa12`, `desa13`, `desa14`, `desa15`, `kecamatan`) VALUES
(1, 'lemong.jpg', 'Lemong adalah sebuah kecamatan di Kabupaten Pesisir Barat, Lampung, Indonesia.\r\n', 'Pagar Dalam,', 'Tanjung Jati,', 'Tanjung Sakti,', 'Way Batang,', 'Lemong,', 'Penengahan,', 'Malaya,', 'Bandar Pugung,', 'Bambang,', 'Cahaya Negeri,', 'Rata Agung,', 'Suka Mulya,', 'Parda Haga.', '', '', 'lemong'),
(2, 'pesisirutara.jpg', 'Kecamatan Pesisir Utara resmi menjadi wilayah Kabupaten Pesisir Barat berdasarkan Undang-undang Nomor 22 Tahun 2012 tentang Pembentukan Kabupaten Pesisir Barat.', 'Kuripan,', 'Walur,', 'Kerbang Langgar,', 'Padang Rindu,', 'Negeri Ratu,', 'Kerbang Dalam,', 'Kota Karang,', 'Balam,', 'Way Narta,', 'Batu Raja,', 'Pemancar,', 'Gedau.', '', '', '', 'pesisirutara'),
(3, 'pulaupisang.jpg', 'Pulau Pisang adalah sebuah kecamatan yang berada di wilayah Kabupaten Pesisir Barat, Lampung, Indonesia.', 'Pasar Pulau Pisang,', 'Labuhan,', 'Bandar Dalam,', 'Pekon Lok,', 'Sukadana,', 'Sukamarga.', '', '', '', '', '', '', '', '', '', 'pulaupisang'),
(4, 'karyapenggawa.jpg', 'Karya Penggawa adalah sebuah kecamatan di Kabupaten Pesisir Barat, Lampung, Indonesia.', 'La’ay,', 'Penggawa V Ulu,', 'Penengahan,', 'Way Nukak,', 'Kebuayan,', 'Menyancang,', 'Penggawa V Tengah,', 'Way Sindi,', 'Way Sindi Utara,', 'Tebakak Way Sindi,', 'Way Sindi Hanuan.', '', '', '', '', 'karyapenggawa'),
(5, 'waykrui.jpg', 'Way Krui adalah sebuah kecamatan di Kabupaten Pesisir Barat, Lampung, Indonesia.', 'Pajar Bulan,', 'Bumi Waras,', 'Banjar Agung,', 'Penggawa V Ilir,', 'Ulu Krui,', 'Labuhan Mandi,', 'Gunung Kemala Timur,', 'Gunung Kemala,', 'Sukabaru,', 'Penggawa V.', '', '', '', '', '', 'waykrui'),
(6, 'pesisirtengah.jpg', 'Pesisir Tengah adalah sebuah kecamatan yang berada di wilayah Kabupaten Pesisir Barat, Lampung, Indonesia.', 'Way Redak,', 'Kampung Jawa,', 'Pahmungan,', 'Seray,', 'Rawas,', 'Pasar Krui,', 'Pasar Kota Krui.', '', '', '', '', '', '', '', '', 'pesisirtengah'),
(7, 'kruiselatan.jpg', 'Krui Selatan adalah sebuah kecamatan di Kabupaten Pesisir Barat, Lampung, Indonesia. berrbatasan dengan kecamatan Pesisir Selatan dan Kecamatan Pesisir Tengah.', 'Balai Kencana,', 'Way Napal,', 'Padang Haluan,', 'Walur,', 'Way Suluh,', 'Suka Jadi,', 'Pemerihan,', 'Lintik,', 'Mandiri Sejati,', 'Padang Raya.', '', '', '', '', '', 'kruiselatan'),
(8, 'pesisirselatan.jpg', 'Pesisir Tengah adalah sebuah kecamatan yang berada di wilayah Kabupaten Pesisir Barat, Lampung, Indonesia.', 'Negeri Ratu Tenumbang,', 'Sukarame,', 'Pelita Jaya,', 'Sumur Jaya,', 'Tanjung Jati,', 'Pagar Dalam,', 'Tanjung Setia,', 'Way Jambu,', 'Marang,', 'Tanjung Raya,', 'Bangun Negara,', 'Ulok Manik,', 'Biha,', 'Tulung Bamban,', 'Paku Negara.', 'pesisir selatan'),
(9, 'ngambur.jpg', 'Ngambur adalah sebuah kecamatan di Kabupaten Pesisir Barat, Lampung, Indonesia. ', 'Sumber Agung,', 'Ulok Mukti,', 'Negeri Ratu Ngambur,', 'Pekon Mon,', 'Gedung Cahya Kuningan,', 'Suka Banjar,', 'Suka Negara,', 'Muara Tembulih,', 'Bumi Ratu.', '', '', '', '', '', '', 'ngambur'),
(10, 'ngaras.jpg', 'Ngaras adalah sebuah kecamatan di Kabupaten Pesisir Barat, Lampung, Indonesia. Sebelum tanggal 20 September 2017 kecamatan ini bernama Kecamatan Bengkunat.', 'Negeri Ratu Ngaras,', 'Bandar Jaya,', 'Kota Batu,', 'Mulang Maya,', 'Raja Basa,', 'Padang Dalam,', 'Suka Maju,', 'Sukarame,', 'Parda Suka.', '', '', '', '', '', '', 'ngaras'),
(11, 'bengkunat.jpg', 'Bangkunat adalah sebuah kecamatan di Kabupaten Pesisir Barat, Lampung, Indonesia. Sebelum tanggal 20 September 2017 kecamatan ini bernama Kecamatan Bengkunat Belimbing.', 'Pagar Bukit,', 'Tanjung Kemala,', 'Suka Marga,', 'Penyandingan,', 'Kota Jawa,', 'Bandar Dalam,', 'Way Haru,', 'Pemerihan,', 'Suka Negeri,', 'Sumberejo,', 'Tanjung Rejo,', 'Siring Gading,', 'Way Tias,', 'Bukit Induk.', '', 'bengkunat');

-- --------------------------------------------------------

--
-- Table structure for table `umum`
--

CREATE TABLE `umum` (
  `id` int(11) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `jumdesa` int(255) NOT NULL,
  `tps` varchar(255) NOT NULL,
  `tpstt` int(255) NOT NULL,
  `tpstd` int(255) NOT NULL,
  `tpsttd` int(255) NOT NULL,
  `fbab` varchar(255) NOT NULL,
  `fbabjs` int(255) NOT NULL,
  `fbabju` int(255) NOT NULL,
  `fbabbj` int(255) NOT NULL,
  `pat` varchar(255) NOT NULL,
  `patipal` int(255) NOT NULL,
  `patsawah` int(255) NOT NULL,
  `patlt` int(255) NOT NULL,
  `patl` int(255) NOT NULL,
  `splc` varchar(255) NOT NULL,
  `splcdl` int(255) NOT NULL,
  `splcrs` int(255) NOT NULL,
  `splcd` int(255) NOT NULL,
  `splcsi` int(255) NOT NULL,
  `saum` varchar(255) NOT NULL,
  `sauma` int(255) NOT NULL,
  `saumdm` int(255) NOT NULL,
  `saumtm` int(255) NOT NULL,
  `saumaiu` int(255) NOT NULL,
  `saums` int(255) NOT NULL,
  `saumd` int(255) NOT NULL,
  `sauc` varchar(255) NOT NULL,
  `saucma` int(255) NOT NULL,
  `saucdm` int(255) NOT NULL,
  `sauctm` int(255) NOT NULL,
  `saucaiu` int(255) NOT NULL,
  `saucs` int(255) NOT NULL,
  `saucd` int(255) NOT NULL,
  `slug` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `umum`
--

INSERT INTO `umum` (`id`, `kecamatan`, `jumdesa`, `tps`, `tpstt`, `tpstd`, `tpsttd`, `fbab`, `fbabjs`, `fbabju`, `fbabbj`, `pat`, `patipal`, `patsawah`, `patlt`, `patl`, `splc`, `splcdl`, `splcrs`, `splcd`, `splcsi`, `saum`, `sauma`, `saumdm`, `saumtm`, `saumaiu`, `saums`, `saumd`, `sauc`, `saucma`, `saucdm`, `sauctm`, `saucaiu`, `saucs`, `saucd`, `slug`) VALUES
(1, 'Lemong', 10, 'Tempat Pembuangan Sampah Sementara (Desa)', 20, 30, 40, 'Penggunaan Fasilitas Buang Air Besar (Desa)', 50, 80, 8, 'Tempat Pembuangan Akhir Tinja', 0, 0, 8, 0, 'Tempat / Saluran Pembuangan Limbah Cair dari Air Mandi (Desa)', 2, 4, 4, 3, 'Sumber Air untuk Minum', 3, 0, 4, 0, 6, 0, 'Sumber Air untuk Mandi / Cuci (Desa)', 4, 0, 4, 0, 5, 0, ''),
(2, 'Pesisir Utara', 12, 'Tempat Pembuangan Sampah Sementara (Desa)', 12, 0, 0, 'Penggunaan Fasilitas Buang Air Besar (Desa)', 12, 0, 0, 'Tempat Pembuangan Akhir Tinja', 3, 1, 7, 1, 'Tempat / Saluran Pembuangan Limbah Cair dari Air Mandi (Desa)', 3, 5, 3, 1, 'Sumber Air untuk Minum', 2, 0, 8, 0, 2, 0, 'Sumber Air untuk Mandi / Cuci (Desa)', 3, 0, 5, 0, 4, 0, ''),
(3, 'Pulau Pisang', 6, 'Tempat Pembuangan Sampah Sementara (Desa)', 6, 0, 0, 'Penggunaan Fasilitas Buang Air Besar (Desa)', 6, 0, 0, 'Tempat Pembuangan Akhir Tinja', 2, 0, 4, 0, 'Tempat / Saluran Pembuangan Limbah Cair dari Air Mandi (Desa)', 5, 0, 1, 0, 'Sumber Air untuk Minum', 0, 0, 0, 0, 6, 0, 'Sumber Air untuk Mandi / Cuci (Desa)', 0, 0, 0, 0, 6, 0, ''),
(4, 'Karya Penggawa', 11, 'Tempat Pembuangan Sampah Sementara (Desa)', 12, 0, 0, 'Penggunaan Fasilitas Buang Air Besar (Desa)', 11, 0, 1, 'Tempat Pembuangan Akhir Tinja', 8, 2, 1, 1, 'Tempat / Saluran Pembuangan Limbah Cair dari Air Mandi (Desa)', 4, 1, 6, 1, 'Sumber Air untuk Minum', 3, 0, 0, 0, 9, 0, 'Sumber Air untuk Mandi / Cuci (Desa)', 3, 0, 0, 0, 9, 0, ''),
(5, 'Way Krui', 10, 'Tempat Pembuangan Sampah Sementara (Desa)', 9, 1, 0, 'Penggunaan Fasilitas Buang Air Besar (Desa)', 8, 1, 1, 'Tempat Pembuangan Akhir Tinja', 7, 1, 1, 1, 'Tempat / Saluran Pembuangan Limbah Cair dari Air Mandi (Desa)', 1, 1, 8, 0, 'Sumber Air untuk Minum', 2, 0, 0, 0, 8, 0, 'Sumber Air untuk Mandi / Cuci (Desa)', 1, 0, 0, 0, 8, 0, ''),
(6, 'Pesisir Tengah', 7, 'Tempat Pembuangan Sampah Sementara (Desa)', 6, 2, 0, 'Penggunaan Fasilitas Buang Air Besar (Desa)', 8, 0, 0, 'Tempat Pembuangan Akhir Tinja', 0, 1, 6, 1, 'Tempat / Saluran Pembuangan Limbah Cair dari Air Mandi (Desa)', 4, 0, 4, 0, 'Sumber Air untuk Minum', 0, 0, 0, 3, 5, 0, 'Sumber Air untuk Mandi / Cuci (Desa)', 0, 0, 0, 0, 8, 0, ''),
(7, 'Krui Selatan', 10, 'Tempat Pembuangan Sampah Sementara (Desa)', 10, 0, 0, 'Penggunaan Fasilitas Buang Air Besar (Desa)', 10, 0, 0, 'Tempat Pembuangan Akhir Tinja', 0, 0, 10, 0, 'Tempat / Saluran Pembuangan Limbah Cair dari Air Mandi (Desa)', 10, 0, 0, 0, 'Sumber Air untuk Minum', 0, 0, 0, 0, 10, 0, 'Sumber Air untuk Mandi / Cuci (Desa)', 0, 0, 0, 0, 10, 0, ''),
(8, 'Pesisir Selatan', 15, 'Tempat Pembuangan Sampah Sementara (Desa)', 13, 1, 1, 'Penggunaan Fasilitas Buang Air Besar (Desa)', 15, 0, 0, 'Tempat Pembuangan Akhir Tinja', 9, 0, 6, 0, 'Tempat / Saluran Pembuangan Limbah Cair dari Air Mandi (Desa)', 15, 0, 0, 0, 'Sumber Air untuk Minum', 0, 0, 0, 2, 13, 0, 'Sumber Air untuk Mandi / Cuci (Desa)', 0, 0, 0, 0, 15, 0, ''),
(9, 'Ngambur', 9, 'Tempat Pembuangan Sampah Sementara (Desa)', 9, 0, 0, 'Penggunaan Fasilitas Buang Air Besar (Desa)', 8, 0, 1, 'Tempat Pembuangan Akhir Tinja', 0, 0, 8, 1, 'Tempat / Saluran Pembuangan Limbah Cair dari Air Mandi (Desa)', 7, 0, 1, 1, 'Sumber Air untuk Minum', 0, 0, 0, 0, 9, 0, 'Sumber Air untuk Mandi / Cuci (Desa)', 0, 0, 0, 0, 9, 0, ''),
(10, 'Ngaras', 9, 'Tempat Pembuangan Sampah Sementara (Desa)', 9, 0, 0, 'Penggunaan Fasilitas Buang Air Besar (Desa)', 9, 0, 0, 'Tempat Pembuangan Akhir Tinja', 0, 0, 9, 0, 'Tempat / Saluran Pembuangan Limbah Cair dari Air Mandi (Desa)', 7, 0, 2, 0, 'Sumber Air untuk Minum', 0, 0, 0, 0, 9, 0, 'Sumber Air untuk Mandi / Cuci (Desa)', 0, 0, 0, 0, 7, 2, ''),
(11, 'Bangkunat', 14, 'Tempat Pembuangan Sampah Sementara (Desa)', 14, 0, 0, 'Penggunaan Fasilitas Buang Air Besar (Desa)', 10, 0, 4, 'Tempat Pembuangan Akhir Tinja', 3, 0, 7, 4, 'Tempat / Saluran Pembuangan Limbah Cair dari Air Mandi (Desa)', 11, 0, 3, 0, 'Sumber Air untuk Minum', 0, 0, 0, 0, 14, 0, 'Sumber Air untuk Mandi / Cuci (Desa)', 0, 0, 0, 0, 13, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_created_at`) VALUES
(1, 'admin1', 'admin1@gmail.com', '$2y$10$7SHUUX22NwREH7PoeSI.XOS4SGzKl4K/s9ZWWemhNDBU0gZ8PMUxm', '2021-08-27 00:13:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desa1`
--
ALTER TABLE `desa1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa2`
--
ALTER TABLE `desa2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa3`
--
ALTER TABLE `desa3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa4`
--
ALTER TABLE `desa4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa5`
--
ALTER TABLE `desa5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa6`
--
ALTER TABLE `desa6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa7`
--
ALTER TABLE `desa7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa8`
--
ALTER TABLE `desa8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa9`
--
ALTER TABLE `desa9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa10`
--
ALTER TABLE `desa10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa11`
--
ALTER TABLE `desa11`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa12`
--
ALTER TABLE `desa12`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umum`
--
ALTER TABLE `umum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kecamatan` (`kecamatan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `umum`
--
ALTER TABLE `umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
