-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Apr 2018 pada 12.29
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alpa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat_auditlog`
--

CREATE TABLE `alat_auditlog` (
  `log_id` int(11) NOT NULL,
  `log_user_id` int(11) DEFAULT NULL,
  `log_aksi` varchar(20) DEFAULT NULL,
  `log_datetime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat_keterangan`
--

CREATE TABLE `alat_keterangan` (
  `ket_id` int(11) NOT NULL,
  `ket_nama` varchar(100) DEFAULT NULL,
  `ket_created` datetime DEFAULT NULL,
  `ket_modified` datetime DEFAULT NULL,
  `ket_account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alpa_alat`
--

CREATE TABLE `alpa_alat` (
  `alat_id` int(11) NOT NULL,
  `alat_nama` varchar(100) DEFAULT NULL,
  `alat_merk` varchar(50) DEFAULT NULL,
  `alat_type` varchar(50) DEFAULT NULL,
  `alat_milik` varchar(100) DEFAULT NULL,
  `alat_thnpembuatan` varchar(10) DEFAULT NULL,
  `alat_kapasitas` varchar(20) DEFAULT NULL,
  `alat_status` varchar(10) DEFAULT NULL,
  `alat_keterangan` varchar(100) DEFAULT NULL,
  `alat_created` datetime DEFAULT NULL,
  `alat_modified` datetime DEFAULT NULL,
  `alat_account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alpa_hakakses`
--

CREATE TABLE `alpa_hakakses` (
  `hak_id` int(11) NOT NULL,
  `hak_ug_id` int(11) DEFAULT NULL,
  `hak_mod_id` int(11) DEFAULT NULL,
  `hak_akses` int(11) DEFAULT NULL,
  `hak_add` int(11) DEFAULT NULL,
  `hak_edit` int(11) DEFAULT NULL,
  `hak_delete` int(11) DEFAULT NULL,
  `hak_created` datetime DEFAULT NULL,
  `hak_modified` datetime DEFAULT NULL,
  `hak_account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alpa_kesiapan_alat`
--

CREATE TABLE `alpa_kesiapan_alat` (
  `ksa_id` int(11) NOT NULL,
  `ksa_off_id` int(11) DEFAULT NULL,
  `ksa_alat_id` int(11) DEFAULT NULL,
  `ksa_status` varchar(20) DEFAULT NULL,
  `ksa_keterangan` varchar(100) DEFAULT NULL,
  `ksa_estimasi_kesiapan` date DEFAULT NULL,
  `ksa_created` datetime DEFAULT NULL,
  `ksa_modified` datetime DEFAULT NULL,
  `ksa_account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alpa_menu`
--

CREATE TABLE `alpa_menu` (
  `m_id` int(11) NOT NULL,
  `m_menu` varchar(30) DEFAULT NULL,
  `m_icon` varchar(50) DEFAULT NULL,
  `m_link` varchar(100) DEFAULT NULL,
  `m_urutan` int(11) DEFAULT NULL,
  `m_created` datetime DEFAULT NULL,
  `m_modified` datetime DEFAULT NULL,
  `m_account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alpa_merk`
--

CREATE TABLE `alpa_merk` (
  `merk_id` int(11) NOT NULL,
  `merk_nama` varchar(50) DEFAULT NULL,
  `merk_created` datetime DEFAULT NULL,
  `merk_modified` datetime DEFAULT NULL,
  `merk_account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alpa_modlink`
--

CREATE TABLE `alpa_modlink` (
  `mol_id` int(11) NOT NULL,
  `mol_mod_id` int(11) DEFAULT NULL,
  `mol_nama` varchar(50) DEFAULT NULL,
  `mol_link` varchar(100) DEFAULT NULL,
  `mol_created` datetime DEFAULT NULL,
  `mol_modified` datetime DEFAULT NULL,
  `mol_account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alpa_modul`
--

CREATE TABLE `alpa_modul` (
  `mod_id` int(11) NOT NULL,
  `mod_label` varchar(50) DEFAULT NULL,
  `mod_alias` varchar(50) DEFAULT NULL,
  `mod_created` datetime DEFAULT NULL,
  `mod_modified` datetime DEFAULT NULL,
  `mod_account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alpa_office`
--

CREATE TABLE `alpa_office` (
  `off_id` int(11) NOT NULL,
  `off_nama` varchar(100) DEFAULT NULL,
  `off_lokasi` varchar(50) DEFAULT NULL,
  `off_type` varchar(50) DEFAULT NULL,
  `off_alamat` text,
  `off_phone` varchar(20) DEFAULT NULL,
  `off_email` varchar(100) DEFAULT NULL,
  `off_created` datetime DEFAULT NULL,
  `off_modified` datetime DEFAULT NULL,
  `off_account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alpa_submenu`
--

CREATE TABLE `alpa_submenu` (
  `sub_id` int(11) NOT NULL,
  `sub_m_id` int(11) DEFAULT NULL,
  `sub_label` varchar(30) DEFAULT NULL,
  `sub_link` varchar(100) DEFAULT NULL,
  `sub_urutan` int(11) DEFAULT NULL,
  `sub_created` datetime DEFAULT NULL,
  `sub_modified` datetime DEFAULT NULL,
  `sub_account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alpa_user`
--

CREATE TABLE `alpa_user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_namadepan` varchar(100) DEFAULT NULL,
  `user_namabelakang` varchar(100) DEFAULT NULL,
  `user_kantor` varchar(100) DEFAULT NULL,
  `user_alamat` text,
  `user_photo` varchar(100) DEFAULT NULL,
  `user_status` varchar(30) DEFAULT NULL,
  `user_created` datetime DEFAULT NULL,
  `user_modified` datetime DEFAULT NULL,
  `user_account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alpa_usergroup`
--

CREATE TABLE `alpa_usergroup` (
  `ug_id` int(11) NOT NULL,
  `ug_usergroup` varchar(50) DEFAULT NULL,
  `ug_label` varchar(50) DEFAULT NULL,
  `ug_created` datetime DEFAULT NULL,
  `ug_midified` datetime DEFAULT NULL,
  `ug_account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fajar', 'fajar', 'fajarpratamap@gmail.com', '$2y$10$SaWUo.a3QVINz5Kyr6Bg7ecfRmp.34H24KnZZxtZfhCXTkLsKNfCu', 'yxZmCLCFZaCEo6nIwkOxjXAKdBWbuviHyuqaC6kEkzGoillgNUHBdD5DQSHf', '2018-04-18 23:19:33', '2018-04-18 23:19:33'),
(2, 'Fajar Pratama Putra', 'putra', 'putra@gmail.com', '$2y$10$41.g4lJJ922Gw4PceGkr0.OHuYniBAJUI09V88rv3JPGgUwDqXYZu', 'wSlBvfeQoQUT5xvW9if8cc9SW47kKdUpbwibKJKmK2YIY2aNCm45C3N8VFhZ', '2018-04-19 00:06:13', '2018-04-19 00:06:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_auditlog`
--
ALTER TABLE `alat_auditlog`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `alat_keterangan`
--
ALTER TABLE `alat_keterangan`
  ADD PRIMARY KEY (`ket_id`);

--
-- Indexes for table `alpa_alat`
--
ALTER TABLE `alpa_alat`
  ADD PRIMARY KEY (`alat_id`);

--
-- Indexes for table `alpa_hakakses`
--
ALTER TABLE `alpa_hakakses`
  ADD PRIMARY KEY (`hak_id`);

--
-- Indexes for table `alpa_kesiapan_alat`
--
ALTER TABLE `alpa_kesiapan_alat`
  ADD PRIMARY KEY (`ksa_id`);

--
-- Indexes for table `alpa_menu`
--
ALTER TABLE `alpa_menu`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `alpa_merk`
--
ALTER TABLE `alpa_merk`
  ADD PRIMARY KEY (`merk_id`);

--
-- Indexes for table `alpa_modlink`
--
ALTER TABLE `alpa_modlink`
  ADD PRIMARY KEY (`mol_id`);

--
-- Indexes for table `alpa_modul`
--
ALTER TABLE `alpa_modul`
  ADD PRIMARY KEY (`mod_id`);

--
-- Indexes for table `alpa_office`
--
ALTER TABLE `alpa_office`
  ADD PRIMARY KEY (`off_id`);

--
-- Indexes for table `alpa_submenu`
--
ALTER TABLE `alpa_submenu`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `alpa_user`
--
ALTER TABLE `alpa_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `alpa_usergroup`
--
ALTER TABLE `alpa_usergroup`
  ADD PRIMARY KEY (`ug_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `alat_auditlog`
--
ALTER TABLE `alat_auditlog`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alat_keterangan`
--
ALTER TABLE `alat_keterangan`
  MODIFY `ket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alpa_alat`
--
ALTER TABLE `alpa_alat`
  MODIFY `alat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alpa_hakakses`
--
ALTER TABLE `alpa_hakakses`
  MODIFY `hak_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alpa_kesiapan_alat`
--
ALTER TABLE `alpa_kesiapan_alat`
  MODIFY `ksa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alpa_menu`
--
ALTER TABLE `alpa_menu`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alpa_merk`
--
ALTER TABLE `alpa_merk`
  MODIFY `merk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alpa_modlink`
--
ALTER TABLE `alpa_modlink`
  MODIFY `mol_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alpa_modul`
--
ALTER TABLE `alpa_modul`
  MODIFY `mod_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alpa_office`
--
ALTER TABLE `alpa_office`
  MODIFY `off_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alpa_submenu`
--
ALTER TABLE `alpa_submenu`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alpa_user`
--
ALTER TABLE `alpa_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alpa_usergroup`
--
ALTER TABLE `alpa_usergroup`
  MODIFY `ug_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
