-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Feb 2020 pada 03.13
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang`
--

CREATE TABLE `gudang` (
  `id_gudang` int(11) NOT NULL,
  `tanggal_gudang` date NOT NULL,
  `produk_gudang` varchar(16) NOT NULL,
  `jumlah_gudang` int(11) NOT NULL,
  `status_gudang` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gudang`
--

INSERT INTO `gudang` (`id_gudang`, `tanggal_gudang`, `produk_gudang`, `jumlah_gudang`, `status_gudang`) VALUES
(8, '2020-02-13', 'TLF', 50, 'Barang Telah Diterima'),
(9, '2020-02-26', 'TLHB', 100, 'Barang Telah Diterima'),
(10, '2020-02-13', 'TLF', 500, 'Menunggu Pengiriman'),
(11, '2020-02-13', 'TLN', 250, 'Menunggu Pengiriman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `marketing`
--

CREATE TABLE `marketing` (
  `id_marketing` int(11) NOT NULL,
  `tanggal_marketing` date NOT NULL,
  `konsumen_marketing` varchar(64) NOT NULL,
  `produk_marketing` varchar(32) NOT NULL,
  `jumlah_marketing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `marketing`
--

INSERT INTO `marketing` (`id_marketing`, `tanggal_marketing`, `konsumen_marketing`, `produk_marketing`, `jumlah_marketing`) VALUES
(1, '2020-02-26', 'Produksi', 'TLHB', 100),
(2, '2020-02-13', 'Produksi', 'TLF', 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `produk_pengajuan` varchar(32) NOT NULL,
  `jumlah_pengajuan` int(11) NOT NULL,
  `status_pengajuan` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `tanggal_pengajuan`, `produk_pengajuan`, `jumlah_pengajuan`, `status_pengajuan`) VALUES
(1, '2020-02-26', 'TLHB', 100, 'Diterima'),
(2, '2020-02-13', 'TLF', 50, 'Diterima'),
(3, '2020-02-13', 'TLHB', 950, 'Menunggu Konfirmasi'),
(4, '2020-02-13', 'TLF', 500, 'Diterima'),
(5, '2020-02-13', 'TLN', 3000, 'Ditolak'),
(6, '2020-02-13', 'TLN', 250, 'Diterima'),
(7, '2020-02-13', 'TLF', 500, 'Menunggu Konfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `jenis_id` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `jenis_id`) VALUES
(1, 'produksi', 'prod1234', 'produksi'),
(2, 'pemilik', 'pem1234', 'pemilik'),
(3, 'gudang', 'gud1234', 'gudang'),
(4, 'marketing', 'mar1234', 'marketing');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id_gudang`);

--
-- Indeks untuk tabel `marketing`
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`id_marketing`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id_gudang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `marketing`
--
ALTER TABLE `marketing`
  MODIFY `id_marketing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
