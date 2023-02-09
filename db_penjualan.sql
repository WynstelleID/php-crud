-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2023 at 03:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `Barang`
--

CREATE TABLE `Barang` (
  `IdBarang` int(10) NOT NULL,
  `NamaBarang` varchar(255) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `Satuan` varchar(10) NOT NULL,
  `Bundling` tinyint(1) NOT NULL,
  `IdPengguna` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Barang`
--

INSERT INTO `Barang` (`IdBarang`, `NamaBarang`, `Keterangan`, `Satuan`, `Bundling`, `IdPengguna`) VALUES
(21, 'Barang 1', 'Barang pertama', 'pcs', 0, 140),
(22, 'Barang 2', 'Barang kedua', 'pcs', 0, 140),
(23, 'Barang 3', 'Barang ketiga', 'pcs', 1, 140),
(24, 'Barang 4', 'Barang keempat', 'pcs', 0, 140),
(26, 'Barang 6', 'Barang keenam', 'pcs', 0, 140),
(27, 'Barang 7', 'Barang ketujuh', 'pcs', 0, 140),
(28, 'Barang 8', 'Barang kedelapan', 'pcs', 0, 140),
(29, 'Barang 9', 'Barang kesembilan', 'pcs', 0, 140),
(210, 'Barang 10', 'Barang kesepuluh', 'pcs', 0, 140),
(211, 'popok 1', 'input barang 1', 'pcs', 1, 120),
(212, 'kopi', 'kopi enak', 'pcs', 1, 140);

-- --------------------------------------------------------

--
-- Table structure for table `HakAkses`
--

CREATE TABLE `HakAkses` (
  `IdAkses` int(10) NOT NULL,
  `NamaAkses` varchar(255) NOT NULL,
  `Keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `HakAkses`
--

INSERT INTO `HakAkses` (`IdAkses`, `NamaAkses`, `Keterangan`) VALUES
(1, 'Admin', 'Akses penuh ke sistem'),
(2, 'Kasir', 'Akses untuk transaksi penjualan'),
(3, 'Gudang', 'Akses untuk transaksi pembelian'),
(4, 'Dandi', 'Super admin 1');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(25) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jurusan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jurusan`) VALUES
('1610501024', 'dandi', 'sistem informasi');

-- --------------------------------------------------------

--
-- Table structure for table `Pelanggan`
--

CREATE TABLE `Pelanggan` (
  `IdPelanggan` int(10) NOT NULL,
  `NamaPelanggan` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `NoHp` varchar(25) NOT NULL,
  `TanggalLahir` date NOT NULL,
  `JenisKelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `IdPenjualan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Pelanggan`
--

INSERT INTO `Pelanggan` (`IdPelanggan`, `NamaPelanggan`, `Alamat`, `NoHp`, `TanggalLahir`, `JenisKelamin`, `IdPenjualan`) VALUES
(61, 'Adi', 'Jakarta', '812456780', '2000-01-01', 'Laki-laki', 41),
(62, 'Budi', 'Bandung', '823567901', '1999-02-01', 'Laki-laki', 42),
(63, 'Caca', 'Surabaya', '835689012', '1998-03-01', 'Perempuan', 43),
(64, 'Dedi', 'Medan', '846789123', '1997-04-01', 'Laki-laki', 44),
(65, 'Euis', 'Bogor', '85691234', '1996-05-01', 'Perempuan', 45),
(66, 'Fafa', 'Semarang', '869012345', '1995-06-01', 'Laki-laki', 46),
(67, 'Gaga', 'Yogyakarta', '889023456', '1994-07-01', 'Perempuan', 47),
(68, 'Hana', 'Malang', '889013467', '1993-08-01', 'Perempuan', 48),
(69, 'Ian', 'Surakarta', '890245678', '1992-09-01', 'Laki-laki', 49),
(610, 'Jojo', 'Pekanbaru', '903456789', '1991-10-01', 'Perempuan', 410);

-- --------------------------------------------------------

--
-- Table structure for table `Pembelian`
--

CREATE TABLE `Pembelian` (
  `IdPembelian` int(10) NOT NULL,
  `JumlahPembelian` int(16) NOT NULL,
  `HargaBeli` int(16) NOT NULL,
  `IdPengguna` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Pembelian`
--

INSERT INTO `Pembelian` (`IdPembelian`, `JumlahPembelian`, `HargaBeli`, `IdPengguna`) VALUES
(31, 10, 10000, 140),
(32, 20, 20000, 140),
(33, 30, 30000, 140),
(34, 40, 40000, 140),
(35, 50, 50000, 140),
(36, 60, 60000, 140),
(37, 70, 70000, 140),
(38, 80, 80000, 140),
(39, 90, 90000, 140),
(310, 100, 100000, 140),
(311, 110, 110000, 140),
(312, 120, 120000, 140),
(313, 130, 130000, 140),
(314, 140, 140000, 140),
(315, 150, 150000, 140),
(316, 160, 160000, 140),
(317, 170, 170000, 140),
(318, 180, 180000, 140),
(319, 190, 190000, 140),
(320, 200, 200000, 140);

-- --------------------------------------------------------

--
-- Table structure for table `Pengguna`
--

CREATE TABLE `Pengguna` (
  `IdPengguna` int(10) NOT NULL,
  `NamaPengguna` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `NamaBelakang` varchar(165) NOT NULL,
  `NamaDepan` varchar(165) NOT NULL,
  `NoHp` varchar(25) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `IdAkses` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Pengguna`
--

INSERT INTO `Pengguna` (`IdPengguna`, `NamaPengguna`, `Password`, `NamaBelakang`, `NamaDepan`, `NoHp`, `Alamat`, `IdAkses`) VALUES
(110, 'admin', '', 'Admin', 'Super', '0812345671', 'Jakarta', 1),
(120, 'kasir123', '', 'Kasir2', 'Satudua', '0812345672', 'Jakarta', 2),
(130, 'kasir2', '', 'Kasir2', 'Dua', '0812345673', 'Jakarta', 2),
(140, 'gudang1', '', 'Gudang1', 'Tiga', '0812345672', 'Jakarta', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Penjualan`
--

CREATE TABLE `Penjualan` (
  `IdPenjualan` int(10) NOT NULL,
  `JumlahPenjualan` int(16) NOT NULL,
  `HargaJual` int(16) NOT NULL,
  `IdPengguna` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Penjualan`
--

INSERT INTO `Penjualan` (`IdPenjualan`, `JumlahPenjualan`, `HargaJual`, `IdPengguna`) VALUES
(41, 10, 20000, 120),
(42, 20, 40000, 120),
(43, 30, 60000, 120),
(44, 40, 80000, 120),
(45, 50, 100000, 120),
(46, 60, 120000, 120),
(47, 70, 140000, 120),
(48, 80, 160000, 120),
(49, 90, 180000, 120),
(410, 100, 200000, 120),
(411, 110, 220000, 120),
(412, 120, 240000, 120),
(413, 130, 260000, 120),
(414, 140, 280000, 120),
(415, 150, 300000, 120),
(416, 160, 320000, 120),
(417, 170, 340000, 120),
(418, 180, 360000, 120),
(419, 190, 380000, 120),
(420, 200, 400000, 120);

-- --------------------------------------------------------

--
-- Table structure for table `Supplier`
--

CREATE TABLE `Supplier` (
  `IdSupplier` int(10) NOT NULL,
  `NamaSupplier` varchar(255) NOT NULL,
  `NoHp` varchar(25) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `IdPembelian` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Supplier`
--

INSERT INTO `Supplier` (`IdSupplier`, `NamaSupplier`, `NoHp`, `Alamat`, `IdPembelian`) VALUES
(51, 'PT Indo Jaya', '0812345671', 'Jl. Raya Bogor', 31),
(52, 'PT Mitra Jaya', '0812347892', 'Jl. Raya Tangerang', 32),
(53, 'PT Sumber Berkah', '081567893', 'Jl. Raya Bekasi', 33),
(54, 'PT Berkah Jaya', '081567894', 'Jl. Raya Depok', 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Barang`
--
ALTER TABLE `Barang`
  ADD PRIMARY KEY (`IdBarang`),
  ADD KEY `barang_ibfk_1` (`IdPengguna`);

--
-- Indexes for table `HakAkses`
--
ALTER TABLE `HakAkses`
  ADD PRIMARY KEY (`IdAkses`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `Pelanggan`
--
ALTER TABLE `Pelanggan`
  ADD PRIMARY KEY (`IdPelanggan`),
  ADD KEY `IdPenjualan` (`IdPenjualan`);

--
-- Indexes for table `Pembelian`
--
ALTER TABLE `Pembelian`
  ADD PRIMARY KEY (`IdPembelian`),
  ADD KEY `IdPengguna` (`IdPengguna`);

--
-- Indexes for table `Pengguna`
--
ALTER TABLE `Pengguna`
  ADD PRIMARY KEY (`IdPengguna`),
  ADD KEY `pengguna_ibfk_1` (`IdAkses`);

--
-- Indexes for table `Penjualan`
--
ALTER TABLE `Penjualan`
  ADD PRIMARY KEY (`IdPenjualan`),
  ADD KEY `IdPengguna` (`IdPengguna`);

--
-- Indexes for table `Supplier`
--
ALTER TABLE `Supplier`
  ADD PRIMARY KEY (`IdSupplier`),
  ADD KEY `IdPembelian` (`IdPembelian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Barang`
--
ALTER TABLE `Barang`
  MODIFY `IdBarang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `Pelanggan`
--
ALTER TABLE `Pelanggan`
  MODIFY `IdPelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=612;

--
-- AUTO_INCREMENT for table `Pembelian`
--
ALTER TABLE `Pembelian`
  MODIFY `IdPembelian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321;

--
-- AUTO_INCREMENT for table `Pengguna`
--
ALTER TABLE `Pengguna`
  MODIFY `IdPengguna` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `Penjualan`
--
ALTER TABLE `Penjualan`
  MODIFY `IdPenjualan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=421;

--
-- AUTO_INCREMENT for table `Supplier`
--
ALTER TABLE `Supplier`
  MODIFY `IdSupplier` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Barang`
--
ALTER TABLE `Barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `Pengguna` (`IdPengguna`);

--
-- Constraints for table `Pelanggan`
--
ALTER TABLE `Pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`IdPenjualan`) REFERENCES `db_kampus`.`Penjualan` (`IdPenjualan`);

--
-- Constraints for table `Pembelian`
--
ALTER TABLE `Pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `db_kampus`.`Pengguna` (`IdPengguna`);

--
-- Constraints for table `Pengguna`
--
ALTER TABLE `Pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`IdAkses`) REFERENCES `HakAkses` (`IdAkses`);

--
-- Constraints for table `Penjualan`
--
ALTER TABLE `Penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `db_kampus`.`Pengguna` (`IdPengguna`);

--
-- Constraints for table `Supplier`
--
ALTER TABLE `Supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`IdPembelian`) REFERENCES `db_kampus`.`Pembelian` (`IdPembelian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
