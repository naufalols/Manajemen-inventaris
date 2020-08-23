-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 12:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labinventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(10) NOT NULL,
  `nama_model` varchar(30) NOT NULL,
  `tahun_perolehan` date NOT NULL,
  `lantai` int(10) NOT NULL,
  `ruang` int(10) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `terakhir_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_model`, `tahun_perolehan`, `lantai`, `ruang`, `kondisi`, `terakhir_update`) VALUES
(1000, 'ASUS M32', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:34'),
(1001, 'ASUS M32', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:34'),
(1002, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1003, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1004, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1005, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1006, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1007, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1008, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1009, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1010, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1011, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1012, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1013, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1014, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1015, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1016, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1017, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1018, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1019, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1020, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1021, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1022, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1023, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1024, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1025, 'HP SLIMLINE 290', '2020-01-21', 4, 10, '1', '2020-02-13 21:37:07'),
(1026, 'ASUS M32', '2020-01-21', 4, 11, '1', '2020-02-13 21:38:47'),
(1027, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1028, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1029, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1030, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1031, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1032, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1033, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1034, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1035, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1036, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1037, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1038, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1039, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1040, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1041, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1042, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1043, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1044, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1045, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1046, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1047, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1048, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1049, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1050, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1051, 'DELL XPS 8100', '2020-01-21', 4, 11, '1', '2020-02-13 21:39:35'),
(1052, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1053, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1054, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1055, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1056, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1057, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1058, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1059, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1060, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1061, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1062, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1063, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1064, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1065, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1066, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1067, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1068, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1069, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1070, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1071, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1072, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1073, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1074, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1075, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1076, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1077, 'DELL XPS 8100', '2020-01-21', 4, 12, '1', '2020-02-13 21:40:41'),
(1078, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:41:14'),
(1079, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:41:14'),
(1080, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1081, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1082, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1083, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1084, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1085, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1086, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1087, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1088, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1089, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1090, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1091, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1092, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1093, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1094, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1095, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1096, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1097, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1098, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1099, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1100, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1101, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1102, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1103, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1104, 'ASUS M32', '2020-01-21', 4, 13, '1', '2020-02-13 21:42:01'),
(1105, 'MAC', '2020-01-21', 4, 14, '1', '2020-02-13 21:42:50'),
(1106, 'MAC', '2020-01-21', 4, 14, '1', '2020-02-13 21:42:50'),
(1107, 'MAC', '2020-01-21', 4, 14, '1', '2020-02-13 21:42:50'),
(1108, 'MAC', '2020-01-21', 4, 14, '1', '2020-02-13 21:42:50'),
(1109, 'MAC', '2020-01-21', 4, 14, '1', '2020-02-13 21:42:50'),
(1110, 'MAC', '2020-01-21', 4, 14, '1', '2020-02-13 21:42:50'),
(1111, 'LENOVO', '2020-01-21', 4, 14, '1', '2020-02-13 21:44:00'),
(1112, 'LENOVO', '2020-01-21', 4, 14, '1', '2020-02-13 21:44:00'),
(1113, 'LENOVO', '2020-01-21', 4, 14, '1', '2020-02-13 21:44:00'),
(1114, 'LENOVO', '2020-01-21', 4, 14, '1', '2020-02-13 21:44:00'),
(1115, 'LENOVO', '2020-01-21', 4, 14, '1', '2020-02-13 21:44:00'),
(1116, 'LENOVO', '2020-01-21', 4, 14, '1', '2020-02-13 21:44:00'),
(1117, 'LENOVO', '2020-01-21', 4, 14, '1', '2020-02-13 21:44:00'),
(1118, 'LENOVO', '2020-01-21', 4, 14, '1', '2020-02-13 21:44:00'),
(1119, 'LENOVO', '2020-01-21', 4, 14, '1', '2020-02-13 21:44:00'),
(1120, 'LENOVO', '2020-01-21', 4, 14, '1', '2020-02-13 21:44:00'),
(1121, 'LENOVO IDEA MCK', '2020-01-21', 4, 14, '1', '2020-02-13 21:44:33'),
(1122, 'LENOVO IDEA MCK', '2020-01-21', 4, 14, '1', '2020-02-13 21:44:33'),
(1123, 'LENOVO IDEA MCK', '2020-01-21', 4, 14, '1', '2020-02-13 21:44:33'),
(1135, 'qweqweqwe', '2020-02-29', 4, 401, '4', '2020-02-10 18:17:54'),
(1136, 'CONTOH REZA', '2020-02-06', 4, 16, '1', '2020-02-13 21:59:51'),
(1137, 'CONTOH REZA', '2020-02-06', 4, 16, '1', '2020-02-13 21:59:51'),
(1138, 'CONTOH REZA', '2020-02-06', 4, 16, '1', '2020-02-13 21:59:51'),
(1139, 'CONTOH REZA', '2020-02-06', 4, 16, '1', '2020-02-13 21:59:51'),
(1140, 'CONTOH REZA', '2020-02-06', 4, 16, '1', '2020-02-13 21:59:51'),
(1141, 'CONTOH REZA', '2020-02-06', 4, 16, '1', '2020-02-13 21:59:51'),
(1142, 'CONTOH REZA', '2020-02-06', 4, 16, '1', '2020-02-13 21:59:51'),
(1143, 'CONTOH REZA', '2020-02-06', 4, 16, '1', '2020-02-13 21:59:51'),
(1144, 'CONTOH REZA', '2020-02-06', 4, 16, '1', '2020-02-13 21:59:51'),
(1145, 'CONTOH REZA', '2020-02-06', 4, 16, '1', '2020-02-13 21:59:51');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `id_kondisi` int(10) NOT NULL,
  `nama_kondisi` varchar(30) NOT NULL,
  `warna_kondisi` varchar(30) NOT NULL,
  `icon_kondisi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondisi`
--

INSERT INTO `kondisi` (`id_kondisi`, `nama_kondisi`, `warna_kondisi`, `icon_kondisi`) VALUES
(1, 'baik', 'positive', 'checkmark'),
(2, 'rusak ringan', 'warning', 'attention'),
(3, 'rusak berat', 'negative', 'attention');

-- --------------------------------------------------------

--
-- Table structure for table `lantai`
--

CREATE TABLE `lantai` (
  `id_lantai` int(10) NOT NULL,
  `nama_lantai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lantai`
--

INSERT INTO `lantai` (`id_lantai`, `nama_lantai`) VALUES
(1, 'Lantai 1'),
(2, 'Lantai 2'),
(3, 'Lantai 3'),
(4, 'Lantai 4');

-- --------------------------------------------------------

--
-- Table structure for table `log_pengguna`
--

CREATE TABLE `log_pengguna` (
  `id` int(10) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `log_pengguna` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_pengguna`
--

INSERT INTO `log_pengguna` (`id`, `id_pengguna`, `log_pengguna`) VALUES
(1, 5, '2020-02-06 02:35:35'),
(2, 5, '2020-02-06 02:36:15'),
(3, 5, '2020-02-07 18:11:26'),
(4, 5, '2020-02-07 20:49:28'),
(5, 5, '2020-02-08 17:06:38'),
(6, 6, '2020-02-08 18:35:34'),
(7, 6, '2020-02-08 20:11:49'),
(8, 5, '2020-02-08 20:12:15'),
(9, 5, '2020-02-09 01:16:58'),
(10, 5, '2020-02-09 01:17:34'),
(11, 5, '2020-02-10 15:51:46'),
(12, 5, '2020-02-10 16:09:02'),
(13, 5, '2020-02-10 17:05:24'),
(14, 5, '2020-02-10 21:48:53'),
(15, 5, '2020-02-11 17:44:05'),
(16, 6, '2020-02-11 18:01:44'),
(17, 5, '2020-02-11 18:12:07'),
(18, 5, '2020-02-12 14:50:36'),
(19, 5, '2020-02-12 18:29:55'),
(20, 6, '2020-02-12 19:42:31'),
(21, 5, '2020-02-12 19:43:07'),
(22, 5, '2020-02-13 02:42:01'),
(23, 5, '2020-02-13 21:01:33'),
(24, 6, '2020-02-13 21:56:10'),
(25, 5, '2020-02-13 21:56:34'),
(26, 6, '2020-02-14 01:03:30'),
(27, 5, '2020-02-14 02:08:08'),
(28, 5, '2020-02-14 02:36:49'),
(29, 6, '2020-02-14 03:09:05'),
(30, 5, '2020-02-14 06:16:55'),
(31, 5, '2020-02-14 07:39:34'),
(32, 6, '2020-02-16 19:20:48'),
(33, 5, '2020-02-16 19:23:27'),
(34, 5, '2020-02-16 19:51:54'),
(35, 6, '2020-02-16 21:46:06'),
(36, 5, '2020-03-09 11:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(10) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `katasandi` varchar(256) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(11) NOT NULL,
  `tanggal_buat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `katasandi`, `role_id`, `is_active`, `tanggal_buat`) VALUES
(5, 'Muhammad Naufall', 'admin', '$2y$10$icjdkAutp.RDEhK0wy/6UO5QOLM36VRDlj/mihe8GhZR4gFU.tp/W', 1, 1, '2020-02-11 18:11:51'),
(6, 'Fatih Asmata', 'operator1', '$2y$10$icjdkAutp.RDEhK0wy/6UO5QOLM36VRDlj/mihe8GhZR4gFU.tp/W', 2, 1, '2020-02-11 18:11:54'),
(7, 'Arfin Henditya', 'operator2', '$2y$10$icjdkAutp.RDEhK0wy/6UO5QOLM36VRDlj/mihe8GhZR4gFU.tp/W', 2, 1, '2020-02-11 18:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruang` int(10) NOT NULL,
  `luas_ruang` varchar(20) NOT NULL,
  `id_lantai` int(10) NOT NULL,
  `pj_ruang` varchar(30) NOT NULL,
  `nama_ruang` varchar(30) NOT NULL,
  `nomor_ruang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id_ruang`, `luas_ruang`, `id_lantai`, `pj_ruang`, `nama_ruang`, `nomor_ruang`) VALUES
(10, '7,2 x 10,5 m²', 4, 'PAK AWAN', 'SISTEM INFORMASI', '401'),
(11, '7,2 x 10,5 m²', 4, 'PAK YUSUF', 'SISTEM CERDAS', '402'),
(12, '7,2 x 10,5 m²', 4, 'PAK AWAN', 'SJK', '403'),
(13, '7,2 x 10,5 m²', 4, 'PAK MUNAWIR', 'REKAYASA PEREANGKAT LUNAK', '404'),
(14, '7,2 x 10,5 m²', 4, 'PAK MUNAWIR', 'BASIS DATA', '405'),
(15, '7,2 x 10,5 m²', 4, 'PAK IKHWAN', 'MATEMATIKA', '406'),
(16, '7,2 x 10,5 m²', 4, 'PAK AWAN', 'SISTEM INFORMASI', '407');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indexes for table `lantai`
--
ALTER TABLE `lantai`
  ADD PRIMARY KEY (`id_lantai`);

--
-- Indexes for table `log_pengguna`
--
ALTER TABLE `log_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1146;

--
-- AUTO_INCREMENT for table `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id_kondisi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lantai`
--
ALTER TABLE `lantai`
  MODIFY `id_lantai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log_pengguna`
--
ALTER TABLE `log_pengguna`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id`) REFERENCES `log_pengguna` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
