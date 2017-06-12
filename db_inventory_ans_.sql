-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 12 Jun 2017 pada 06.19
-- Versi Server: 5.5.25a
-- Versi PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_inventory(ans)`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `kode` varchar(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `jml` varchar(10) NOT NULL,
  `pokok` varchar(20) NOT NULL,
  `jual` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode`, `nama`, `kategori`, `jml`, `pokok`, `jual`) VALUES
('0010', 'kulkas', 'elektronik', '3', '2500000', '3000000'),
('009', 'ricecooker', 'elektronik', '3', '2500000', '3000000'),
('008', 'hp', 'elektronik', '3', '2500000', '3000000'),
('007', 'setrika', 'elektronik', '3', '2500000', '3000000'),
('006', 'dvd', 'elektronik', '3', '2500000', '3000000'),
('005', 'ac', 'elektronik', '3', '2500000', '3000000'),
('004', 'laptobe', 'elektronik', '3', '2500000', '3000000'),
('003', 'televisi', 'elektronik', '3', '2500000', '3000000'),
('002', 'komputer', 'elektronik', '3', '2500000', '3000000'),
('001', 'komputer', 'elektronik', '3', '2500000', '3000000'),
('0011', 'mesin cuci', 'elektronik', '3', '2500000', '3000000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
