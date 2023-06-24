-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 10:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resto`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_chefs`
--

CREATE TABLE `tb_chefs` (
  `id_chefs` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `profesi` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `facebook` varchar(225) NOT NULL,
  `twitter` varchar(225) NOT NULL,
  `instagram` varchar(225) NOT NULL,
  `linkedin` varchar(225) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_chefs`
--

INSERT INTO `tb_chefs` (`id_chefs`, `nama`, `profesi`, `gender`, `alamat`, `nomor_telepon`, `facebook`, `twitter`, `instagram`, `linkedin`, `gambar`) VALUES
(1, 'Juna', 'Master Chefs', 'Laki-Laki', 'Bekasi', '0855565652', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', 'juna.jpg'),
(2, 'Renata', 'Patissier', 'Perempuan', 'Jakarta', '085546112579', '-', '-', '-', '-', 'renata1.jpg'),
(3, 'Arnold', 'Cook', 'Laki-Laki', 'Bandung, Jawa Barat', '08554122458', '-', '-', '-', '-', 'arnold2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nomor_pesanan` varchar(255) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `nomor_telepon` varchar(25) NOT NULL,
  `metode_pembayaran` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `category` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `keterangan`, `category`, `harga`, `status`, `gambar`) VALUES
(2, 'Air Meneral', 'Air segar yang murni dan menyegarkan, bebas dari tambahan bahan kimia atau rasa.', 'Minuman', 5000, 'Tersedia', 'airmeneral.jpg'),
(3, 'Dimsum Kepiting', 'Hidangan dimsum lezat berisi campuran kepiting yang lembut, dibungkus dalam kulit tipis, dan dikukus hingga matang sempurna.', 'Makanan', 25000, 'Tersedia', 'dimsumkepiting.jpg'),
(4, 'Teh Manis', 'Minuman yang menyegarkan terbuat dari daun teh yang direbus dan diberi pemanis alami.', 'Minuman', 3000, 'Tersedia', 'tehmanis.jpeg'),
(5, 'Angsio', 'Daging dan sayuran lezat yang disajikan dengan saus kental yang kaya rasa.', 'Makanan', 30000, 'Tersedia', 'angsio.jpeg'),
(23, 'Dimsung Udang', 'Hidangan dimsum lezat dengan isian udang yang juicy, dibungkus dalam kulit tipis, dan dikukus hingga matang sempurna.', 'Makanan', 25000, 'Tersedia', 'dimsumudang.jpeg'),
(30, 'Lemon Tea', 'Minuman segar yang menggabungkan teh dengan perasan lemon', 'Minuman', 5000, 'Tersedia', 'lemontea1.jpg'),
(32, 'Dimsum Ayam', 'Hidangan dimsum ayam lezat dengan daging ayam pilihan dan rempah-rempah khas.', 'Makanan', 25000, 'Tersedia', 'dimsumayam.jpg'),
(33, 'Dimsum Nori', 'Dimsum kenyal dengan kulit nori dan isian daging ayam lezat.', 'Makanan', 30000, 'Tersedia', 'dimsumnori.jpeg'),
(34, 'Lumpia Kulit Tahu Udang', 'Hidangan lumpia yang menggoda selera dengan kulit tahu yang renyah dan isian udang yang lezat.', 'Makanan', 10000, 'Tersedia', 'lumpiaudang.jpeg'),
(35, 'Lumpia Kulit Tahu Ayam', 'Hidangan lumpia yang menggoda selera dengan kulit tahu yang renyah dan isian udang yang lezat.', 'Makanan', 10000, 'Tersedia', 'lumpiaayam.jpg'),
(36, 'Lumpia Udang', 'Hidangan lumpia dengan isian udang yang segar dan lezat, dibungkus dengan kulit yang renyah.', 'Makanan', 10000, 'Tersedia', 'udanglumpia.jpg'),
(37, 'Lumpia Ayam', 'Hidangan lumpia dengan isian ayam yang lezat, dibungkus dengan kulit yang renyah.', 'Makanan', 10000, 'Tersedia', 'ayamlumpia.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nomer_meja`
--

CREATE TABLE `tb_nomer_meja` (
  `id` int(11) NOT NULL,
  `nomor_meja` int(20) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_nomer_meja`
--

INSERT INTO `tb_nomer_meja` (`id`, `nomor_meja`, `status`) VALUES
(1, 1, 'Tersedia'),
(2, 2, 'Tersedia'),
(3, 3, 'Tersedia'),
(4, 4, 'Tersedia'),
(5, 5, 'Tersedia'),
(6, 6, 'Tersedia'),
(7, 7, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `email` varchar(55) NOT NULL,
  `nomor_telepon` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `tb_pelanggan`
--
DELIMITER $$
CREATE TRIGGER `delete` BEFORE DELETE ON `tb_pelanggan` FOR EACH ROW BEGIN
DELETE FROM tb_user WHERE id_user = OLD.id_user;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `subject` varchar(55) NOT NULL,
  `isi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_reservation`
--

CREATE TABLE `tb_reservation` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `nomor_meja` varchar(55) NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `jumlah_orang` int(10) NOT NULL,
  `pesan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `role_id`) VALUES
(1, 'admin', '123', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_chefs`
--
ALTER TABLE `tb_chefs`
  ADD PRIMARY KEY (`id_chefs`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_nomer_meja`
--
ALTER TABLE `tb_nomer_meja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_reservation`
--
ALTER TABLE `tb_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_chefs`
--
ALTER TABLE `tb_chefs`
  MODIFY `id_chefs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_nomer_meja`
--
ALTER TABLE `tb_nomer_meja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_reservation`
--
ALTER TABLE `tb_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
