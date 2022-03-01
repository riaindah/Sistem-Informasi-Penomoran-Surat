-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 05:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suratmasuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `id` int(10) UNSIGNED NOT NULL,
  `disposisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`id`, `disposisi`, `users_id`, `created_at`, `updated_at`) VALUES
(3, 'Sekretaris', 1, '2022-01-22 21:29:02', '2022-01-22 21:29:02'),
(4, 'Kasubbag. Umum & Kepegawaian', 1, '2022-01-22 21:29:26', '2022-01-22 21:29:26'),
(5, 'Kasubbag. Keuangan', 1, '2022-01-22 21:29:47', '2022-01-22 21:29:47'),
(6, 'Kasubbag. Program', 1, '2022-01-22 21:30:11', '2022-01-22 21:30:11'),
(7, 'Kabid. Pembinaan Paud Dikmas', 1, '2022-01-22 21:30:40', '2022-01-22 21:30:40'),
(8, 'Kasi. Pendidikan Anak Usia Dini (PAUD)', 1, '2022-01-22 21:31:12', '2022-01-22 21:31:12'),
(9, 'Kasi. Pendidikan Masyarakat', 1, '2022-01-22 21:31:33', '2022-01-22 21:31:33'),
(10, 'Kabid. Pembinaan SD', 1, '2022-01-22 21:31:59', '2022-01-22 21:31:59'),
(11, 'Kasi. Kurikulum SD', 1, '2022-01-22 21:32:15', '2022-01-22 21:32:15'),
(12, 'Kasi. Kelembagaan dan Peserta Didik SD', 1, '2022-01-22 21:32:54', '2022-01-22 21:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `namakategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `namakategori`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'Akreditasi', 1, '2022-01-22 21:24:05', '2022-01-22 21:24:05'),
(2, 'Edaran', 1, '2022-01-22 21:24:18', '2022-01-22 21:24:18'),
(3, 'Himbauan', 1, '2022-01-22 21:24:31', '2022-01-22 21:24:31'),
(4, 'Kunjungan Kerja', 1, '2022-01-22 21:24:45', '2022-01-22 21:24:45'),
(5, 'Laporan Bulanan', 1, '2022-01-22 21:25:01', '2022-01-22 21:25:01'),
(6, 'Pemanggilan Bimtek/Worksop', 1, '2022-01-22 21:25:27', '2022-01-22 21:25:27'),
(7, 'Pemberitahuan', 1, '2022-01-22 21:25:40', '2022-01-22 21:25:40'),
(8, 'Pemindahbukuan', 1, '2022-01-22 21:26:01', '2022-01-22 21:26:01'),
(9, 'Penawaran Kerjasama', 1, '2022-01-22 21:26:23', '2022-01-22 21:26:23'),
(10, 'Penawaran Produk', 1, '2022-01-22 21:26:45', '2022-01-22 21:26:45'),
(11, 'Akreditasi', 1, '2022-01-25 20:41:17', '2022-01-25 20:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `kepada`
--

CREATE TABLE `kepada` (
  `id` int(10) UNSIGNED NOT NULL,
  `kepada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kepada`
--

INSERT INTO `kepada` (`id`, `kepada`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'Kadis', 1, '2022-01-22 21:34:06', '2022-01-22 21:34:06'),
(2, 'Sekretaris', 1, '2022-01-22 21:34:18', '2022-01-22 21:34:18'),
(3, 'Plh. Kadis', 1, '2022-01-22 21:34:30', '2022-01-22 21:34:30'),
(4, 'Plh. Sekretaris', 1, '2022-01-22 21:34:44', '2022-01-22 21:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2022_01_14_042532_create_kategori', 1),
(4, '2022_01_14_052318_create_disposisi_table', 1),
(5, '2022_01_14_053801_create_kepada_table', 1),
(6, '2022_01_14_055052_create_suratmasuk_table', 1),
(7, '2022_01_17_213634_create_tbl_suratmasuk_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `id` int(10) UNSIGNED NOT NULL,
  `klafikasinaskah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalregistrasi` date NOT NULL,
  `tanggalnaskah` date NOT NULL,
  `asalnaskah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomornaskah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihalnaskah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namakegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalawal` date NOT NULL,
  `tanggalakhir` date NOT NULL,
  `tempatkegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arahan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `disposisi_id` int(10) UNSIGNED NOT NULL,
  `kepada_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suratmasuk`
--

CREATE TABLE `tbl_suratmasuk` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanggalregistrasi` date NOT NULL,
  `tanggalnaskah` date NOT NULL,
  `asalnaskah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomornaskah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihalnaskah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namakegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalawal` date NOT NULL,
  `tanggalakhir` date NOT NULL,
  `tempatkegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arahan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `disposisi_id` int(10) UNSIGNED NOT NULL,
  `kepada_id` int(10) UNSIGNED NOT NULL,
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_suratmasuk`
--

INSERT INTO `tbl_suratmasuk` (`id`, `tanggalregistrasi`, `tanggalnaskah`, `asalnaskah`, `nomornaskah`, `perihalnaskah`, `namakegiatan`, `tanggalawal`, `tanggalakhir`, `tempatkegiatan`, `arahan`, `users_id`, `disposisi_id`, `kepada_id`, `kategori_id`, `created_at`, `updated_at`) VALUES
(1, '2021-04-04', '2021-04-01', 'Sekretaris Daerah', '910/0029/012.02', 'Pemanfaat sisa pagu. Anggaran Paket Pekerjaan (Penyedia/Swakelola) APBD TA. 2021', 'APBD TA. 2021', '2021-04-02', '2021-06-08', 'ZOOM', 'Agar ditindak lanjuti', 1, 3, 2, 7, '2022-01-22 21:43:39', '2022-01-22 21:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$KNB6rS2pZAY7STMNYNQHG.ixXFUtjNxGOs.AVYLL138oAP5SOWmOG', 'sADInt3YhGUHB5MBgVOL87WkBFwk0UPEkEEZznRlcGHhfLgfwxo5efB4QYbv', '2022-01-22 21:19:08', '2022-01-22 21:19:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk__disposisi_users_idx` (`users_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk__kategori_users_idx` (`users_id`);

--
-- Indexes for table `kepada`
--
ALTER TABLE `kepada`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk__kepada_users_idx` (`users_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk__suratmasuk_users_idx` (`users_id`),
  ADD KEY `fk__disposisi_berita1_idx` (`disposisi_id`),
  ADD KEY `fk__kepada_berita1_idx` (`kepada_id`);

--
-- Indexes for table `tbl_suratmasuk`
--
ALTER TABLE `tbl_suratmasuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk__suratmasuk_users_idx` (`users_id`),
  ADD KEY `fk__disposisi_berita1_idx` (`disposisi_id`),
  ADD KEY `fk__kepada_berita1_idx` (`kepada_id`),
  ADD KEY `fk__kategori_berita1_idx` (`kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kepada`
--
ALTER TABLE `kepada`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_suratmasuk`
--
ALTER TABLE `tbl_suratmasuk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
