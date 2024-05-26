-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 25, 2024 at 05:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_user`
--

CREATE TABLE `new_user` (
  `id` int(11) UNSIGNED NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nama` text NOT NULL,
  `nomorhp` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `new_user`
--

INSERT INTO `new_user` (`id`, `tanggal`, `nama`, `nomorhp`) VALUES
(1147, '2024-05-25 12:14:42', 'Santi Suyudi', '0866541523'),
(1149, '2024-05-25 12:15:18', 'Giri Keniana', '0123847474'),
(1150, '2024-05-25 12:15:38', 'Keira Sato', '0973638464'),
(1151, '2024-05-25 12:16:02', 'Kanjeng Putri', '0983736363'),
(1152, '2024-05-25 12:16:30', 'Barata yudha', '087363764674'),
(1153, '2024-05-25 12:17:22', 'Rahman Rohima', '9263663634'),
(1154, '2024-05-25 12:36:17', 'Keisha Jayanti', '089373848'),
(1155, '2024-05-25 13:01:17', 'Indah Permatasari', '076283744'),
(1156, '2024-05-25 13:13:28', 'Atun Sukmini', '092837377'),
(1157, '2024-05-25 13:17:06', 'Anita Rumania', '983737442e4'),
(1158, '2024-05-25 13:23:12', 'Rukmini Soehartono', '9283384884'),
(1159, '2024-05-25 13:25:37', 'Jayanto Sujatmono', '973793747477300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_user`
--
ALTER TABLE `new_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_user`
--
ALTER TABLE `new_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1162;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
