-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2020 pada 21.30
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
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(6) NOT NULL,
  `id_user` int(6) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tab` varchar(255) NOT NULL,
  `konten` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_user`, `judul`, `tab`, `konten`, `created_at`, `updated_at`) VALUES
(1, 2, 'Sistem Penjualan Online', 'Online', 'Online', '2020-11-28 10:11:52', '2020-11-28 17:58:46'),
(2, 3, 'Sistem Penjualan Baju', 'Baju', 'Baju', '2020-11-28 10:15:52', '2020-11-28 17:58:55'),
(3, 2, 'Sistem Pakar', 'Sistem Pakar', 'Sistem Pakar', '2020-11-28 10:25:09', '2020-11-28 17:58:49'),
(4, 2, 'Sistem Pendukung Keputusan', 'Sistem Pendukung Keputusan', 'Sistem Pendukung Keputusan', '2020-11-28 10:25:29', '2020-11-28 17:58:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komen`
--

CREATE TABLE `komen` (
  `id_komen` int(6) NOT NULL,
  `id_user` int(6) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `sender` int(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komen`
--

INSERT INTO `komen` (`id_komen`, `id_user`, `isi`, `sender`, `created_at`, `updated_at`) VALUES
(4, 2, 'tes', 1, '2020-11-28 12:58:25', '2020-11-28 12:58:25'),
(5, 2, 'Tes', 2, '2020-11-28 13:14:09', '2020-11-28 13:14:09'),
(6, 2, 'Assalamu\'alaikum', 2, '2020-11-28 13:23:08', '2020-11-28 13:23:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(6) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `nama`, `username`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Junaidi', 'junaidi', '$2y$10$4dGuz15xPLMJZVo7A0XHyuPrxVBkmRDVB8c86i8yl5JyrO8zlluVC', '2020-11-28 09:24:15', '2020-11-28 09:24:15'),
(3, 'Weni', 'weni', '$2y$10$lslqZJRB/iMeS.Qf9MAlWuz1WEp5Y58Seu.CFV19LJ4IZmamy9.jW', '2020-11-28 09:27:35', '2020-11-28 09:27:35'),
(4, 'Rinda Ayuni', 'rinda', '$2y$10$VVAyqJt1CRVfPVuOzImChuxvqUONOxH7FlVk4lFm/ntwrLkwuLMTu', '2020-11-28 09:27:50', '2020-11-28 09:27:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(6) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$zpnjPqbqu5VIyPK7BJQTvel9JO/qkGOm.bocxw7Mp1/gYhf/XZR6m', 1, NULL, '2020-11-28 08:55:45', '2020-11-28 08:55:45'),
(2, 'junaidi', '$2y$10$/xrtPjbGxoAp4HUpYLlxqeQiMN25zYcPzh1TktGlAYdE7M8ArXEJm', 2, 'IV6FHmxrtFxDJ75yFhPkEvlJTPvaPxAzk0b7RU6QoVpFZRZVtxul2hmT5ZMt', '2020-11-28 09:24:15', '2020-11-28 18:45:09'),
(3, 'weni', '$2y$10$1wFXus92B/OaPbOr1xGE8eUPFoqE4oY3yoHQCNiDk75CgdzsiIoWO', 2, NULL, '2020-11-28 09:27:35', '2020-11-28 09:27:35'),
(4, 'rinda', '$2y$10$wAGMpxV0nvvFynIH3to1u.0r0di.ue2hBoX0/zQhYXh0Yzx6VTMfq', 2, NULL, '2020-11-28 09:27:50', '2020-11-28 09:27:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id_komen`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `komen`
--
ALTER TABLE `komen`
  MODIFY `id_komen` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
