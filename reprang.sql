-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Nov 2020 pada 15.11
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reprang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE IF NOT EXISTS `bidang` (
  `id_bidang` int(6) NOT NULL AUTO_INCREMENT,
  `id_urusan` int(6) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `nama_bidang` varchar(100) NOT NULL,
  PRIMARY KEY (`id_bidang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`id_bidang`, `id_urusan`, `kode`, `nama_bidang`) VALUES
(1, 1, '1.1', 'pranata computing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang_opd`
--

CREATE TABLE IF NOT EXISTS `bidang_opd` (
  `id_bidang_opd` int(6) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id_bidang_opd`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `bidang_opd`
--

INSERT INTO `bidang_opd` (`id_bidang_opd`, `nama`) VALUES
(2, 'egov');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id_kegiatan` int(6) NOT NULL AUTO_INCREMENT,
  `id_pptk` int(6) NOT NULL,
  `id_program` int(6) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `id_pptk`, `id_program`, `kode`, `nama_kegiatan`) VALUES
(1, 5, 1, '1.1', 'Database aplikasi'),
(3, 4, 1, '1.3', 'kegiatan sulai'),
(5, 8, 1, '1.5', 'asad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `periode`
--

CREATE TABLE IF NOT EXISTS `periode` (
  `id_periode` int(6) NOT NULL AUTO_INCREMENT,
  `periode` varchar(4) NOT NULL,
  PRIMARY KEY (`id_periode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `periode`
--

INSERT INTO `periode` (`id_periode`, `periode`) VALUES
(2, '2020'),
(3, '2021'),
(4, '2022'),
(5, '2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program`
--

CREATE TABLE IF NOT EXISTS `program` (
  `id_program` int(6) NOT NULL AUTO_INCREMENT,
  `id_bidang` int(11) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `nama_program` varchar(100) NOT NULL,
  PRIMARY KEY (`id_program`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `program`
--

INSERT INTO `program` (`id_program`, `id_bidang`, `kode`, `nama_program`) VALUES
(1, 1, '1.1', 'Exporting database');

-- --------------------------------------------------------

--
-- Struktur dari tabel `programkerja`
--

CREATE TABLE IF NOT EXISTS `programkerja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(6) NOT NULL,
  `id_urusan` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `id_program` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `volume` varchar(100) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `kondisi_awal` varchar(100) NOT NULL,
  `permasalahan` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `programkerja`
--

INSERT INTO `programkerja` (`id`, `id_user`, `id_urusan`, `id_bidang`, `id_program`, `id_kegiatan`, `id_sub`, `keterangan`, `uraian`, `volume`, `satuan`, `kondisi_awal`, `permasalahan`, `status`) VALUES
(12, 5, 1, 1, 1, 1, 1, 'ini kegiatan program kerja rezky', '1000', '100', '20', '32', 'backup', 1),
(14, 4, 1, 1, 1, 3, 3, 'coba', '2', '1', '3', '4', '5', 1),
(20, 5, 1, 1, 1, 1, 1, 'ccc', 'ccc', 'ccc', 'ccc', 'ccc', 'ccc', 1),
(21, 5, 1, 1, 1, 1, 1, '299999', '299999', '299999', '299999', '299999', '299999', 1),
(22, 5, 1, 1, 1, 1, 1, 'rrr', 'rr', 'rrr', 'rrr', 'rrr', 'rr', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub`
--

CREATE TABLE IF NOT EXISTS `sub` (
  `id_sub` int(6) NOT NULL AUTO_INCREMENT,
  `id_kegiatan` int(6) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `nama_sub` varchar(100) NOT NULL,
  PRIMARY KEY (`id_sub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `sub`
--

INSERT INTO `sub` (`id_sub`, `id_kegiatan`, `kode`, `nama_sub`) VALUES
(1, 1, '1.1', 'sub db aplikasi'),
(3, 3, '3.3', 'coba'),
(6, 1, '1.6', 'sub baru'),
(7, 5, '5.7', 'asd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `targetkegiatan`
--

CREATE TABLE IF NOT EXISTS `targetkegiatan` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `id_programkerja` int(6) NOT NULL,
  `id_periode` int(6) NOT NULL,
  `pagu` varchar(100) NOT NULL,
  `volume` varchar(100) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `targetkegiatan`
--

INSERT INTO `targetkegiatan` (`id`, `id_programkerja`, `id_periode`, `pagu`, `volume`, `satuan`) VALUES
(4, 12, 3, '2000', '150', '10'),
(6, 12, 2, '1', '2', '3'),
(7, 12, 5, '2132', '212213', '211412');

-- --------------------------------------------------------

--
-- Struktur dari tabel `urusan`
--

CREATE TABLE IF NOT EXISTS `urusan` (
  `id_urusan` int(6) NOT NULL AUTO_INCREMENT,
  `nama_urusan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_urusan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `urusan`
--

INSERT INTO `urusan` (`id_urusan`, `nama_urusan`) VALUES
(1, 'Urusan pertama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `role` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama_lengkap`, `nip`, `role`) VALUES
(1, 'admin', '123456', 'admin', '123', 'superadmin'),
(4, 'sulai', 'sulai', 'sulai', 'sulai', 'user'),
(5, 'rezky', 'rezky', 'rezky', '1234', 'user'),
(8, 'asd', 'asd', 'asd', '123', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
