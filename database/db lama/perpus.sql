-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2020 pada 05.51
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`) VALUES
('Admin', 'Admin', 'Diki Hendriyanto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `npm` varchar(13) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `semester` int(2) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `fakultas` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `npm`, `no_hp`, `jk`, `semester`, `prodi`, `fakultas`) VALUES
('A0001', 'Diki Hendriyanto', '18199', '081264538273', 'Laki-Laki', 4, 'Teknik Informatika', 'Ilmu Komputer'),
('A0002', 'Fernando Hartawan', '18167', '18167', 'Laki-Laki', 6, 'Ilmu Komunikasi', 'Ilmu Sosial dan Ilmu Politik'),
('A0003', 'Dimas Faris', '18176', '081265745632', 'Laki-Laki', 2, 'Sistem Informasi', 'Ilmu Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `kd_buku` varchar(10) NOT NULL,
  `isbn` varchar(15) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  `tahun` int(4) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `penerbit` varchar(25) NOT NULL,
  `jumlah_buku` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`kd_buku`, `isbn`, `judul_buku`, `tahun`, `pengarang`, `penerbit`, `jumlah_buku`) VALUES
('B10001', '603-1977-41-7', 'Pemrograman Java dari Nol', 2015, 'Tim EMS', 'Elex Media Komputindo', 19),
('B10002', '602-1514-91-7', 'Algoritma dan Pemrograman', 2016, 'Rinaldi Munir', 'INFORMATIKA', 5),
('B10003', '613-1467-41-7', 'All in One Web Programming', 2016, 'Tim EMS', 'Elex Media Komputindo', 12),
('B10004', '9789798774720', 'Pemrograman Sistem Pakar', 2017, 'Anik Andriani, M.Kom.', 'Mediakom', 3),
('B10005', '9786020448510', 'Otodidak Pemrograman Python', 2017, 'Jubilee Enterprise', 'Elex Media Komputindo', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` varchar(12) NOT NULL,
  `id_anggota` varchar(10) NOT NULL,
  `kd_buku` varchar(10) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `id_anggota`, `kd_buku`, `tgl_pinjam`, `tgl_kembali`) VALUES
('P0001', 'A0001', 'B10001', '2020-04-21', '2020-04-25'),
('P0002', 'A0001', 'B10004', '2020-04-21', '2020-04-25'),
('P0003', 'A0002', 'B10003', '2020-04-23', '2020-04-29'),
('P0004', 'A0003', 'B10005', '2020-04-23', '2020-04-30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kd_buku`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `kd_buku` (`kd_buku`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `fk_anggota` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_buku` FOREIGN KEY (`kd_buku`) REFERENCES `buku` (`kd_buku`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
