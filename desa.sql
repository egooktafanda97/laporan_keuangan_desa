-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Sep 2019 pada 09.44
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `thm` text NOT NULL,
  `berita` text NOT NULL,
  `view` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `thm`, `berita`, `view`, `tanggal`) VALUES
(2, 'jgfghvghhj', 'http://localhost/desa/assets/img/uploaded/29156cbd7558000470cb3377d6a33bc7.jpg', '<p>bokppppppppppppppppppppppppppppp</p>\r\n', 0, '2019-09-04 09:32:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembangunan`
--

CREATE TABLE `pembangunan` (
  `id` int(11) NOT NULL,
  `pembangunan` text NOT NULL,
  `jenis` varchar(40) NOT NULL,
  `lokasi` text NOT NULL,
  `koordinat` varchar(30) NOT NULL,
  `biaya` decimal(10,0) NOT NULL,
  `img` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembangunan`
--

INSERT INTO `pembangunan` (`id`, `pembangunan`, `jenis`, `lokasi`, `koordinat`, `biaya`, `img`, `tanggal`) VALUES
(6, 'jalan', 'jalan kampung', 'dusun pasar', '-0.500462348177969,101.4803642', '10000000', '3c565826cd7c02c859ee7079f4543c61.jpg', '2019-09-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendapatan`
--

CREATE TABLE `pendapatan` (
  `id` int(11) NOT NULL,
  `sumber` text NOT NULL,
  `jumlah` decimal(10,0) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendapatan`
--

INSERT INTO `pendapatan` (`id`, `sumber`, `jumlah`, `tanggal`) VALUES
(4, 'PT CITRA', '400000', '2019-09-02'),
(6, 'Pt sdfsd', '200000', '2019-01-02'),
(7, 'pt sdkjfnjdsfi', '1000000', '2019-02-07'),
(8, 'ptnbhjbj', '30000', '2019-02-20'),
(9, 'jsdbjfjs', '600000', '2020-03-11'),
(10, 'jsbefsj', '10000000', '2021-09-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `di_pergunakan` text NOT NULL,
  `jumlah` decimal(10,0) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `di_pergunakan`, `jumlah`, `tanggal`) VALUES
(2, 'ios', '40000', '2019-09-08'),
(3, 'p', '10000', '2019-09-01'),
(5, 'jalan', '10000000', '2019-09-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `profil` text NOT NULL,
  `cover` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `koordinat` varchar(40) NOT NULL,
  `struktur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `profil`, `cover`, `visi`, `misi`, `koordinat`, `struktur`) VALUES
(1, '<p>pop</p>\r\n', 'fdf94759505bc37eee4084d80aa061a6.jpg', '<p>pip</p>\r\n', '<p>pup</p>\r\n', '37.441679657392164,-122.16030066630395', 'c1f6a4e2f398b00e2b6305bf207a731f.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembangunan`
--
ALTER TABLE `pembangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pembangunan`
--
ALTER TABLE `pembangunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pendapatan`
--
ALTER TABLE `pendapatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
