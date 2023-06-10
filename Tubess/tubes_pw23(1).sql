-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 08, 2023 at 02:57 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_pw23`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id_destinasi` int NOT NULL,
  `nama_destinasi` varchar(200) NOT NULL,
  `location` varchar(250) NOT NULL,
  `desk` text NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `id_kategori` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id_destinasi`, `nama_destinasi`, `location`, `desk`, `gambar`, `id_kategori`) VALUES
(20, 'Taman Sari', 'Jl. Tamanan, Kraton, Yogyakarta1', 'Taman Sari Yogyakarta adalah situs bekas taman atau kebun ista11na Keraton Ngayogyakarta Hadiningrat, Kebun ini dibangun pada zaman sultan Hamengku Buwono I pada tahun 1758-1765/9', '6480c826d60a4.jpg', 1),
(21, 'Malioboro', 'Pusat Kota Yogyakarta', 'Maliboro Adalah Salah satu kawasan dari tiga jalan di kota Yogyakarta yang membentang dari Tugu Yogyakarta hingga ke persimpangan Titik 0 km Yogyakarta.', 'malioboro.jpg', 1),
(22, 'Tugu Jogja', 'Jl. Jenderal Sudirman, Jl. Mangkubumi, dan Jl. Margo Utomo,Yogyakarta', 'Tugu jogja merupakan Landmark kota yogyakarta yang paling terkenal.Tugu Jogja yang berusia hampir 3 abad ini   memiliki makna yang dalam sekaligus Menyimpan beberapa rekaman sejarah kota Yogyakarta.', 'jamthum.jpg', 1),
(25, 'Keraton Yogyakarta   ', 'Jl. Rotowijayan Blok No. 1, Panembahan, Kraton, Yogyakarta', 'Keraton Yogyakarta adalah istana resmi Kesultanan Yogyakarta dan merupakan salah satu peninggalan sejarah yang penting. Pengunjung dapat menjelajahi kompleks keraton yang indah, mengagumi arsitektur tradisional, serta menyaksikan pertunjukan seni dan budaya Jawa yang autentik.', 'keraton.jpg', 1),
(26, 'Pantai Parangtritis   ', ' Parangtritis, Kretek, Bantul, Yogyakarta', 'Pantai Parangtritis adalah pantai paling terkenal di Yogyakarta. Pantai ini menawarkan pemandangan yang indah dengan pasir putih, ombak yang kuat, serta pemandangan matahari terbenam yang memukau. Pengunjung dapat menikmati pesona pantai, menaiki delman, atau mencoba olahraga air seperti surfing.', 'parangtritis.jpg', 2),
(27, 'Benteng Vredeburg', 'Jl. Ahmad Yani No.6, Ngupasan, Gondomanan, Yogyakarta, Daerah Istimewa Yogyakarta 55122, Indonesia.', 'Benteng Vredeburg terletak di pusat kota Yogyakarta, tidak jauh dari Tugu Jogja dan Jalan Malioboro. Benteng ini memiliki nilai sejarah yang penting dan sekarang berfungsi sebagai museum sejarah yang menarik untuk dikunjungi.', 'vredeburg.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Sejarah'),
(2, 'Alam');

-- --------------------------------------------------------

--
-- Table structure for table `login_account`
--

CREATE TABLE `login_account` (
  `id_user` int NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `nomor_hp` text NOT NULL,
  `email` varchar(225) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login_account`
--

INSERT INTO `login_account` (`id_user`, `username`, `password`, `nomor_hp`, `email`, `level`) VALUES
(1, 'admin', '123', '098765432123', 'admin@gmail.com', 'admin'),
(2, 'user', '234', '089776998101', 'user@gmail.com', 'user'),
(9, 'irsan', '567', '098766666765', 'gmail@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id_destinasi`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_account`
--
ALTER TABLE `login_account`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id_destinasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_account`
--
ALTER TABLE `login_account`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD CONSTRAINT `destinasi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
