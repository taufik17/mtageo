-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2019 pada 12.18
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
  `EmailDosen` varchar(70) NOT NULL,
  `Password` varchar(70) NOT NULL,
  `NIP_NRK` int(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `bidang_ilmu` varchar(40) NOT NULL,
  `Login_dsn` int(1) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT 'avatar5.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`EmailDosen`, `Password`, `NIP_NRK`, `Nama`, `bidang_ilmu`, `Login_dsn`, `foto`) VALUES
('andri.paembonan@tg.itera.ac.id', 'd6b94747ac43286edd4b6571b68b9581', 768686454, 'Andri Yadi Paembonan, S.Si.,M.T.', 'Electromagnetic & Geoelectrical Method', 1, 'avatar5.png'),
('cahli.suhendi@tg.itera.ac.id ', 'd6b94747ac43286edd4b6571b68b9581', 345656778, 'Cahli Suhendi, S.Si., M.T.', 'Geomechanics & Computational Seismology', 1, 'avatar5.png'),
('erlangga.fattah@tg.itera.ac.id ', 'd6b94747ac43286edd4b6571b68b9581', 122335478, 'Erlangga Ibrahim Fattah, S.Si., M.T.', 'Seismology & Geoelectrical Tomography', 1, 'avatar5.png'),
('gestin.ekawati@tg.itera.ac.id', 'd6b94747ac43286edd4b6571b68b9581', 1234556678, 'Gestin Mey Ekawati, S.T., M.T.', 'Gravity dan Seismic', 1, 'avatar5.png'),
('handoyo.geoph@tg.itera.ac.id', 'fa821be92cbda78d72a38665a85faec8', 123, 'Handoyo, S.Si., M.T.', 'Rock Physics & Reservoir Characterizatio', 0, 'avatar5.png'),
('harnanti.yogaputri.hutami@tg.itera.ac.id', 'd6b94747ac43286edd4b6571b68b9581', 546788783, 'Harnanti Yogaputri Hutami, S.Si., M.T. ', 'Reservoir Characterization', 1, 'avatar5.png'),
('intan.andriani@tg.itera.ac.id ', 'd6b94747ac43286edd4b6571b68b9581', 67656587, 'intan Andriani Putri, S.Si.,M.T.', 'Seismik processing & Reservoir Character', 1, 'avatar5.png'),
('maria.sudibyo@tg.itera.ac.id', 'd6b94747ac43286edd4b6571b68b9581', 273482367, 'Maria Rosalita Pujiastuti Sudibyo, S.Si., M.Sc.', 'Volcano-Seismology', 1, 'avatar5.png'),
('megawati@tg.itera.ac.id', 'd6b94747ac43286edd4b6571b68b9581', 38203928, 'Megawati, S.Si., M.Sc.', 'Seismotectonic', 1, 'Megawati-240x3001.jpg'),
('mokhammad.erlangga@tg,itera.ac.id', 'd6b94747ac43286edd4b6571b68b9581', 8218791, 'Mokhammad Puput Erlangga, S.Si, M.T.', 'Seismic & Reservoir Characterization', 1, 'avatar5.png'),
('nono.santoso@tg.itera.ac.id', 'd6b94747ac43286edd4b6571b68b9581', 55675456, 'Dr. Nono Agus Santoso, S.Si., M.T.', 'Volcanology, Geochemistry, & Rock Magnet', 1, 'avatar5.png'),
('reza.rizki@tg.itera.ac.id', 'd6b94747ac43286edd4b6571b68b9581', 65687844, 'Reza Rizki, S.T., M.T.', 'Gravity, Magnetic, & Geothermal', 1, 'avatar5.png'),
('rhahmi.pesma@tg.itera.ac.id', 'd6b94747ac43286edd4b6571b68b9581', 278321233, 'Rhahmi Adni Pesma, S.Si., M.Si.', 'Physics & Instrumentation', 1, 'avatar5.png'),
('risky.martin@tg.itera.ac.id', 'd6b94747ac43286edd4b6571b68b9581', 878967566, 'Risky Martin Antosia, S.Si.,M.T.', 'geophysical Instrumentation', 1, 'avatar5.png'),
('rizka@tg.itera.ac.id', 'd6b94747ac43286edd4b6571b68b9581', 115678889, 'Rizka, S.T., M.T.', 'Near Surface Geophysics', 1, 'avatar5.png'),
('ruhul@tg.itera.ac.id ', 'd6b94747ac43286edd4b6571b68b9581', 1112234455, 'Ruhul Firdaus, S.T., M.T.', 'Seismic dan Computat', 1, 'avatar5.png'),
('soni.satiawan@tg.itera.ac.id', 'd6b94747ac43286edd4b6571b68b9581', 678768432, 'Soni Satiawan, S.T., M.Sc.', 'Seismic Imaging & Near Surface Geophysic', 1, 'avatar5.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `koordinator`
--

CREATE TABLE `koordinator` (
  `EmailKoor` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `Nama` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT 'avatar5.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `koordinator`
--

INSERT INTO `koordinator` (`EmailKoor`, `password`, `Nama`, `foto`) VALUES
('koor@itera.ac.id', '6091496a74949f21e59b3f64607552e7', 'Koordinator', 'avatar5.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Nama_mhs` varchar(50) DEFAULT NULL,
  `NIM` int(10) DEFAULT NULL,
  `Email` varchar(70) NOT NULL,
  `Password` varchar(70) DEFAULT NULL,
  `Jurusan` varchar(50) NOT NULL DEFAULT 'Teknik Geofisika',
  `semester` int(2) NOT NULL,
  `file_proposal` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT 'avatar5.png',
  `status_ta` int(2) NOT NULL DEFAULT '0',
  `JK` enum('Laki - Laki','Perempuan','--','') NOT NULL DEFAULT '--',
  `telp` bigint(15) DEFAULT NULL,
  `alamat` varchar(50) NOT NULL,
  `st_profil` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nama_mhs`, `NIM`, `Email`, `Password`, `Jurusan`, `semester`, `file_proposal`, `foto`, `status_ta`, `JK`, `telp`, `alamat`, `st_profil`) VALUES
('bejo', 14116008, 'bejo.14116008@student.itera.ac.id', '7d764b083dae04801b30b288ce7d0dcd', 'Teknik Geofisika', 0, '', '84479_copy.jpg', 0, 'Laki - Laki', 0, '', 1),
('Ilman Nugroho', 14116008, 'ilman.14116007@student.itera.ac.id', '7d764b083dae04801b30b288ce7d0dcd', 'Teknik Geofisika', 0, '', 'DSC00742.JPG', 3, 'Laki - Laki', 85357037093, 'desa umbul natim\r\nway hui', 0),
('Mu\'minatul Faizah', NULL, 'muminatul.14116172@student.itera.ac.id', '827ccb0eea8a706c4c34a16891f84e7b', 'Teknik Geofisika', 0, '', 'avatar5.png', 0, '--', NULL, '', 0),
('Taufik agung Santoso', 14116007, 'taufik.14116007@student.itera.ac.id', '372dffe8fff6de45fc013eb4edb7e764', 'Teknik Geofisika', 6, '', 'taufik4.png', 9, 'Laki - Laki', 85357037093, 'desa umbul natim\r\nway hui lampung selatan', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `seminar_hasil`
--

CREATE TABLE `seminar_hasil` (
  `id_seminar_hasil` int(11) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `penguji1_seminar_hasil` varchar(50) NOT NULL,
  `penguji2_seminar_hasil` varchar(50) NOT NULL,
  `waktu_seminar_hasil` varchar(10) NOT NULL,
  `tgl_seminar_hasil` date NOT NULL,
  `Draft_TA2` varchar(50) NOT NULL,
  `ruangan` varchar(10) NOT NULL,
  `status_ta` int(1) NOT NULL,
  `st_waktu` int(2) NOT NULL,
  `st_tanggal` int(1) NOT NULL,
  `st_penguji1` int(1) NOT NULL,
  `st_penguji2` int(1) NOT NULL,
  `st_ruangan` int(1) NOT NULL,
  `st_draft_ta2` int(1) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `seminar_hasil`
--

INSERT INTO `seminar_hasil` (`id_seminar_hasil`, `Email`, `penguji1_seminar_hasil`, `penguji2_seminar_hasil`, `waktu_seminar_hasil`, `tgl_seminar_hasil`, `Draft_TA2`, `ruangan`, `status_ta`, `st_waktu`, `st_tanggal`, `st_penguji1`, `st_penguji2`, `st_ruangan`, `st_draft_ta2`, `catatan`) VALUES
(1, 'taufik.14116007@student.itera.ac.id', 'dosen penguji 1', 'dosen penguji 2', '2:30 PM', '2019-06-08', 'Tugas5.pdf', 'aula GKU', 9, 1, 1, 1, 1, 1, 1, 'SELAMAT melanjutkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seminar_ta`
--

CREATE TABLE `seminar_ta` (
  `id_seminar_ta` int(4) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `waktu_seminar_ta` varchar(10) NOT NULL,
  `tgl_seminar_ta` date NOT NULL,
  `penguji1_seminar_ta` varchar(50) NOT NULL,
  `penguji2_seminar_ta` varchar(50) NOT NULL,
  `Draft_TA` varchar(50) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  `status_ta` int(2) NOT NULL,
  `st_waktu` int(1) NOT NULL,
  `st_tanggal` int(1) NOT NULL,
  `st_penguji1` int(1) NOT NULL,
  `st_penguji2` int(1) NOT NULL,
  `st_ruangan` int(1) NOT NULL,
  `st_draft_ta` int(11) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `seminar_ta`
--

INSERT INTO `seminar_ta` (`id_seminar_ta`, `Email`, `waktu_seminar_ta`, `tgl_seminar_ta`, `penguji1_seminar_ta`, `penguji2_seminar_ta`, `Draft_TA`, `ruangan`, `status_ta`, `st_waktu`, `st_tanggal`, `st_penguji1`, `st_penguji2`, `st_ruangan`, `st_draft_ta`, `catatan`) VALUES
(1, 'taufik.14116007@student.itera.ac.id', '4:15 AM', '2019-06-05', 'dosen penguji 1', 'dosen penguji 2', 'Tugas4.pdf', 'aula gedung C', 9, 1, 1, 1, 1, 1, 1, 'selamat melanjtukan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sidang`
--

CREATE TABLE `sidang` (
  `id_sidang` int(7) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `tgl_sidang` date NOT NULL,
  `waktu_sidang` varchar(10) NOT NULL,
  `penguji1_sidang` varchar(50) NOT NULL,
  `penguji2_sidang` varchar(50) NOT NULL,
  `Draft_TA_Final` varchar(100) NOT NULL,
  `ruangan` varchar(20) NOT NULL,
  `transkrip` varchar(70) NOT NULL,
  `status_ta` int(2) NOT NULL,
  `st_waktu` int(1) NOT NULL,
  `st_tanggal` int(1) NOT NULL,
  `st_penguji1` int(1) NOT NULL,
  `st_penguji2` int(1) NOT NULL,
  `st_ruangan` int(1) NOT NULL,
  `st_transkrip` int(11) NOT NULL,
  `st_draft_ta_final` int(1) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas_akhir`
--

CREATE TABLE `tugas_akhir` (
  `id_ta` int(20) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `EmailDosen` varchar(70) DEFAULT NULL,
  `status_ta` int(2) NOT NULL DEFAULT '0',
  `dosen_pembimbing1` varchar(50) DEFAULT NULL,
  `dosen_pembimbing3` varchar(100) NOT NULL,
  `judul_ta` varchar(50) DEFAULT NULL,
  `judul_kp` varchar(50) NOT NULL,
  `data_proposal` varchar(50) DEFAULT NULL,
  `data_transkrip` varchar(50) DEFAULT NULL,
  `cv` varchar(50) DEFAULT NULL,
  `st_judul` int(1) NOT NULL,
  `st_kp` int(1) NOT NULL,
  `st_d1` int(1) NOT NULL,
  `st_d2` int(1) NOT NULL,
  `st_d3` int(1) NOT NULL,
  `st_cv` int(1) NOT NULL,
  `st_transkrip` int(1) NOT NULL,
  `st_proposal` int(1) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tugas_akhir`
--

INSERT INTO `tugas_akhir` (`id_ta`, `Email`, `EmailDosen`, `status_ta`, `dosen_pembimbing1`, `dosen_pembimbing3`, `judul_ta`, `judul_kp`, `data_proposal`, `data_transkrip`, `cv`, `st_judul`, `st_kp`, `st_d1`, `st_d2`, `st_d3`, `st_cv`, `st_transkrip`, `st_proposal`, `catatan`) VALUES
(1, 'taufik.14116007@student.itera.ac.id', 'megawati@tg.itera.ac.id', 9, 'pak lucky', 'pak rajiv', 'pemrograman python', 'python dalam data mining', 'Tugas1.pdf', 'Tugas2.pdf', 'Tugas3.pdf', 1, 1, 1, 1, 1, 1, 1, 1, 'silahkan lanjutkan'),
(2, 'ilman.14116007@student.itera.ac.id', 'megawati@tg.itera.ac.id', 3, 'pak indra', 'pak wayan', 'Teknologi nirkabel', 'wifi sebagai alat komunikasi', 'Tugas11.pdf', 'Tugas21.pdf', 'Tugas31.pdf', 1, 1, 1, 1, 1, 1, 1, 1, 'selamat melanjutkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `yudisium`
--

CREATE TABLE `yudisium` (
  `id_yudisium` int(11) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `trankrip` varchar(50) NOT NULL,
  `ijazah` varchar(50) NOT NULL,
  `akta` varchar(50) NOT NULL,
  `pasfoto` varchar(50) NOT NULL,
  `skukt` varchar(50) NOT NULL,
  `sklab` varchar(50) NOT NULL,
  `toefl` varchar(50) NOT NULL,
  `status_ta` int(2) NOT NULL,
  `st_transkrip` int(1) NOT NULL,
  `st_ijazah` int(1) NOT NULL,
  `st_akta` int(1) NOT NULL,
  `st_pasfoto` int(1) NOT NULL,
  `st_skukt` int(1) NOT NULL,
  `st_sklab` int(1) NOT NULL,
  `st_toefl` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`EmailDosen`);

--
-- Indeks untuk tabel `koordinator`
--
ALTER TABLE `koordinator`
  ADD PRIMARY KEY (`EmailKoor`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Email`);

--
-- Indeks untuk tabel `seminar_hasil`
--
ALTER TABLE `seminar_hasil`
  ADD PRIMARY KEY (`id_seminar_hasil`),
  ADD KEY `Email` (`Email`);

--
-- Indeks untuk tabel `seminar_ta`
--
ALTER TABLE `seminar_ta`
  ADD PRIMARY KEY (`id_seminar_ta`),
  ADD KEY `seminar_ta_ibfk_1` (`Email`);

--
-- Indeks untuk tabel `sidang`
--
ALTER TABLE `sidang`
  ADD PRIMARY KEY (`id_sidang`),
  ADD KEY `Email` (`Email`);

--
-- Indeks untuk tabel `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD PRIMARY KEY (`id_ta`),
  ADD KEY `Email` (`Email`),
  ADD KEY `EmailDosen` (`EmailDosen`);

--
-- Indeks untuk tabel `yudisium`
--
ALTER TABLE `yudisium`
  ADD PRIMARY KEY (`id_yudisium`),
  ADD KEY `Email` (`Email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `seminar_hasil`
--
ALTER TABLE `seminar_hasil`
  MODIFY `id_seminar_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `seminar_ta`
--
ALTER TABLE `seminar_ta`
  MODIFY `id_seminar_ta` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sidang`
--
ALTER TABLE `sidang`
  MODIFY `id_sidang` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  MODIFY `id_ta` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `yudisium`
--
ALTER TABLE `yudisium`
  MODIFY `id_yudisium` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `seminar_hasil`
--
ALTER TABLE `seminar_hasil`
  ADD CONSTRAINT `seminar_hasil_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `mahasiswa` (`Email`);

--
-- Ketidakleluasaan untuk tabel `seminar_ta`
--
ALTER TABLE `seminar_ta`
  ADD CONSTRAINT `seminar_ta_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `mahasiswa` (`Email`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sidang`
--
ALTER TABLE `sidang`
  ADD CONSTRAINT `sidang_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `mahasiswa` (`Email`);

--
-- Ketidakleluasaan untuk tabel `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD CONSTRAINT `tugas_akhir_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `mahasiswa` (`Email`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tugas_akhir_ibfk_2` FOREIGN KEY (`EmailDosen`) REFERENCES `dosen` (`EmailDosen`);

--
-- Ketidakleluasaan untuk tabel `yudisium`
--
ALTER TABLE `yudisium`
  ADD CONSTRAINT `yudisium_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `mahasiswa` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
