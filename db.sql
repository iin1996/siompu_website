-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.5.36 - MySQL Community Server (GPL)
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Membuang struktur basisdata untuk siompu_website_db
CREATE DATABASE IF NOT EXISTS `siompu_website_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `siompu_website_db`;

-- membuang struktur untuk table siompu_website_db.agama
CREATE TABLE IF NOT EXISTS `agama` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
-- membuang struktur untuk table siompu_website_db.desa
CREATE TABLE IF NOT EXISTS `desa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `potensi_desa` text,
  `nama_desa` varchar(50) DEFAULT NULL,
  `kecamatan_id` int(11) DEFAULT NULL,
  `wisata_id` int(11) DEFAULT NULL,
  `luas_wilayah` varchar(50) DEFAULT NULL,
  `nama_kepdes` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kecamatan_id` (`kecamatan_id`),
  KEY `wisata_id` (`wisata_id`),
  CONSTRAINT `FK_desa_wisata` FOREIGN KEY (`wisata_id`) REFERENCES `wisata` (`id`),
  CONSTRAINT `FK_desa_kecamatan` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
-- membuang struktur untuk table siompu_website_db.dusun
CREATE TABLE IF NOT EXISTS `dusun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dusun` int(11) DEFAULT NULL,
  `desa_id` int(11) DEFAULT NULL,
  `jumlah_rt` int(11) DEFAULT NULL,
  `jumlah_rw` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `desa_id` (`desa_id`),
  CONSTRAINT `FK_dusun_desa` FOREIGN KEY (`desa_id`) REFERENCES `desa` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
-- membuang struktur untuk table siompu_website_db.kecamatan
CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` int(11) DEFAULT NULL,
  `visi_misi` int(11) DEFAULT NULL,
  `sejarah` int(11) DEFAULT NULL,
  `total_penduduk` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
-- membuang struktur untuk table siompu_website_db.masukkan
CREATE TABLE IF NOT EXISTS `masukkan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pesan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
-- membuang struktur untuk table siompu_website_db.penduduk
CREATE TABLE IF NOT EXISTS `penduduk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penduduk` varchar(50) DEFAULT NULL,
  `dusun_id` int(11) DEFAULT NULL,
  `no_kk` int(50) DEFAULT NULL,
  `no_ktp` int(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `status_menikah` enum('Y','N') DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `agama_id` int(11) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('P','L') DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `pendidikan_terakhir` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `no_ktp` (`no_ktp`),
  KEY `agama_id` (`agama_id`),
  KEY `dusun_id` (`dusun_id`),
  CONSTRAINT `FK_penduduk_dusun` FOREIGN KEY (`dusun_id`) REFERENCES `dusun` (`id`),
  CONSTRAINT `FK_penduduk_agama` FOREIGN KEY (`agama_id`) REFERENCES `agama` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
-- membuang struktur untuk table siompu_website_db.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `type` enum('ADMIN','KEPDES') DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
-- membuang struktur untuk table siompu_website_db.wisata
CREATE TABLE IF NOT EXISTS `wisata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_wisata` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
