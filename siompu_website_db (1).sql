-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 10:13 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siompu_website_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `nama`) VALUES
(1, 'islam'),
(2, 'kristen'),
(3, 'hindu'),
(4, 'katolok'),
(5, 'budha');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id` int(11) NOT NULL,
  `nama_desa` varchar(50) DEFAULT NULL,
  `kecamatan_id` int(11) DEFAULT NULL,
  `luas_wilayah` varchar(50) DEFAULT NULL,
  `nama_kepdes` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id`, `nama_desa`, `kecamatan_id`, `luas_wilayah`, `nama_kepdes`) VALUES
(1, 'LALOLE', 2, '21222', 'LA Sarifu'),
(2, 'KAMOALI', 2, '21222', 'paryoto'),
(3, 'MOKOBEAU', 2, '21222', 'paryoto'),
(4, 'WATUAMPARA', 2, '21222', 'paryoto'),
(5, 'LAMANINGGARA', 2, '2001', 'LA Muliadi'),
(6, 'KATAMPE', 2, '2456', 'La Ariadi'),
(7, 'MOLONA', 2, '2456', 'La Ariadi'),
(8, 'MBANUA', 2, '2001', 'LA Muliadi');

-- --------------------------------------------------------

--
-- Table structure for table `dusun`
--

CREATE TABLE `dusun` (
  `id` int(11) NOT NULL,
  `nama_dusun` varchar(50) DEFAULT NULL,
  `desa_id` int(11) DEFAULT NULL,
  `jumlah_rt` int(11) DEFAULT NULL,
  `jumlah_rw` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dusun`
--

INSERT INTO `dusun` (`id`, `nama_dusun`, `desa_id`, `jumlah_rt`, `jumlah_rw`) VALUES
(1, 'labolo', 1, 150, 150),
(2, 'labantu', 1, 151, 151),
(3, 'laposi', 1, 160, 160),
(6, 'lalole', 2, 150, 151),
(7, 'kamoali', 2, 120, 120),
(8, 'bandingi', 2, 120, 120),
(9, 'kambululi', 2, 100, 100),
(10, 'kanawa', 3, 120, 120),
(11, 'tanah_bengko', 3, 120, 120),
(12, 'lapolo', 4, 120, 120),
(13, 'watuampara', 4, 120, 120),
(14, 'kampo_baru', 6, 110, 110),
(15, 'wangkopipi', 6, 120, 120),
(16, 'kalokaloko', 6, 120, 120),
(17, 'katampe', 6, 120, 120);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `desa_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) DEFAULT NULL,
  `visi_misi` text,
  `sejarah` text,
  `total_penduduk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama_kecamatan`, `visi_misi`, `sejarah`, `total_penduduk`) VALUES
(2, 'Siompu', 'Tidak ada', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 21000),
(6, 'Siompu Barat', 'Mangan telo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 21000);

-- --------------------------------------------------------

--
-- Table structure for table `kematian`
--

CREATE TABLE `kematian` (
  `id` int(50) NOT NULL,
  `tanggal_kematian` date NOT NULL,
  `nik` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masukkan`
--

CREATE TABLE `masukkan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pesan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--

CREATE TABLE `mutasi` (
  `id` int(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `tujuan_mutasi` varchar(20) NOT NULL,
  `tanggal_mutasi` date NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `dusun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nama_penduduk` varchar(50) DEFAULT NULL,
  `dusun_id` int(11) DEFAULT NULL,
  `no_kk` varchar(50) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `status_menikah` enum('Y','N') DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `agama_id` int(11) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('P','L') DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `pendidikan_terakhir` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nama_penduduk`, `dusun_id`, `no_kk`, `nik`, `alamat`, `tempat_lahir`, `status_menikah`, `pekerjaan`, `agama_id`, `tgl_lahir`, `jenis_kelamin`, `no_hp`, `pendidikan_terakhir`) VALUES
(1, 'La Safili', 1, '7404261806080069', '7404261105500001', 'jln.labolo', 'Molona', 'Y', 'Nelayan', 1, '1950-05-11', 'L', NULL, 'SD'),
(2, 'Wabaida', 1, '7404261806080069', '7404265205630001', 'Jln.labolo', 'Molona', 'Y', 'IRT', 1, '1963-05-12', 'P', NULL, 'SD');

-- --------------------------------------------------------

--
-- Table structure for table `potensi_desa`
--

CREATE TABLE `potensi_desa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `desa_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `potensi_desa`
--

INSERT INTO `potensi_desa` (`id`, `nama`, `desa_id`) VALUES
(1, 'Kolam renang luas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `type` enum('ADMIN','KEPDES') DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `type`, `password`) VALUES
(1, 'cahyowhy', 'ADMIN', '1234'),
(2, 'admin', 'ADMIN', 'admin'),
(3, 'admin', 'ADMIN', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama_wisata` text,
  `desa_id` int(11) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama_wisata`, `desa_id`, `keterangan`) VALUES
(2, 'kolam renang', 2, 'ini adalah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kecamatan_id` (`kecamatan_id`);

--
-- Indexes for table `dusun`
--
ALTER TABLE `dusun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `desa_id` (`desa_id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_galeri_desa` (`desa_id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `masukkan`
--
ALTER TABLE `masukkan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_ktp` (`nik`),
  ADD KEY `agama_id` (`agama_id`),
  ADD KEY `dusun_id` (`dusun_id`);

--
-- Indexes for table `potensi_desa`
--
ALTER TABLE `potensi_desa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_potensi_desa_desa` (`desa_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_wisata_desa` (`desa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `dusun`
--
ALTER TABLE `dusun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masukkan`
--
ALTER TABLE `masukkan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `potensi_desa`
--
ALTER TABLE `potensi_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `desa`
--
ALTER TABLE `desa`
  ADD CONSTRAINT `FK_desa_kecamatan` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`id`);

--
-- Constraints for table `dusun`
--
ALTER TABLE `dusun`
  ADD CONSTRAINT `FK_dusun_desa` FOREIGN KEY (`desa_id`) REFERENCES `desa` (`id`);

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `FK_galeri_desa` FOREIGN KEY (`desa_id`) REFERENCES `desa` (`id`);

--
-- Constraints for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `FK_penduduk_agama` FOREIGN KEY (`agama_id`) REFERENCES `agama` (`id`),
  ADD CONSTRAINT `FK_penduduk_dusun` FOREIGN KEY (`dusun_id`) REFERENCES `dusun` (`id`);

--
-- Constraints for table `potensi_desa`
--
ALTER TABLE `potensi_desa`
  ADD CONSTRAINT `FK_potensi_desa_desa` FOREIGN KEY (`desa_id`) REFERENCES `desa` (`id`);

--
-- Constraints for table `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `FK_wisata_desa` FOREIGN KEY (`desa_id`) REFERENCES `desa` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
