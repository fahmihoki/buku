-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Okt 2017 pada 04.46
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokobuku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noisbn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_pokok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_jual` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ppn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diskon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `noisbn`, `penulis`, `penerbit`, `stok`, `harga_pokok`, `harga_jual`, `ppn`, `diskon`, `created_at`, `updated_at`) VALUES
(7, 'agung', '12321', 'sadsa', 'asdsadsa', '12312312', '12312', '12321', '321', '321', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `distri`
--

CREATE TABLE `distri` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_distri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `distri`
--

INSERT INTO `distri` (`id`, `nama_distri`, `alamat`, `telepon`, `created_at`, `updated_at`) VALUES
(6, 'fendi', 'garut :)', '1221334455', '2017-10-09 01:35:14', '2017-10-09 01:35:14'),
(7, 'krishna ar', 'cibiru', '1234567890', '2017-10-09 01:35:44', '2017-10-09 01:35:44'),
(8, 'm adhi p', 'baturaden', '1499987654', '2017-10-09 01:36:19', '2017-10-09 01:36:19'),
(9, 'riki p', 'uber', '34561722878', '2017-10-09 01:37:19', '2017-10-09 01:37:19'),
(10, 'nama', 'alamarr', '0121', '2017-10-16 18:12:34', '2017-10-16 18:12:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jualan`
--

CREATE TABLE `jualan` (
  `id` int(10) UNSIGNED NOT NULL,
  `buku_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jualan`
--

INSERT INTO `jualan` (`id`, `buku_id`, `users_id`, `jumlah`, `total`, `created_at`, `updated_at`) VALUES
(2, '7', 'waja', '465', '1000', '2017-10-21 18:29:19', '2017-10-21 18:29:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasok`
--

CREATE TABLE `pasok` (
  `id` int(10) UNSIGNED NOT NULL,
  `distri_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buku_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pasok`
--

INSERT INTO `pasok` (`id`, `distri_id`, `buku_id`, `jumlah`, `tanggal`, `created_at`, `updated_at`) VALUES
(13, '7', '7', '312', '12312', NULL, '2017-10-21 07:48:11'),
(14, '09', '7', '1000', '17 oktober 2017', '2017-10-21 07:31:59', '2017-10-21 07:32:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `jabatan`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'waja', 'wajaganteng100', '$2y$10$UA2Q6V611LN8oJF1a9iQ5ebYS7JGOEjvnAopNSW47LEm8B0oz.lfq', 'Admin', 'nHzLk1hV6a4fB5e1bcPP7WTPh039xYUKF8YUqHLIk011cmhef0ys8iYbarIs', '2017-10-21 18:26:37', '2017-10-21 18:26:37'),
(6, 'fendi', 'fendicilau', '$2y$10$/uUE2kADqeQz1KcXxBUIJOCCKxXPxMaYBzDszImbsq8x8YUz1ehS2', 'Kasir', 'tl6EsZpZ09VcSjOHqd2sqHYzPVmq4QFOvuFQEW0meUJ9Uz4UOEzn3NmdA7Xe', '2017-10-21 18:31:02', '2017-10-21 18:31:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distri`
--
ALTER TABLE `distri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jualan`
--
ALTER TABLE `jualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasok`
--
ALTER TABLE `pasok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `distri`
--
ALTER TABLE `distri`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jualan`
--
ALTER TABLE `jualan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pasok`
--
ALTER TABLE `pasok`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
