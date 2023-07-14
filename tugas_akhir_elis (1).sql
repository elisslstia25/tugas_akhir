-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2023 at 03:30 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_akhir_elis`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` char(36) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_ktp` varchar(36) NOT NULL,
  `no_hp` varchar(36) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` varchar(255) DEFAULT NULL,
  `status_dosen` varchar(255) DEFAULT NULL,
  `institusi` varchar(255) DEFAULT NULL,
  `program_studi` varchar(255) DEFAULT NULL,
  `jenjang_pendidikan` varchar(255) DEFAULT NULL,
  `jabatan_akademik` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `bidang_keahlian` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian_usulanbaru`
--

CREATE TABLE `penelitian_usulanbaru` (
  `id` int NOT NULL,
  `id_pegawai` varchar(255) DEFAULT NULL,
  `nidn` varchar(255) NOT NULL,
  `status_pegawai` varchar(255) NOT NULL,
  `tanggung_jawab` varchar(255) NOT NULL,
  `tahun_usulan` varchar(255) NOT NULL,
  `tahun_pelaksanaan` varchar(255) NOT NULL,
  `status` int DEFAULT NULL,
  `judul_penelitian` varchar(255) DEFAULT NULL,
  `tkt_new` varchar(255) DEFAULT NULL,
  `end_tkt` varchar(255) DEFAULT NULL,
  `skema_penelitian` varchar(255) DEFAULT NULL,
  `rumpun_ilmu1` varchar(255) DEFAULT NULL,
  `rumpun_ilmu2` varchar(255) DEFAULT NULL,
  `rumpun_ilmu3` varchar(255) DEFAULT NULL,
  `bidang_penelitian` varchar(255) DEFAULT NULL,
  `bidang_prn` varchar(255) DEFAULT NULL,
  `tema_penelitian` varchar(255) DEFAULT NULL,
  `topik_penelitian` varchar(255) DEFAULT NULL,
  `lama_kegiatan` varchar(255) DEFAULT NULL,
  `nama_gelar1` varchar(255) DEFAULT NULL,
  `kualifikasi1` varchar(255) DEFAULT NULL,
  `bidang_keahlian1` varchar(255) DEFAULT NULL,
  `peran1` varchar(255) DEFAULT NULL,
  `tugas_penelitian1` varchar(255) DEFAULT NULL,
  `nama_gelar2` varchar(255) DEFAULT NULL,
  `kualifikasi2` varchar(255) DEFAULT NULL,
  `bidang_keahlian2` varchar(255) DEFAULT NULL,
  `peran2` varchar(255) DEFAULT NULL,
  `tugas_penelitian2` varchar(255) DEFAULT NULL,
  `dokumen` varchar(255) DEFAULT NULL,
  `dokumen2` varchar(255) DEFAULT NULL,
  `dokumen3` varchar(255) DEFAULT NULL,
  `jumlah_pendanaan` varchar(255) DEFAULT NULL,
  `nama_mitra` varchar(255) DEFAULT NULL,
  `bidang_mitra` varchar(255) DEFAULT NULL,
  `alamat_mitra` varchar(255) DEFAULT NULL,
  `dokumen_mitra` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penelitian_usulanbaru`
--

INSERT INTO `penelitian_usulanbaru` (`id`, `id_pegawai`, `nidn`, `status_pegawai`, `tanggung_jawab`, `tahun_usulan`, `tahun_pelaksanaan`, `status`, `judul_penelitian`, `tkt_new`, `end_tkt`, `skema_penelitian`, `rumpun_ilmu1`, `rumpun_ilmu2`, `rumpun_ilmu3`, `bidang_penelitian`, `bidang_prn`, `tema_penelitian`, `topik_penelitian`, `lama_kegiatan`, `nama_gelar1`, `kualifikasi1`, `bidang_keahlian1`, `peran1`, `tugas_penelitian1`, `nama_gelar2`, `kualifikasi2`, `bidang_keahlian2`, `peran2`, `tugas_penelitian2`, `dokumen`, `dokumen2`, `dokumen3`, `jumlah_pendanaan`, `nama_mitra`, `bidang_mitra`, `alamat_mitra`, `dokumen_mitra`, `created_at`, `updated_at`) VALUES
(1, NULL, '25012002', 'Aktif', 'dosen', '2022', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-13 01:54:40', '2023-07-13 01:54:40'),
(2, NULL, '25012002', 'Aktif', 'dosen', '2022', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-13 08:53:26', '2023-07-13 08:53:26'),
(3, NULL, '25012002', 'Aktif', 'dosen', '2022', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-13 19:33:41', '2023-07-13 19:33:41'),
(4, NULL, '25012002', 'Aktif', 'dosen', '2022', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-13 19:37:49', '2023-07-13 19:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `pengabdian_usulanbaru`
--

CREATE TABLE `pengabdian_usulanbaru` (
  `id` char(36) NOT NULL,
  `id_pegawai` varchar(255) DEFAULT NULL,
  `nidn` varchar(255) NOT NULL,
  `status_pegawai` varchar(255) NOT NULL,
  `tanggung_jawab` varchar(255) NOT NULL,
  `tahun_usulan` varchar(255) NOT NULL,
  `tahun_pelaksanaan` varchar(255) NOT NULL,
  `status` int DEFAULT NULL,
  `judul_penelitian` varchar(255) DEFAULT NULL,
  `tkt_new` varchar(255) DEFAULT NULL,
  `end_tkt` varchar(255) DEFAULT NULL,
  `skema_penelitian` varchar(255) DEFAULT NULL,
  `rumpun_ilmu1` varchar(255) DEFAULT NULL,
  `rumpun_ilmu2` varchar(255) DEFAULT NULL,
  `rumpun_ilmu3` varchar(255) DEFAULT NULL,
  `bidang_penelitian` varchar(255) DEFAULT NULL,
  `bidang_prn` varchar(255) DEFAULT NULL,
  `tema_penelitian` varchar(255) DEFAULT NULL,
  `topik_penelitian` varchar(255) DEFAULT NULL,
  `lama_kegiatan` varchar(255) DEFAULT NULL,
  `nama_gelar1` varchar(255) DEFAULT NULL,
  `kualifikasi1` varchar(255) DEFAULT NULL,
  `bidang_keahlian1` varchar(255) DEFAULT NULL,
  `peran1` varchar(255) DEFAULT NULL,
  `tugas_penelitian1` varchar(255) DEFAULT NULL,
  `nama_gelar2` varchar(255) DEFAULT NULL,
  `kualifikasi2` varchar(255) DEFAULT NULL,
  `bidang_keahlian2` varchar(255) DEFAULT NULL,
  `peran2` varchar(255) DEFAULT NULL,
  `tugas_penelitian2` varchar(255) DEFAULT NULL,
  `dokumen` varchar(255) DEFAULT NULL,
  `dokumen2` varchar(255) DEFAULT NULL,
  `dokumen3` varchar(255) DEFAULT NULL,
  `jumlah_pendanaan` varchar(255) DEFAULT NULL,
  `nama_mitra` varchar(255) DEFAULT NULL,
  `bidang_mitra` varchar(255) DEFAULT NULL,
  `alamat_mitra` varchar(255) DEFAULT NULL,
  `dokumen_mitra` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `level` varchar(255) NOT NULL,
  `nip` int DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `level`, `nip`, `username`, `email`, `nama`, `jenis_kelamin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 123456789, 'admin', 'admin@gmail.com', 'Admin', 'Laki-Laki', '$2y$10$u69YwhTcBQ6wWSKVhQ.hUOYk8y7mPRdPSovfmiIOAyHfG1AtZyT4i', 'm4bPiwZI6yaIiWGMCoHRKWSumuHag9dVhKNHmwMx1VdYqHEbwd5oiWrdmsmN', '2023-05-31 07:31:25', '2023-07-13 07:37:52'),
(2, 'dosen', 12345678, 'dosen', 'dosen@gmail.com', 'dosen', 'Laki-Laki', '$2y$10$u69YwhTcBQ6wWSKVhQ.hUOYk8y7mPRdPSovfmiIOAyHfG1AtZyT4i', NULL, '2023-05-31 07:31:25', '2023-07-11 13:38:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penelitian_usulanbaru`
--
ALTER TABLE `penelitian_usulanbaru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengabdian_usulanbaru`
--
ALTER TABLE `pengabdian_usulanbaru`
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
-- AUTO_INCREMENT for table `penelitian_usulanbaru`
--
ALTER TABLE `penelitian_usulanbaru`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
