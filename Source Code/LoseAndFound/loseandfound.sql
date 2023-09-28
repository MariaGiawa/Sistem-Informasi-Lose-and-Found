-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Bulan Mei 2022 pada 18.30
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loseandfound`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 'Kehilangan', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(2, 'Penemuan', '2022-05-19 15:30:22', '2022-05-19 15:30:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi_id` bigint(20) UNSIGNED NOT NULL,
  `nohp` bigint(20) NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `id_user`, `nama`, `nim`, `prodi_id`, `nohp`, `alamat`, `email`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rian shaputra', '11321048', 1, 85273833908, 'Dumai', 'rian@email.com', '2022-05-19 15:30:23', '2022-05-19 15:30:23'),
(2, 3, 'Saimarito simanullang', '11321059', 1, 82277051959, 'Balige', 'saimarito@email.com', '2022-05-19 15:30:23', '2022-05-19 15:30:23'),
(3, 4, 'Maria giawa', '11321069', 1, 82273282438, 'Medan', 'maria@email.com', '2022-05-19 15:30:23', '2022-05-19 15:30:23'),
(4, 5, 'Dafne simanjuntak', '11321006', 1, 82212344321, 'Dumai', 'dafne@email.com', '2022-05-19 15:30:23', '2022-05-19 15:30:23');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_04_14_055056_create_prodi_table', 1),
(4, '2022_04_18_175936_create__mahasiswa', 1),
(5, '2022_04_18_180115_create__pihak__ketertiban', 1),
(6, '2022_04_18_181549_create__barang', 1),
(7, '2022_05_10_181534_create__pengumuman', 1),
(8, '2022_05_18_191515_add_status_to_pengumuman_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `jenis_id` bigint(20) UNSIGNED NOT NULL,
  `nama_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` datetime NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` enum('Pending','Finished','Expired') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Expired'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `user_id`, `jenis_id`, `nama_item`, `merk`, `gambar`, `tanggal`, `lokasi`, `deskripsi`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 2, 1, 'jaket', 'adidas', 'jaket.jpg', '2022-05-15 15:00:00', 'sekitaran entrance hall', 'Jaket berwarna hitam bermerek adidas. Dibagian dalam jaket ada tertulis inisial RSH menggunakan ukiran benang berwarna putih', '2022-05-19 15:30:23', '2022-05-19 15:30:23', NULL, 'Expired'),
(2, 2, 2, 'Botol minum', 'tupperware', 'botolminum.jpg', '2022-05-12 14:00:00', 'Entrance hall', 'botol minum bermerek Tupperware dan berwarna ungu. Bermuatan 2L dan terdapat inisial 006TI21', '2022-05-19 15:30:23', '2022-05-19 15:30:23', NULL, 'Expired'),
(3, 3, 1, 'Jam tangan', 'Daniel Wellington', 'jam.jpg', '2022-05-16 10:00:00', 'Saung dekat GD721', 'Jam tangan merupakan merk Daniel Wellington. Tali bercorak warna biru dan merah', '2022-05-19 15:30:23', '2022-05-19 15:30:23', NULL, 'Expired'),
(4, 3, 2, 'Pin', 'Del', 'pindel.jpg', '2022-05-13 12:00:00', 'GD 721', 'Pin ditemukan di GD 721 di meja paling depan di dekat pintu. Dibelakang pin terdapat inisial 069TI21', '2022-05-19 15:30:23', '2022-05-19 15:30:23', NULL, 'Expired'),
(5, 4, 1, 'Payung', 'Dolphin', 'payung.jpg', '2022-05-17 15:30:00', 'Sekitaran auditorium', 'Payung bermerek Dolpin berwarna hitam. Paying tersebut adalah payung otomatis saat dibuka dan ditutup. Tertulis UV Protection di paying dan ada inisial MFG di dalam paying dan di gagang payung', '2022-05-19 15:30:23', '2022-05-19 15:30:23', NULL, 'Expired'),
(6, 4, 2, 'Topi', 'Converse', 'topi.jpg', '2022-05-15 13:40:00', 'Kantin 2 lantai 1', 'topi berwarna hitam merk converse tanpa identitas ditemukan di kantin 2 lantai 1 di meja paling belakang', '2022-05-19 15:30:23', '2022-05-19 15:30:23', NULL, 'Expired'),
(7, 5, 1, 'Charger laptop', 'Asus', 'charger.jpg', '2022-05-18 16:30:00', 'Saung dekat GD 713', 'charger merupakan merek asus terdapat nama Dafne.Y yang ditempelkan menggunakan selotip pada bagian kepala charger', '2022-05-19 15:30:23', '2022-05-19 15:30:23', NULL, 'Expired'),
(8, 5, 2, 'Mouse', 'Robot', 'mouse.jpg', '2022-05-14 12:00:00', 'GD 722', 'mouse bermerek robot dan berwarna biru. Mouse ini adalah mouse wireless tanpa identitas ditemukan di GD722', '2022-05-19 15:30:23', '2022-05-19 15:30:23', NULL, 'Expired');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pihak_ketertiban`
--

CREATE TABLE `pihak_ketertiban` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` bigint(20) NOT NULL,
  `prodi_id` bigint(20) UNSIGNED NOT NULL,
  `angkatan` int(11) NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pihak_ketertiban`
--

INSERT INTO `pihak_ketertiban` (`id`, `nama`, `nohp`, `prodi_id`, `angkatan`, `nim`, `created_at`, `updated_at`) VALUES
(1, 'Sondang Kevin P. Sihaloho', 6281325951201, 4, 2019, '11S19044', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(2, 'Lucy Patrecia Butarbutar', 6281325951201, 1, 2019, '11319056', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(3, 'Meida Butarbutar', 6285260548747, 8, 2020, '12S20049', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(4, 'Natalia Merlin Genongga', 6281260783403, 3, 2020, '11420025', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(5, 'Ponalisa Yikwa', 6281240878692, 3, 2020, '11420007', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(6, 'Rody Towolom', 6282273817832, 3, 2020, '11420017', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(7, 'Sandro Sinaga', 6282164539157, 8, 2020, '12S20024', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(8, 'Yehezkiel Felias', 62895601247596, 6, 2019, '31S19006', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(9, 'Deasy Nataline Sitorus', 6281262118558, 7, 2019, '21S19031', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(10, 'Fadly Riscky Sirait', 6282277158762, 7, 2019, '21S19008', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(11, 'Elysa Noelia Pangaribuan', 6282294583345, 8, 2019, '12S19053', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(12, 'Nazir Manahan Manurung', 6282365631690, 3, 2019, '11419020', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(13, 'Puan Maharani Sirait', 6282370388328, 4, 2019, '11S19059', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(14, 'Kevin Willys Nathaneil Samosir', 6285260331246, 4, 2020, '11S20034', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(15, 'Andreas Hatigoran', 6287888745737, 4, 2019, '11S19047', '2022-05-19 15:30:22', '2022-05-19 15:30:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id`, `prodi`, `created_at`, `updated_at`) VALUES
(1, 'D3 Teknologi Informasi', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(2, 'D3 Teknologi Komputer', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(3, 'D4 Teknologi Rekayasa Perangkat Lunak', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(4, 'S1 Informatika', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(5, 'S1 Teknik Elektro', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(6, 'S1 Teknik Bioproses', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(7, 'S1 Manajemen Rekayasa', '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(8, 'S1 Sistem Informasi', '2022-05-19 15:30:22', '2022-05-19 15:30:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `is_admin`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$emJ4WVKLWDY/dX7qJQh0E.KzsC.ZNb6Nid.71j4K/zDxlozgiXoke', 1, NULL, NULL, '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(2, 'rianshp', '$2y$10$Sh6cPizzi8wL9TcPnowf/elHQQjFeshbzXz6dgQKpLh5PefQNIICC', 0, NULL, NULL, '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(3, 'saimarito', '$2y$10$13glNvH5fKWz3Guw.uieAuFPyLUUUDlC.NEYhYVBi5S1Z.dbiu/ay', 0, NULL, NULL, '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(4, 'maria', '$2y$10$MkZD2L731a4xvA1fEK/Houb0TdQBhTkSpdSpypFjhS36d4plQ56Wi', 0, NULL, NULL, '2022-05-19 15:30:22', '2022-05-19 15:30:22'),
(5, 'dafne', '$2y$10$CpaDhtJZXygMyrhf8k06F.xQR22Tjncsou3ACBputxI5k7j9flxyW', 0, NULL, NULL, '2022-05-19 15:30:23', '2022-05-19 15:30:23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswa_nim_unique` (`nim`),
  ADD UNIQUE KEY `mahasiswa_email_unique` (`email`),
  ADD KEY `mahasiswa_prodi_id_foreign` (`prodi_id`),
  ADD KEY `mahasiswa_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengumuman_user_id_foreign` (`user_id`),
  ADD KEY `pengumuman_jenis_id_foreign` (`jenis_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pihak_ketertiban`
--
ALTER TABLE `pihak_ketertiban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pihak_ketertiban_prodi_id_foreign` (`prodi_id`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pihak_ketertiban`
--
ALTER TABLE `pihak_ketertiban`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `mahasiswa_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`);

--
-- Ketidakleluasaan untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD CONSTRAINT `pengumuman_jenis_id_foreign` FOREIGN KEY (`jenis_id`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `pengumuman_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `pihak_ketertiban`
--
ALTER TABLE `pihak_ketertiban`
  ADD CONSTRAINT `pihak_ketertiban_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
