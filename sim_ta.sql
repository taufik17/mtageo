-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Mar 2019 pada 04.11
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim_ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `Email` varchar(70) NOT NULL,
  `Password` varchar(70) NOT NULL,
  `NIP/NRK` int(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `bidang ilmu` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Nama_mhs` varchar(50) DEFAULT NULL,
  `NIM` int(10) DEFAULT NULL,
  `Email` varchar(70) DEFAULT NULL,
  `Password` varchar(70) DEFAULT NULL,
  `Angkatan` int(10) DEFAULT NULL,
  `Status_login` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nama_mhs`, `NIM`, `Email`, `Password`, `Angkatan`, `Status_login`) VALUES
('Taufik Agung Santoso', 14116007, 'taufik@gmail.com', 'd4305d7ed2ec97107cd6eb8dd4b6f6b7', 2016, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penguji`
--

CREATE TABLE `penguji` (
  `id_penguji` int(20) DEFAULT NULL,
  `nip/nrk_penguji` int(20) DEFAULT NULL,
  `nama_penguji` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `seminar hasil`
--

CREATE TABLE `seminar hasil` (
  `NIM` int(10) NOT NULL,
  `NIP/NRK` int(20) NOT NULL,
  `id_ta` int(20) NOT NULL,
  `id_seminar` int(20) NOT NULL,
  `tgl_seminar` date NOT NULL,
  `id_penguji` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sidang`
--

CREATE TABLE `sidang` (
  `id_penguji` int(20) DEFAULT NULL,
  `NIP/NRK` int(20) DEFAULT NULL,
  `NIM` int(20) DEFAULT NULL,
  `tgl_sidang` date NOT NULL,
  `id_sidang` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas akhir`
--

CREATE TABLE `tugas akhir` (
  `NIM` int(10) NOT NULL,
  `NIP/NRK` int(20) DEFAULT NULL,
  `id_ta` varchar(20) DEFAULT NULL,
  `status_ta` varchar(20) NOT NULL,
  `dosen_pembimbing1` varchar(50) DEFAULT NULL,
  `dosen_pembimbing2` varchar(50) DEFAULT NULL,
  `judul_ta1` varchar(50) DEFAULT NULL,
  `judul_ta2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
