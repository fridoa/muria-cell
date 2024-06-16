-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2024 at 12:01 AM
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
-- Database: `db_dpw1`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `subjek`, `pesan`, `tanggal`) VALUES
(1, 'Irfan Muria', 'irfanmuria04@gmail.com', 'informasi akademik', 'kesalahan tanggal lahir', '2024-06-14 20:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id` int(5) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `isi_berita` text NOT NULL,
  `harga` varchar(20) DEFAULT NULL,
  `gambar` varchar(70) NOT NULL,
  `kategori` char(11) NOT NULL,
  `id_user` int(2) NOT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id`, `judul`, `isi_berita`, `harga`, `gambar`, `kategori`, `id_user`, `created_by`, `tanggal`) VALUES
(29, 'Samsung Galaxy A12 6/128 GB', 'Jenis PLS TFT / Ukuran 6.5 inci / Refresh Rate 60 Hz / Resolusi 720 x 1600 piksel / Rasio 20:9 / Kerapatan 264 ppi / Jaringan 2G, 3G, 4G / SIM Card Dual SIM', 'Rp 2.499.000', '39.jpg', 'smartphone', 0, 'Nola', '2024-06-15 00:38:14'),
(30, 'Samsung Galaxy A35 5G 8/256 GB', 'Jenis Super AMOLED / Ukuran 6.5 inci / Refresh Rate 120 Hz / Resolusi 1080 x 2340 piksel / Rasio 20:9 / Kerapatan 396 ppi / Fitur Lainnya Tingkat kecerahan 1000 nit (HBM)', 'Rp 5.499.000', '41.jpg', 'smartphone', 0, 'Nola', '2024-06-15 00:43:46'),
(31, 'Protective Cases', 'Casing berkualitas tinggi untuk melindungi perangkat Anda dari kerusakan.', 'Rp 50.000', '51.png', 'accessories', 0, 'Nola', '2024-06-15 00:51:27'),
(32, 'Bluetooth Headphones', 'Rasakan suara berkualitas tinggi dengan headphone Bluetooth terbaru kami.', 'Rp 100.000', '53.png', 'accessories', 0, 'Nola', '2024-06-15 01:27:28'),
(33, 'Wireless Chargers', 'Pengisi daya nirkabel yang nyaman dan cepat untuk perangkat Anda.', 'Rp 75.000', '52.png', 'accessories', 0, 'Nola', '2024-06-15 01:35:54'),
(34, 'Realme 12 5G 8/256 GB', 'Chipset 6nm Octa-core 5G / Camera 108mp 3x Zoom Potrait / Charging & Battery 45W SUPERVOOC / Display 950nit Sunlight / Storage & RAM 8GB+256GB', 'Rp 3.699.000', '42.png', 'smartphone', 0, 'Nola', '2024-06-15 01:46:11'),
(35, 'Realme 12+ 5G 8/256 GB', 'Chipset 7050 5G / Camera Sony LYT-600 OIS / Charging & Battery 67W SUPERVOOC / Display 120Hz Smooth / Storage & RAM 8GB+256GB', 'Rp 4.199.000', '43.png', 'smartphone', 0, 'Nola', '2024-06-15 01:48:21'),
(36, 'Realme 12 Pro+ 5G 8/256 GB', 'Chipset Snapdragon 7s Gen 2 5G / Camera Sony IMX890 OIS / Charging & Battery Battery 5000mAh / Display 120Hz Curved / Storage & RAM 8GB+256GB', 'Rp 5.999.000', '44.png', 'smartphone', 0, 'Nola', '2024-06-15 01:49:01'),
(37, 'Oppo F25 Pro 5G 8/256 GB', 'Panel 2.5D flexible OLED / Ukuran 6.7 inci / Refresh Rate 120 Hz / Resolusi 1080 x 2412 piksel / Rasio 20:9 / Kerapatan 394 ppi / Proteksi Panda glass', 'Rp 4.699.000', '45.png', 'smartphone', 0, 'Nola', '2024-06-15 01:49:37'),
(38, 'Oppo Reno11 5G 8/256 GB', 'Panel 3D flexible AMOLED / Ukuran 6.7 inci / Refresh Rate 120 Hz / Resolusi 1080 x 2412 piksel / Rasio 20:9 / Kerapatan 394 ppi / Proteksi AGC DT-Star2', 'Rp 5.449.000', '46.png', 'smartphone', 0, 'Nola', '2024-06-15 01:50:16'),
(39, 'Oppo F23 5G 8/256 GB', 'Panel LTPS LCD / Ukuran 6.7 inci / Refresh Rate 120 Hz / Resolusi 1080 x 2400 piksel / Rasio 20:9 / Kerapatan 392 ppi / Proteksi Panda 1681 secondary tempered glass', 'Rp 4.499.000', '47.png', 'smartphone', 0, 'Nola', '2024-06-15 01:50:45'),
(40, 'Samsung Galaxy A25 5G 8/256 GB', 'Jenis Super AMOLED / Ukuran 6.5 inci / Refresh Rate 120 Hz / Resolusi 1080 x 2340 piksel / Rasio 20:9 / Kerapatan 396 ppi / Fitur Lainnya Tingkat kecerahan 1000 nit (HBM)', 'Rp 4.399.000', '40.jpg', 'smartphone', 0, 'Nola', '2024-06-15 04:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `iduser` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('admin','user','reporter') NOT NULL DEFAULT 'user',
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`iduser`, `fullname`, `email`, `password`, `role`, `update_date`) VALUES
(1, 'Irfan Muria', '2211104075@ittelkom-pwt.ac.id', 'bb54b21dbf827fca3f19947b1b6acaea', 'reporter', '2024-05-29 11:25:00'),
(2, 'Nola', 'naurafaricarachman@gmail.com', 'bb54b21dbf827fca3f19947b1b6acaea', 'admin', '2024-06-04 20:20:48'),
(3, 'Firza', 'firzarasyid@gmail.com', 'bb54b21dbf827fca3f19947b1b6acaea', 'user', '2024-06-04 20:25:01'),
(4, 'Arinda', 'arindaputrimuria@gmail.com', 'bb54b21dbf827fca3f19947b1b6acaea', 'reporter', '2024-06-04 20:25:47'),
(5, 'Irpan', 'irfanmuria04@gmail.com', 'bb54b21dbf827fca3f19947b1b6acaea', 'admin', '2024-06-15 04:35:54'),
(6, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2024-06-15 04:36:32'),
(7, 'Muria Cell', 'muriacellulartechnology@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2024-06-15 04:38:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
