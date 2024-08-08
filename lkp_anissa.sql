-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2022 pada 15.36
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `lkp_anissa`
--
CREATE DATABASE IF NOT EXISTS `lkp_anissa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lkp_anissa`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pendaftaran`
--

CREATE TABLE IF NOT EXISTS `data_pendaftaran` (
  `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `no_identitas` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status_sekolah` varchar(50) NOT NULL,
  `status_pekerjaan` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `usia` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `keterangan` varchar(2000) NOT NULL,
  PRIMARY KEY (`id_pendaftar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `data_pendaftaran`
--

INSERT INTO `data_pendaftaran` (`id_pendaftar`, `nama`, `no_identitas`, `alamat`, `status_sekolah`, `status_pekerjaan`, `foto`, `ijazah`, `telepon`, `usia`, `tanggal`, `status`, `keterangan`) VALUES
(8, 'ummul', '72090566446445555', 'dondo', 'Tidak Melanjutkan', 'Tidak Melanjutkan', '1.jpg', '', '+6282290043739', 20, '2022-06-08', 'Diterima', 'Terimakasih , Anda telah melengkapi berkas yang sudah sesuai'),
(9, 'jeje', '72090568957562', 'ampana', 'Tidak Melanjutkan', 'Pengangguran', '4.jpg', 'Pengantar PHP.ppt', '+6282290043739', 25, '2022-04-19', 'Diterima', 'Terimakasih , Anda telah melengkapi berkas yang sudah sesuai'),
(11, 'Equator Siweli', '146623232', 'dondo', 'Tidak Melanjutkan', 'Tidak Melanjutkan', '6.jpg', 'Pengantar PHP.ppt', '+6282290043739', 25, '2022-05-17', 'Ditolak', 'maaf ya, data yang anda masukkan tidak sesuai dengan kriteria kami'),
(12, 'boris', '789456', 'ampana', 'Tidak Sekolah', 'Tidak Memiliki Pekerjaan Tetap', '', '', '+6282290043739', 23, '2022-05-20', 'Diterima', ''),
(13, 'cece', '456123', 'ampana', 'Tidak Sekolah', 'Tidak Sekolah', '279223455_7400166796691366_3381912763382236874_n.jpg', 'Pengantar PHP.ppt', '+6282290043739', 21, '2022-05-20', 'Pending', ''),
(14, 'brian', '852963', 'dondo', 'Tidak Sekolah', 'Tidak Memiliki Pekerjaan Tetap', '', '', '+6282290043739', 20, '2022-05-20', 'Diterima', ''),
(15, 'wira', '720908459685', 'ampana', 'Tidak Melanjutkan', 'Tidak Memiliki Pekerjaan Tetap', '279223455_7400166796691366_3381912763382236874_n.jpg', 'Pengantar PHP.ppt', '+6282290043739', 20, '2022-06-04', 'Pending', ''),
(17, 'revi', '789456123', 'dondo', 'Tidak Sekolah', 'Pengangguran', '9.jpg', 'Pengantar PHP.ppt', '+6282290043739', 21, '2022-06-04', 'Pending', ''),
(18, 'Nafaurba', '789456123', 'palu', 'Tidak Sekolah', 'Pengangguran', '', '', '082344612838', 20, '2022-06-09', 'Diterima', 'selamat anda telah memenuhi semua persyaratannya , terimakasih setelah ini anda dapat mengikuti pembelajaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_usaha`
--

CREATE TABLE IF NOT EXISTS `data_usaha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `omset` varchar(100) NOT NULL,
  `foto` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `data_usaha`
--

INSERT INTO `data_usaha` (`id`, `nama`, `alamat`, `nama_anggota`, `tanggal`, `omset`, `foto`) VALUES
(4, 'Fashion Nafaurba', 'dondo', 'Najela , dan Ma’rifa Tuljannah', '2022-06-08', 'Rp. 2.050.000', '1.jpg'),
(5, 'jeje fashioon', 'jl.nuri ', 'Najela , dan Ma’rifa Tuljannah', '2022-06-08', 'Rp. 10.000.000', '3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_create` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `is_active`, `date_create`) VALUES
(5, 'fafa', 'fafacantik@gmail.com', '$2y$10$YuC2FqHeNgMySn9Tg9cssuSsNaFwFzHR.j1dsNlwdfCXvPcvAloSC', 1, 1, 1654607041),
(6, 'yuyun', 'yuyun@gmail.com', '$2y$10$CEIMuxq3OC8E63ii5MxUU.Z7b6UtoNdib9WxAlZjJhkXv.GvxCujO', 2, 1, 1654279061),
(8, 'Moh Rifaldi A Way', 'mohrifaldiway@gmail.com', '$2y$10$LJ4RxiSZz2HClwItMGbkfOZ4eTjUrHSB4pffxg4iWmwuyJRtlp.d6', 1, 1, 1654699581),
(9, 'vivitalapiu', 'vivitalapiu@gmail.com', '$2y$10$/Ldz8nhOyBiodqy1qCHyy.m0l8AkAa2Or6peMOJDxcojmYK.P1Sne', 1, 1, 1654703001);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
