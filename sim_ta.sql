-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2019 pada 14.02
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

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
-- Struktur dari tabel `daftarta`
--

CREATE TABLE `daftarta` (
  `id_TA` int(11) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `EmailDosen` varchar(70) NOT NULL,
  `Validasi_TA` int(11) NOT NULL,
  `Judul_TA` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftarta`
--

INSERT INTO `daftarta` (`id_TA`, `Email`, `EmailDosen`, `Validasi_TA`, `Judul_TA`) VALUES
(1, 'taufik.14116007@student.itera.ac.id', 'handoyo.geoph@tg.itera.ac.id', 0, 'membuat website');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `EmailDosen` varchar(70) NOT NULL,
  `Password` varchar(70) NOT NULL,
  `NIP/NRK` int(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `bidang ilmu` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`EmailDosen`, `Password`, `NIP/NRK`, `Nama`, `bidang ilmu`) VALUES
('handoyo.geoph@tg.itera.ac.id', 'fa821be92cbda78d72a38665a85faec8', 123, 'Handoyo, S.Si., M.T.', 'Rock Physics & Reservoir Characterizatio');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Nama_mhs` varchar(50) DEFAULT NULL,
  `NIM` int(10) DEFAULT NULL,
  `Email` varchar(70) NOT NULL,
  `Password` varchar(70) DEFAULT NULL,
  `Angkatan` int(10) DEFAULT NULL,
  `Status_login` varchar(20) DEFAULT NULL,
  `Jurusan` varchar(50) NOT NULL DEFAULT 'Teknik Geofisika',
  `semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nama_mhs`, `NIM`, `Email`, `Password`, `Angkatan`, `Status_login`, `Jurusan`, `semester`) VALUES
('Taufik Agung Santoso', NULL, 'miftakhul.14116078@student.itera.ac.id', 'ae2b1fca515949e5d54fb22b8ed95575', NULL, NULL, 'Teknik Geofisika', 0),
('Taufik Agung Santoso', NULL, 'taufik.14116007@student.itera.ac.id', 'd4305d7ed2ec97107cd6eb8dd4b6f6b7', NULL, NULL, 'Teknik Geofisika', 0),
('Taufik Agung Santoso', 14116007, 'taufik@gmail.com', 'd4305d7ed2ec97107cd6eb8dd4b6f6b7', 2016, NULL, 'Teknik Geofisika', 0);

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

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftarta`
--
ALTER TABLE `daftarta`
  ADD PRIMARY KEY (`id_TA`),
  ADD KEY `Email` (`Email`),
  ADD KEY `EmailDosen` (`EmailDosen`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`EmailDosen`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftarta`
--
ALTER TABLE `daftarta`
  MODIFY `id_TA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftarta`
--
ALTER TABLE `daftarta`
  ADD CONSTRAINT `daftarta_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `mahasiswa` (`Email`) ON UPDATE CASCADE,
  ADD CONSTRAINT `daftarta_ibfk_2` FOREIGN KEY (`EmailDosen`) REFERENCES `dosen` (`EmailDosen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
