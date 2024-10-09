-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 03:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dataalumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
('admin1', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` varchar(255) NOT NULL,
  `agenda` varchar(255) NOT NULL,
  `tanggal_kegiatan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `agenda`, `tanggal_kegiatan`) VALUES
('A1', 'Program Mentorship', '2024-07-27'),
('A2', 'Reuni Alumni', '2024-06-06'),
('A3', 'Masak', '2024-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tahun_masuk` varchar(255) NOT NULL,
  `tahun_lulus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `nama`, `nisn`, `tgl_lahir`, `jenis_kelamin`, `tahun_masuk`, `tahun_lulus`) VALUES
(34, 'Abdul Aziz Mulia', '0072351209', '2009-06-09', 'Laki-laki', '2021', '2024'),
(35, 'Bagas Yusuf', '006142341', '2009-11-18', 'Laki-laki', '2021', '2023'),
(36, 'Yanti Surhanti', '00761234980', '2009-06-15', 'Perempuan', '2021', '2024'),
(37, 'Muhammad Fajri', '0012347865', '2008-07-09', 'Laki-laki', '2019', '2022'),
(38, 'Mbappe', '0021234584', '2009-07-23', 'Laki-laki', '2021', '2023'),
(39, 'Cristiano Rojali', '0014564128', '2009-02-10', 'Laki-laki', '2020', '2023'),
(42, 'Axelle Roses', '2183693622', '2024-06-21', 'Perempuan', '2020', '2023'),
(43, 'Yanto', '9382625171', '2024-06-21', 'Laki-laki', '2020', '2023'),
(44, 'Agus', '9382625171', '2024-06-21', 'Laki-laki', '2020', '2023'),
(45, 'Bambang Pamungkas', '4564423132', '2024-06-21', 'Laki-laki', '2020', '2023'),
(46, 'Neymar Bogor', '7687654432', '2024-06-21', 'Laki-laki', '2020', '2023'),
(47, 'Hazard', '9382625171', '2024-06-21', 'Laki-laki', '2020', '2023'),
(48, 'Athaya', '7687654432', '2024-05-29', 'Perempuan', '2020', '2023'),
(49, 'Axelle', '7687654432', '2024-06-21', 'Laki-laki', '2020', '2023'),
(50, 'Yanto', '2183693622', '2024-06-21', 'Laki-laki', '2020', '2023'),
(51, 'Axelle', '7687654432', '2024-06-21', 'Laki-laki', '2020', '2023'),
(52, 'Yanto', '7687654432', '2024-06-21', 'Laki-laki', '2020', '2023'),
(53, 'Yanto', '2183693622', '2024-06-21', 'Laki-laki', '2020', '2023'),
(54, 'Athaya', '2183693622', '2024-06-21', 'Perempuan', '2020', '2023'),
(55, 'Axelle', '7687654432', '2024-06-21', 'Laki-laki', '2020', '2023'),
(56, 'Axelle', '7687654432', '2024-06-21', 'Laki-laki', '2020', '2023'),
(57, 'Syachdan Zhafar ', '01561561', '2024-06-21', 'Laki-laki', '2020', '2023'),
(58, 'Ronaldo', '7687654432', '2024-06-21', 'Perempuan', '2020', '2023'),
(59, 'Yanto', '2183693622', '2024-06-21', 'Laki-laki', '2020', '2023'),
(60, 'Axelle', '7687654432', '2024-06-23', 'Perempuan', '2020', '2023'),
(61, 'Yanto', '2183693622', '2024-06-23', 'Laki-laki', '2020', '2023'),
(62, 'Athaya', '2183693622', '2024-06-23', 'Perempuan', '2020', '2023'),
(64, 'Axelle', '7687654432', '2024-06-23', 'Laki-laki', '2023', '2020'),
(65, 'Axelle', '7687654432', '2024-06-23', 'Laki-laki', '2016', '2022'),
(66, 'Axelle', '7687654432', '2024-06-23', 'Laki-laki', '2023', '2022'),
(67, 'Axelle', '7687654432', '2024-06-23', 'Laki-laki', '2021', '2023'),
(68, 'messi', '7687654432', '2024-06-23', 'Laki-laki', '2020', '2023'),
(69, 'Athaya', '7687654432', '2024-06-23', 'Perempuan', '2020', '2023'),
(70, 'Axelle', '7687654432', '2009-06-02', 'Laki-laki', '2020', '2023'),
(71, 'Suarez', '0019201921', '2024-06-23', 'Laki-laki', '2020', '2023'),
(72, 'Athaya', '9382625171', '2024-06-24', 'Laki-laki', '2020', '2023'),
(73, 'Rojali', '9382625171', '2024-06-25', 'Laki-laki', '2020', '2023'),
(74, 'Rizky', '938262518', '2024-06-26', 'Laki-laki', '2020', '2023'),
(75, 'Axelle', '7687654432', '2024-06-26', 'Laki-laki', '2021', '2024'),
(76, 'Yanto', '7687654432', '2024-06-26', 'Laki-laki', '2020', '2023'),
(77, 'Axelle', '7687654432', '2024-06-26', 'Perempuan', '2020', '2023'),
(78, 'Momon', '00123487', '2024-06-27', 'Laki-laki', '2020', '2023'),
(79, 'neymar', '2183693622', '2024-06-27', 'Laki-laki', '2020', '2023'),
(80, 'Akmal', '9382625171', '2024-06-29', 'Perempuan', '2020', '2024'),
(81, 'yanto suratna', '9382625171', '2024-06-30', 'Laki-laki', '2020', '2023'),
(82, 'neymar bogor', '9382625171', '2024-07-09', 'Laki-laki', '2020', '2030'),
(83, 'Abdul Aziz', '9382625171', '2024-07-10', 'Laki-laki', '2021', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `data_lengkap`
--

CREATE TABLE `data_lengkap` (
  `id_data_lengkap` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_kelas` varchar(255) NOT NULL,
  `id_wali_kelas` varchar(255) NOT NULL,
  `id_pendidikan_lanjutan` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `nama_wali_kelas` varchar(255) NOT NULL,
  `pendidikan_lanjutan` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_lengkap`
--

INSERT INTO `data_lengkap` (`id_data_lengkap`, `id`, `id_kelas`, `id_wali_kelas`, `id_pendidikan_lanjutan`, `nama_kelas`, `nama_wali_kelas`, `pendidikan_lanjutan`, `agama`, `alamat`, `email`) VALUES
(17, 34, 'IK3', 'BS6', 22, '91', 'Aldi Riyadi S.Pd', 'SMA Islam Al-Azhar 8 Summarecon Bekasi', 'Islam', 'Timur', 'habibdjuhriah02@gmail.com'),
(18, 35, 'IK2', 'AR1', 23, '91', 'Aldi Riyadi S.Pd', 'SMA 2 BEKASI', 'Islam', 'Jatimakmur, Pondokgede', 'idakece@gmail.com'),
(19, 36, 'IK1', 'AR1', 24, '91', 'Aldi Riyadi S.Pd', 'MAN 1 BEKASI', 'Islam', 'Jatibening, Pondokgede', 'yanti@gmail.com'),
(20, 37, 'IK1', 'AR1', 25, '91', 'Aldi Riyadi S.Pd', 'SMA Islam Al-Azhar 8 Summarecon Bekasi', 'Islam', 'Jatiasih, Pondokgede', 'fajrim@gmail.com'),
(21, 38, 'IK1', 'AR1', 26, '91(2018)', 'Aldi Riyadi S.Pd', 'SMK 1 Jakarta', 'Islam', 'Manggarai, Jakarta Selatan', 'perancisjuara@gmail.com'),
(22, 39, 'IK1', 'AR1', 27, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA Labschool Kebayoran', 'Islam', 'Senopati, Jakarta Selatan', 'rojaligemink@gmail.com'),
(23, 42, 'IK1', 'AR1', 28, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 4 BEKASI', 'Islam', 'Jatibening, Pondokgede', 'mbaoe@gmail.com'),
(24, 43, 'IK1', 'AR1', 29, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 2 BEKASI', 'Islam', 'Jatiasih, Pondokgede', 'yanti@gmail.com'),
(25, 44, 'IK1', 'AR1', 30, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 4 BEKASI', 'Islam', 'Jatimakmur, Pondokgede', 'gusgus@gmail.com'),
(26, 45, 'IK1', 'AR1', 31, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 4 BEKASI', 'Islam', 'Jatiasih, Pondokgede', 'bpamungkas@gmail.com'),
(27, 46, 'IK1', 'AR1', 32, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 4 BEKASI', 'Islam', 'Jatiasih, Pondokgede', 'neymarbogor@gmail.com'),
(28, 47, 'IK1', 'AR1', 33, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 2 BEKASI', 'Islam', 'Jatimakmur, Pondokgede', 'hazzard@gmail.com'),
(29, 48, 'IK1', 'AR1', 34, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 2 BEKASI', 'Islam', 'Jatimakmur, Pondokgede', 'yanti@gmail.com'),
(30, 49, 'IK1', 'AR1', 35, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 2 BEKASI', 'Islam', 'Jatiasih, Pondokgede', 'fajrim@gmail.com'),
(31, 51, 'IK1', 'AR1', 37, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 4 BEKASI', 'Islam', 'Jatibening, Pondokgede', 'fajrim@gmail.com'),
(32, 53, 'IK1', 'AR1', 39, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 4 BEKASI', 'Islam', 'Jatimakmur, Pondokgede', 'fajrim@gmail.com'),
(33, 55, 'IK1', 'AR1', 41, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 2 BEKASI', 'Islam', 'Jatiasih, Pondokgede', 'yanti@gmail.com'),
(34, 56, 'IK6', 'BS6', 42, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 5 BEKASI', 'Hindu', 'Jl. Sukamulya', 'sadan.slank@yahoo.com'),
(35, 57, 'IK1', 'AR1', 43, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 1 Jakarta', 'Islam', 'Manggarai, Jakarta Selatan', 'sadan.slank@yahoo.com'),
(36, 57, 'IK1', 'AR1', 43, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 1 Jakarta', 'Islam', 'Manggarai, Jakarta Selatan', 'sadan.slank@yahoo.com'),
(37, 58, 'IK1', 'AR1', 43, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 4 BEKASI', 'Islam', 'Manggarai, Jakarta Selatan', 'yanti@gmail.com'),
(38, 58, 'IK1', 'AR1', 43, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 4 BEKASI', 'Islam', 'Manggarai, Jakarta Selatan', 'yanti@gmail.com'),
(39, 59, 'IK1', 'AR1', 45, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 2 BEKASI', 'Islam', 'Kemayoran Jakarta Pusat.', 'yanti@gmail.com'),
(40, 60, 'IK1', 'AR1', 46, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 4 BEKASI', 'Islam', 'Manggarai, Jakarta Selatan', 'fajrim@gmail.com'),
(41, 61, 'IK1', 'AR1', 47, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 4 BEKASI', 'Islam', 'Manggarai, Jakarta Selatan', 'yanti@gmail.com'),
(42, 60, 'IK1', 'AR1', 48, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 4 BEKASI', 'Islam', 'Manggarai, Jakarta Selatan', 'fajrim@gmail.com'),
(44, 64, 'IK1', 'AR1', 50, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 4 BEKASI', 'Kristen Protestan', 'Manggarai, Jakarta Selatan', 'yanti@gmail.com'),
(45, 65, 'IK1', 'AR1', 51, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 4 BEKASI', 'Islam', 'Jatimakmur, Pondokgede', 'yanti@gmail.com'),
(46, 66, 'IK3', 'AR1', 52, '93(2018)', 'Aldi Riyadi S.Pd', 'SMA 4 BEKASI', 'Islam', 'Jatimakmur, Pondokgede', 'sadan.slank@yahoo.com'),
(47, 67, 'IK1', 'AR1', 53, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 4 BEKASI', 'Islam', 'Jatiasih, Pondokgede', 'yanti@gmail.com'),
(48, 68, 'IK2', 'FH2', 54, '92(2018)', 'Abdullah S.Pd', 'SMA 4 BEKASI', 'Islam', 'Manggarai, Jakarta Selatan', 'yanti@gmail.com'),
(49, 69, 'IK1', 'AR1', 55, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA Islam Al-Azhar 8 Summarecon Bekasi', 'Islam', 'Jatimakmur, Pondokgede', 'fajrim@gmail.com'),
(50, 70, 'IK1', 'AR1', 56, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 4 BEKASI', 'Islam', 'Jatiasih, Pondokgede', 'fajrim@gmail.com'),
(51, 71, 'IK1', 'AR1', 57, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 4 BEKASI', 'Islam', 'Manggarai, Jakarta Selatan', 'yanti@gmail.com'),
(52, 72, 'IK1', 'AR1', 58, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA 4 BEKASI', 'Islam', 'Jatiasih, Pondokgede', 'yanti@gmail.com'),
(53, 73, 'IK1', 'AR1', 59, '91(2018)', 'Aldi Riyadi S.Pd', 'SMA Islam Al-Azhar 8 Summarecon Bekasi', 'Islam', 'Jatimakmur, Pondokgede', 'yanti@gmail.com'),
(54, 74, 'IK1', 'AR1', 60, '91 (2018)', 'Aldi Riyadi S.Pd', 'SMA 2 BEKASI', 'Islam', 'Jatiasih, Pondokgede', 'yanti@gmail.com'),
(55, 75, 'IK6', 'BS6', 61, '93 (2019)', 'Dr. Bambang Supriyadi, M.Sc.', 'SMA 4 BEKASI', 'Islam', 'Jatimakmur, Pondokgede', 'idakece@gmail.com'),
(56, 76, 'IK3', 'AS4', 62, '93 (2018)', 'Drs. Agus Salim, M.Pd.', 'SMA 4 BEKASI', 'Islam', 'Manggarai, Jakarta Selatan', 'yanti@gmail.com'),
(57, 77, 'IK1', 'AR1', 63, '91 (2018)', 'Aldi Riyadi S.Pd', 'SMA 2 BEKASI', 'Islam', 'Kemayoran Jakarta Pusat.', 'yanti@gmail.com'),
(58, 78, 'IK1', 'AR1', 64, '93 (2019)', 'Dr. Bambang Supriyadi, M.Sc.', 'SMA 4 BEKASI', 'Islam', 'Kebon pala', 'idakece@gmail.com'),
(59, 79, 'IK1', 'AR1', 65, '91 (2018)', 'Aldi Riyadi S.Pd', 'SMA 4 BEKASI', 'Islam', 'Jatibening, Pondokgede', 'yanto@gmail.com'),
(60, 80, 'IK3', 'HS3', 66, '93 (2018)', 'Herman Sutrisno, S.Pd., M.Pd.', 'SMA 10 BEKASI', 'Islam', 'Manggarai, Jaksel', 'fajrim@gmail.com'),
(61, 81, 'IK1', 'AR1', 67, '91 (2018)', 'Aldi Riyadi S.Pd', 'SMA Islam Al-Azhar 8 Summarecon Bekasi', 'Islam', 'Jatimakmur, Pondokgede', 'yanti@gmail.com'),
(62, 82, 'IK2', 'AS4', 68, '92 (2018)', 'Drs. Agus Salim, M.Pd.', 'SMA 2 BEKASI', 'Islam', 'Manggarai, Jakarta Selatan', 'yanti@gmail.com'),
(63, 83, 'IK2', 'AS4', 69, '92 (2018)', 'Drs. Agus Salim, M.Pd.', 'SMA 2 BEKASI', 'Islam', 'Jatiasih, Pondokgede', 'idakece@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(255) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `nama_wali_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `nama_wali_kelas`) VALUES
('IK1', '91 (2018)', 'Aldi Riyadi S.Pd'),
('IK2', '92 (2018)', 'Fitri Handayani, S.Pd., M.Pd.'),
('IK3', '93 (2018)', 'Herman Sutrisno, S.Pd., M.Pd.'),
('IK4', '91 (2019)', 'Drs. Agus Salim, M.Pd. '),
('IK5', '92 (2019)', 'Rahmat Hidayat, S.Pd., M.Pd'),
('IK6', '93 (2019)', 'Dr. Bambang Supriyadi, M.Sc.');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `tahun_kelulusan` int(11) NOT NULL,
  `jumlah_alumni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `tahun_kelulusan`, `jumlah_alumni`) VALUES
(1, 2018, 210),
(2, 2019, 87),
(3, 2020, 71),
(4, 2021, 88),
(5, 2022, 70);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan_lanjutan`
--

CREATE TABLE `pendidikan_lanjutan` (
  `id_pendidikan_lanjutan` int(11) NOT NULL,
  `pendidikan_lanjutan` varchar(255) NOT NULL,
  `alamat_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendidikan_lanjutan`
--

INSERT INTO `pendidikan_lanjutan` (`id_pendidikan_lanjutan`, `pendidikan_lanjutan`, `alamat_sekolah`) VALUES
(22, 'SMA 4 BEKASI', 'Bekasi Utara'),
(23, 'SMA 2 BEKASI', 'Bekasi Selatan'),
(24, 'MAN 1 BEKASI', 'Bekasi Utara'),
(25, 'SMA Islam Al-Azhar 8 Summarecon Bekasi', 'Bekasi Utara'),
(26, 'SMK 1 Jakarta', 'Jakarta Pusat'),
(27, 'SMA Labschool Kebayoran', 'Rawamangun, Jakarta Timur'),
(28, 'SMA 4 BEKASI', 'Bekasi Utara'),
(29, 'SMA 2 BEKASI', 'Bekasi Selatan'),
(30, 'SMA 4 BEKASI', 'Bekasi Utara'),
(31, 'SMA 4 BEKASI', 'Bekasi Utara'),
(32, 'SMA 4 BEKASI', 'Bekasi Utara'),
(33, 'SMA 2 BEKASI', 'Bekasi Selatan'),
(34, 'SMA 2 BEKASI', 'Bekasi Selatan'),
(35, 'SMA 2 BEKASI', 'Jl. Raya'),
(36, 'SMA 4 BEKASI', 'Bekasi Utara'),
(37, 'SMA 4 BEKASI', 'Bekasi Utara'),
(38, 'SMA 4 BEKASI', 'Bekasi Utara'),
(39, 'SMA 4 BEKASI', 'Bekasi Utara'),
(40, 'SMA 2 BEKASI', 'Bekasi Selatan'),
(41, 'SMA 2 BEKASI', 'Bekasi Selatan'),
(42, 'SMA 4 BEKASI', 'Bekasi Utara'),
(43, 'SMA 1 Jakarta', 'Jakarta Pusat'),
(44, 'SMA 4 BEKASI', 'Bekasi Utara'),
(45, 'SMA 4 BEKASI', 'Bekasi Utara'),
(46, 'SMA 4 BEKASI', 'Bekasi Utara'),
(47, 'SMA 4 BEKASI', 'Bekasi Utara'),
(48, 'SMA 4 BEKASI', 'Bekasi Utara'),
(49, 'SMA 2 BEKASI', 'Bekasi Selatan'),
(50, 'SMA 4 BEKASI', 'Bekasi Utara'),
(51, 'SMA 4 BEKASI', 'Bekasi Utara'),
(52, 'SMA 4 BEKASI', 'Bekasi Utara'),
(53, 'SMA 4 BEKASI', 'Bekasi Utara'),
(54, 'SMA 4 BEKASI', 'Bekasi Utara'),
(55, 'SMA Islam Al-Azhar 8 Summarecon Bekasi', 'Rawamangun, Jakarta Timur'),
(56, 'SMA 4 BEKASI', 'Bekasi Utara'),
(57, 'SMA 4 BEKASI', 'Bekasi Utara'),
(58, 'SMA 4 BEKASI', 'Bekasi Utara'),
(59, 'SMA Islam Al-Azhar 8 Summarecon Bekasi', 'Rawamangun, Jakarta Timur'),
(60, 'SMA 2 BEKASI', 'Jl. Raya Bogor'),
(61, 'SMA 4 BEKASI', 'Bekasi Utara'),
(62, 'SMA 4 BEKASI', 'Bekasi Utara'),
(63, 'SMA 2 BEKASI', 'Jl. Raya'),
(64, 'SMA 4 BEKASI', 'Bekasi Selatan'),
(65, 'SMA 4 BEKASI', 'Bekasi Utara'),
(66, 'SMA 4 BEKASI', 'Bekasi Utara'),
(67, 'SMA Islam Al-Azhar 8 Summarecon Bekasi', 'Jl. Raya'),
(68, 'SMA 2 BEKASI', 'Jl. Raya'),
(69, 'SMA 2 BEKASI', 'Bekasi Utara');

-- --------------------------------------------------------

--
-- Table structure for table `wali_kelas`
--

CREATE TABLE `wali_kelas` (
  `id_wali_kelas` varchar(255) NOT NULL,
  `nama_wali_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wali_kelas`
--

INSERT INTO `wali_kelas` (`id_wali_kelas`, `nama_wali_kelas`) VALUES
('AR1', 'Aldi Riyadi S.Pd'),
('AS4', 'Drs. Agus Salim, M.Pd.'),
('BS6', 'Dr. Bambang Supriyadi, M.Sc.'),
('FH2', 'Fitri Handayani, S.Pd., M.Pd.'),
('HS3', 'Herman Sutrisno, S.Pd., M.Pd.'),
('RH5', 'Rahmat Hidayat, S.Pd., M.Pd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_lengkap`
--
ALTER TABLE `data_lengkap`
  ADD PRIMARY KEY (`id_data_lengkap`),
  ADD KEY `id` (`id`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_wali_kelas` (`id_wali_kelas`),
  ADD KEY `data_lengkap_ibfk_4` (`id_pendidikan_lanjutan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `pendidikan_lanjutan`
--
ALTER TABLE `pendidikan_lanjutan`
  ADD PRIMARY KEY (`id_pendidikan_lanjutan`);

--
-- Indexes for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD PRIMARY KEY (`id_wali_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `data_lengkap`
--
ALTER TABLE `data_lengkap`
  MODIFY `id_data_lengkap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `pendidikan_lanjutan`
--
ALTER TABLE `pendidikan_lanjutan`
  MODIFY `id_pendidikan_lanjutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_lengkap`
--
ALTER TABLE `data_lengkap`
  ADD CONSTRAINT `data_lengkap_ibfk_1` FOREIGN KEY (`id`) REFERENCES `alumni` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_lengkap_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_lengkap_ibfk_3` FOREIGN KEY (`id_wali_kelas`) REFERENCES `wali_kelas` (`id_wali_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_lengkap_ibfk_4` FOREIGN KEY (`id_pendidikan_lanjutan`) REFERENCES `pendidikan_lanjutan` (`id_pendidikan_lanjutan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
